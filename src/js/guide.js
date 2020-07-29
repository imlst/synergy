import hljs from 'highlight.js';
window.hljs = hljs;
hljs.initHighlightingOnLoad();

const BREAKPOINT = 1200;

export default class Guide {
    constructor({ element, ...options }) {
        this.element = element;
        this.options = options;
        this.opened = false;
        this.links = {};
        this.bar = this.element.querySelector('[data-guide-bar]');
        this.loader = this.element.querySelector('.loader');
        this.burger = this.element.querySelector('[data-guide-burger]');
        this.overlay = this.element.querySelector('[data-guide-overlay]');
        this.blocks = Array.from(this.element.querySelectorAll('[data-guide-block]'));
        this.customizableIcon = this.element.querySelector('[data-customizable-icon]');
        this.customizableDropdown = this.element.querySelector('[data-customizable-dropdown]');
        this.customizableState = {};
        this.customizableDefaultState = {};
        this.customizableBlocks = Array.from(this.element.querySelectorAll('[data-customizable-block]'));

        this.element.querySelectorAll('[data-guide-link]').forEach((item, index) => {
            this.links[index] = {};
            this.links[index].element = item;
        });

        if (this.element.classList.contains('-open-bar')) {
            this.opened = true;
            this.fetchOpenBar();
        }

        this.burger && this.burger.addEventListener('click', () => this.toggleBar());
        this.overlay && this.overlay.addEventListener('click', () => this.closeBar());

        window.addEventListener('pagehide', () => this.saveScrollPosition());

        const url = new URL(window.location.href);
        this.customizableState = url.searchParams.get('customizable') || {};

        if (Object.keys(this.customizableState).length > 0) {
            try {
                this.customizableState = JSON.parse(this.customizableState);
            } catch (e) {
                console.error('GET params parse error');
            }
        }

        if (this.customizableIcon) {
            this.customizableIcon.addEventListener('click', () => this.toggleCustomizableDropdown());
            document.addEventListener('click', (event) => this.customizableIconOuterClick(event));
        }

        this.fillCustomizableBLocksList();
        this.loaded();

        document.querySelectorAll('[data-language="blade"]').forEach(item => {
            let html = item.innerHTML;
            html = html.replace(/@ component/g, '@component');
            html = html.replace(/@ endcomponent/g, '@endcomponent');
            item.innerHTML = html;
        });
    }

    openBar() {
        this.element.classList.add('-open-bar');
        this.opened = true;

        this.fetchOpenBar();

        setTimeout(() => {
            Object.values(SliderCollection.items)
                .filter(item => item.edgeToEdge)
                .forEach(item => item.handleEdgeToEdge());
        }, 200);
    }

    closeBar() {
        this.element.classList.remove('-open-bar');
        this.opened = false;

        this.fetchOpenBar();

        setTimeout(() => {
            Object.values(SliderCollection.items)
                .filter(item => item.edgeToEdge)
                .forEach(item => item.handleEdgeToEdge());
        }, 200);
    }

    toggleBar() {
        this.opened ? this.closeBar() : this.openBar();

        this.fetchOpenBar();
    }

    fetchOpenBar() {
        fetch(`/api.php?openBar=${this.opened}`).then();
    }

    loaded() {
        this.bar.scrollTop = sessionStorage.getItem('barScroll') || 0;
        this.element.classList.add('loaded');
        this.loader.classList.add('hidden');

        if (document.body.clientWidth < BREAKPOINT && window.location.pathname !== '/') {
            this.closeBar();
        }
    }

    saveScrollPosition() {
        sessionStorage.setItem('barScroll', this.bar.scrollTop.toString());
    }

    fillCustomizableBLocksList() {
        if (!this.customizableIcon || this.customizableBlocks.length === 0) {
            return;
        }

        let groupLast = {};

        this.customizableIcon.classList.remove('hidden');

        this.customizableBlocks.forEach(item => {
            let dataParams = item.getAttribute('data-customizable-block');

            try {
                dataParams = JSON.parse(dataParams);
            } catch (e) {
                dataParams = {};
            }

            const itemShown = this.customizableState.hasOwnProperty(dataParams.id) ? this.customizableState[dataParams.id] : !item.classList.contains('hidden');

            const li = document.createElement('li');

            if (Object.keys(groupLast).length > 0) {
                if (groupLast.group === dataParams.group) {
                    groupLast.element.classList.remove('--in-group-last');
                    groupLast.element.classList.add('--in-group');

                    groupLast.group = dataParams.group;
                    groupLast.element = li;

                    li.classList.add('--in-group-last');
                } else {
                    if (dataParams.group) {
                        groupLast.group = dataParams.group;
                        groupLast.element = li;

                        li.classList.add('--in-group-last');
                    }
                }
            } else {
                if (dataParams.group) {
                    groupLast.group = dataParams.group;
                    groupLast.element = li;

                    li.classList.add('--in-group-last');
                }
            }

            const label = document.createElement('label');
            label.className = 'checkbox -width-100ps';

            const input = document.createElement('input');
            input.setAttribute('type', 'checkbox');
            input.setAttribute('name', dataParams.id);

            itemShown && input.setAttribute('checked', 'checked');

            input.addEventListener('change', (event) => this.customizableCheckboxChange(dataParams.id, dataParams.group, event));

            const view = document.createElement('span');
            view.className = 'checkbox__view';
            view.innerHTML = `
                <span class="checkbox__marker"></span>
                <span class="checkbox__label">${dataParams.name}</span>            
            `;

            label.appendChild(input);
            label.appendChild(view);
            li.appendChild(label);
            document.querySelector('[data-customizable-blocks]').appendChild(li);

            this.customizableState[dataParams.id] = itemShown;
            this.customizableDefaultState[dataParams.id] = !item.classList.contains('hidden');

            if (this.customizableState[dataParams.id]) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }

    toggleCustomizableDropdown() {
        const customizableDropdownShown = this.customizableDropdown.classList.contains('--shown');

        if (customizableDropdownShown) {
            this.customizableDropdown.classList.remove('--shown');
        } else {
            this.customizableDropdown.classList.add('--shown');
        }
    }

    customizableIconOuterClick(event) {
        let target = event.target;

        if (!this.customizableDropdown.contains(target) && !this.customizableIcon.contains(target)) {
            this.customizableDropdown.classList.remove('--shown');
        }
    }

    customizableStateIntoUrl() {
        const customizableString = Object.keys(this.customizableState)
            .filter(key => this.customizableState[key] !== this.customizableDefaultState[key])
            .map(item => `"${item}":${this.customizableState[item]}`)
            .join(',');

        const url = new URL(window.location.href);

        if (customizableString !== '') {
            url.searchParams.set('customizable', `{${customizableString}}`);
        } else {
            url.searchParams.delete('customizable');
        }

        window.history.pushState({}, '', url.toString());
    }

    customizableCheckboxChange(id, group = null, event) {
        const target = event.target;

        this.customizableBlocks.forEach(item => {
            let dataParams = item.getAttribute('data-customizable-block');

            try {
                dataParams = JSON.parse(dataParams);
            } catch (e) {
                dataParams = {};
            }

            if (dataParams.id === id) {
                if (target.checked) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }

                this.customizableState[id] = target.checked;
            } else {
                if (group && dataParams.group === group && target.checked) {
                    item.classList.add('hidden');
                    this.customizableState[dataParams.id] = false;

                    this.customizableDropdown.querySelectorAll(`input[name=${dataParams.id}]`).forEach(item => {
                       item.checked = false;
                    });
                }
            }
        });

        this.customizableStateIntoUrl();
    }
}

window.Guide = new Guide({ element: document.body.querySelector('[data-guide]') });
