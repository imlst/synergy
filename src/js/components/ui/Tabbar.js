import Collection from '../../base/Collection';
import EventEmitter from '../../base/EventEmitter';

const defaultOptions = {
    trigger: 'click',
};

const allowedOptions = {
    trigger: ['click', 'hover'],
};

const TabbarCollection = new class TabbarCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-tabbar]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Tabbar({ element: item, ...options }));
            }
        });

        this.emit('filled');
    }
};

export default window.TabbarCollection = TabbarCollection;

class Tabbar extends EventEmitter {
    constructor({ element, ...options }) {
        super();

        this.element = element;
        this.options = this.prepareOptions(options);
        this.tabs = {};
        this.pages = {};
        this.activeTab = null;
        this.toggle = this.element.querySelector('[data-tabbar-toggle]');

        this.handleTabs();

        this.element.querySelectorAll('[data-tabbar-goto]').forEach((item) => {
            const gotoID = item.getAttribute('data-tabbar-goto');

            item.addEventListener('click', () => {
                this.changeTabs(parseInt(gotoID), true);
            });
        });

        if (this.toggle) {
            this.toggle.addEventListener('click', () => this.toggleTabsView());
        }
    }

    prepareOptions(options) {
        let dataParams = this.element.getAttribute('data-tabbar');

        try {
            dataParams = JSON.parse(dataParams);
        } catch (e) {
            dataParams = {};
        }

        let spreadOptions = { ...defaultOptions, ...options, ...dataParams };

        if (!allowedOptions.trigger.includes(spreadOptions.trigger)) {
            throw new Error(`Not allowed value given for property "trigger". Allowed values: ${allowedOptions.trigger.join(', ')}`);
        }

        return spreadOptions;
    }

    handleTabs() {
        let tabs = this.element.querySelectorAll('[data-tabbar-tab]');
        let pages = this.element.querySelectorAll('[data-tabbar-page]');
        let insideTabbar = this.element.querySelectorAll('[data-tabbar]');

        insideTabbar.forEach((item) => {
            item.querySelectorAll('[data-tabbar-tab]').forEach((item) => item.setAttribute('data-inside', ''));
            item.querySelectorAll('[data-tabbar-page]').forEach((item) => item.setAttribute('data-inside', ''));
        });

        tabs.forEach((item) => {
            if (!item.hasAttribute('data-inside')) {
                let id = Object.keys(this.tabs).length++;
                let tabID = item.getAttribute('data-tabbar-tab') || id;

                this.tabs[id] = {};
                this.tabs[id].id = tabID;
                this.tabs[id].element = item;

                if (item.classList.contains('active')) {
                    this.activeTab = tabID;
                    this.tabs[id].active = true;
                } else {
                    this.tabs[id].active = false;
                }

                if (this.options.trigger === 'hover') {
                    item.addEventListener('mouseenter', (event) => this.changeTabs(tabID, false, event));
                } else if (this.options.trigger === 'click') {
                    item.addEventListener('click', (event) => this.changeTabs(tabID, false, event));
                }
            }
        });

        pages.forEach((item) => {
            if (!item.hasAttribute('data-inside')) {
                let id = Object.keys(this.pages).length++;

                this.pages[id] = {};
                this.pages[id].id = item.getAttribute('data-tabbar-page') || id;
                this.pages[id].element = item;

                id === this.activeTab ? this.pages[id].active = true : this.pages[id].active = false;
            }
        });

        insideTabbar.forEach((item) => {
            item.querySelectorAll('[data-tabbar-tab]').forEach((item) => item.removeAttribute('data-inside', ''));
            item.querySelectorAll('[data-tabbar-page]').forEach((item) => item.removeAttribute('data-inside', ''));
        });

        if (this.activeTab === null) {
            this.activeTab = this.tabs[0].id;
        }

        this.changeTabs(this.activeTab);
    }

    changeTabs(activeTab, scrollIntoView = false, event) {
        if (typeof Object.values(this.tabs).find((row) => row.id === activeTab) === 'undefined') {
            return;
        }

        this.activeTab = activeTab;
        const tabName = Object.values(this.tabs).find(item => item.id === activeTab).element.textContent.trim();

        this.element.querySelector('.tabbar').classList.remove('--expanded');

        Object.keys(this.tabs).find((key) => {
            let elem = this.tabs[key].element;

            if (this.tabs[key].id === activeTab) {
                this.tabs[key].active = true;
                elem.classList.add('active');
            } else {
                elem.classList.remove('active');
                this.tabs[key].active = false;
            }
        });

        Object.keys(this.pages).find((key) => {
            let elem = this.pages[key].element;

            if (this.pages[key].id === activeTab) {
                this.pages[key].active = true;
                elem.classList.remove('hidden');
            } else {
                elem.classList.add('hidden');
                this.pages[key].active = false;
            }
        });

        const toggleName = this.element.querySelector('[data-tabbar-toggle-name]');

        if (toggleName) {
            toggleName.textContent = tabName;

            if (scrollIntoView || (toggleName.offsetParent && event)) {
                this.element.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                });
            }
        }

        this.emit('change');
    }

    toggleTabsView() {
        this.element.querySelector('.tabbar').classList.toggle('--expanded');
    }
}
