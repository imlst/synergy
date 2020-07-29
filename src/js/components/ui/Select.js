import Collection from '../../base/Collection';
import EventEmitter from '../../base/EventEmitter';
// import offset from '../../helpers/offset';
import isMobile from '../../helpers/ismobile';

const defaultOptions = {
    align: 'left',
    placeholder: 'Выбор из списка',
    optionType: 'default',
    shown: false,
    maxWidth: 0,
};

const allowedOptions = {
    align: ['left', 'right', 'center'],
    optionType: ['default', 'checkbox', 'radio'],
};

const SelectCollection = new class SelectCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-select]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Select({element: item, ...options}));
            }
        });

        this.emit('filled');
    }
};

export default window.SelectCollection = SelectCollection;

class Select extends EventEmitter {
    constructor({ element, ...options }) {
        super();

        this.element = element;
        this.options = this.prepareOptions(options);
        this.select = element.querySelector('select');
        this.multiple = this.select.hasAttribute('multiple');
        this.filter = element.querySelector('[data-select-filter]');
        this.counter = element.querySelector('[data-select-counter]');
        this.hint = null;
        this.hintWindow = null;
        this.optionList = null;
        this.selectedOptions = [];
        this.selectedOptionsTemp = [];
        this.animationTimer = null;

        let selectedIndex = -1;

        Array.from(this.select.options).forEach((option) => {
            if (option.hasAttribute('selected')) {
                selectedIndex = option.index;
            }
        });

        if (selectedIndex === -1) {
            this.select.selectedIndex = -1;
        }

        if (!this.element.hasAttribute('disabled') && !this.element.classList.contains('disabled')) {
            this.element.addEventListener('mousedown', (event) => this.onClick(event));
            document.addEventListener('mousedown', (event) => this.onOuterClick(event));
            document.addEventListener('touchstart', (event) => this.onOuterClick(event));
        }

        this.fillSelectedOptions();
        this.createSelectHint();

        this.filter && this.filter.addEventListener('input', () => this.filterOptions());

        isMobile() && this.select.style.setProperty('display', 'block');

        this.select.addEventListener('change', () => this.onSelectChange());
    }

    prepareOptions(options) {
        let dataParams = this.element.getAttribute('data-select');

        try {
            dataParams = JSON.parse(dataParams);
        } catch (e) {
            dataParams = {};
        }

        let spreadOptions = { ...defaultOptions, ...options, ...dataParams };

        if (!allowedOptions.align.includes(spreadOptions.align)) {
            throw new Error(`Not allowed value given for property "align". Allowed values: ${allowedOptions.align.join(', ')}`);
        }

        if (!allowedOptions.optionType.includes(spreadOptions.optionType)) {
            throw new Error(`Not allowed value given for property "optionType". Allowed values: ${allowedOptions.optionType.join(', ')}`);
        }

        if (!isNaN(parseInt(spreadOptions.maxWidth))) {
            spreadOptions.maxWidth = parseInt(spreadOptions.maxWidth);
        } else {
            throw new Error(`Property "maxWidth" must be a Number.`);
        }

        spreadOptions.shown = Boolean(spreadOptions.shown);

        return spreadOptions;
    }

    update() {
        // let options = this.select.options;
        // this.optionList.length = 0;

        // for (let i = 0; i < options.length; i++) {
            // let optionData = {};

            // optionData.value = options[i].value;
            // optionData.text = options[i].text;
            // optionData.description = options[i].getAttribute('data-option-description');

            // options[i].getAttribute('selected') !== null
            //     ? optionData.selected = true
            //     : optionData.selected = false;

            // options[i].hasAttribute('selected') && this.selectOption(options[i].value);

            // options[i].hasAttribute('disabled')
            //     ? optionData.disabled = true
            //     : optionData.disabled = false;

            // this.optionList.push(optionData);
        // }

        this.hint && this.hint.remove();
        this.createSelectHint();
    }

    createSelectHint() {
        this.hint = document.createElement('div');
        this.hint.className = 'select__hint hidden';
        this.hint.setAttribute('data-select-hint', '');

        this.hintWindow = document.createElement('div');
        this.hintWindow.className = 'select__window';
        this.hintWindow.setAttribute('data-select-window', '');

        this.options.maxWidth > 0 && (this.hintWindow.style.maxWidth = this.options.maxWidth + 'px');

        this.hint.appendChild(this.hintWindow);
        this.element.appendChild(this.hint);

        let topPanel = this.element.querySelector('[data-select-top-panel]');
        topPanel && this.hintWindow.appendChild(topPanel);

        this.createHintOptions();
        this.checkHintOptions();
        this.printValue();

        let bottomPanel = this.element.querySelector('[data-select-bottom-panel]');
        bottomPanel && this.hintWindow.appendChild(bottomPanel);

        if (this.element.querySelector('[data-select-empty]')) {
            this.hintWindow.appendChild(this.element.querySelector('[data-select-empty]'));
        }

        this.hint.querySelectorAll('[data-select-reset]').forEach((item) => {
            item.addEventListener('click', () => this.resetOptions());
        });

        this.hint.querySelectorAll('[data-select-apply]').forEach((item) => {
            item.addEventListener('click', () => this.onApplyClick());
        });
    }

    createHintOptions() {
        this.optionList = document.createElement('ul');
        this.optionList.setAttribute('data-select-list', '');

        this.optionList.style.setProperty('text-align', this.options.align);

        let options = this.select.options;

        for (let i = 0; i < options.length; i++) {
            const hintOptionItem = document.createElement('li');

            hintOptionItem.setAttribute('data-select-option-value', options[i].value);

            if (this.options.optionType === 'default' || options[i].disabled) {
                hintOptionItem.textContent = options[i].textContent;
            } else if (this.options.optionType === 'checkbox') {
                const hintOption = document.createElement('label');
                hintOption.classList.add('checkbox');

                hintOption.innerHTML = `
                    <input type="checkbox">

                    <span class="checkbox__view">
                        <span class="checkbox__marker"></span>
                        <span class="checkbox__label">${options[i].textContent}</span>
                    </span>`;

                hintOptionItem.appendChild(hintOption);
            } else if (this.options.optionType === 'radio') {
                const hintOption = document.createElement('label');
                hintOption.classList.add('radio');

                hintOption.innerHTML = `
                    <input type="radio">

                    <span class="radio__view">
                        <span class="radio__marker"></span>
                        <span class="radio__label">${options[i].textContent}</span>
                    </span>`;

                hintOptionItem.appendChild(hintOption);
            }

            if (options[i].hasAttribute('data-option-description')) {
                const hintOptionDescription = document.createElement('div');

                hintOptionDescription.classList.add('select__option-description');
                hintOptionDescription.innerText = options[i].getAttribute('data-option-description');

                hintOptionItem.appendChild(hintOptionDescription);
            }

            options[i].hasAttribute('disabled')
                ? hintOptionItem.classList.add('disabled')
                : hintOptionItem.addEventListener('click', (event) => this.onHintOptionClick(event));

            options[i].hasAttribute('hidden') && hintOptionItem.classList.add('hidden');

            this.optionList.appendChild(hintOptionItem);
        }

        this.hintWindow.appendChild(this.optionList);
    }

    fillSelectedOptions() {
        this.selectedOptions.length = 0;

        let options = Array.from(this.select.options);

        options.forEach((option) => {
            if (option.hasAttribute('selected')) {
                this.selectedOptions.push(option.value);
                this.selectedOptionsTemp.push(option.value);
            }
        });
    }

    onSelectChange() {
        let options = Array.from(this.select.options);

        this.selectedOptions.length = 0;

        options.forEach((option) => {
            if (option.selected) {
                this.selectedOptions.push(option.value);
            }
        });

        this.selectedOptionsTemp = this.selectedOptions.slice();
        this.checkHintOptions();
        this.applySelected();
        this.printValue();
    }

    onHintOptionClick(event) {
        let el = event.currentTarget;
        let value = el.getAttribute('data-select-option-value');

        if (this.multiple) {
            if (this.selectedOptionsTemp.includes(value)) {
                let index = this.selectedOptionsTemp.indexOf(value);
                this.selectedOptionsTemp.splice(index, 1);
            } else {
                this.selectedOptionsTemp.push(value);
            }
        } else {
            this.selectedOptionsTemp.length = 0;
            this.selectedOptionsTemp.push(value);
        }

        if (this.hint.querySelector('[data-select-apply]')) {
            this.checkHintOptions(true);
            this.printValue(true);
        } else {
            this.selectedOptions = this.selectedOptionsTemp.slice();
            this.checkHintOptions();
            this.applySelected();
            this.printValue();

            !this.multiple && this.hideSelect();
        }
    }

    applySelected() {
        this.selectedOptions = this.selectedOptionsTemp.slice();

        let options = Array.from(this.select.options);

        options.forEach((option) => {
            if (this.selectedOptions.includes(option.value)) {
                option.setAttribute('selected', '');
            } else {
                option.removeAttribute('selected');
            }
        });

        this.emit('change');
    }

    onApplyClick() {
        this.applySelected();
        this.showSelectedCount();
        this.hideSelect();
    }

    checkHintOptions(temp = false) {
        let selectedOptions = temp ? this.selectedOptionsTemp : this.selectedOptions;

        this.optionList.querySelectorAll('li').forEach((option) => {
            let value = option.getAttribute('data-select-option-value');
            let optionCheckbox = option.querySelector('input[type="checkbox"]');
            let optionRadio = option.querySelector('input[type="radio"]');

            if (selectedOptions.includes(value)) {
                option.classList.add('selected');

                optionCheckbox && (optionCheckbox.checked = true);
                optionRadio && (optionRadio.checked = true);
            } else {
                option.classList.remove('selected');

                optionCheckbox && (optionCheckbox.checked = false);
                optionRadio && (optionRadio.checked = false);
            }
        });

        this.showSelectedCount();
    }

    printValue(temp = false) {
        let selectedOptions = temp ? this.selectedOptionsTemp : this.selectedOptions;

        let options = Array.from(this.select.options);
        let value = [];
        let valueElem = this.element.querySelector('[data-select-value]') || this.filter;

        if (!valueElem) {
            return;
        }

        options.forEach((option) => {
            if (selectedOptions.includes(option.value)) {
                this.multiple
                    ? value.push(option.textContent)
                    : value[0] = option.textContent;
            }
        });

        value = value.join(', ');

        if (valueElem.tagName.toLowerCase() === 'input') {
            if (value === '') {
                valueElem.placeholder = this.options.placeholder;
                valueElem.value = '';
            } else {
                valueElem.value = value;
            }
        } else {
            value === ''
                ? valueElem.textContent = this.options.placeholder
                : valueElem.textContent = value;
        }

        this.selectedOptionsTemp.length > 0 || this.selectedOptions.length > 0
            ? this.element.classList.add('--checked')
            : this.element.classList.remove('--checked');
    }

    resetOptions() {
        this.selectedOptions.length = 0;
        this.selectedOptionsTemp.length = 0;

        this.checkHintOptions();
        this.printValue();
    }

    filterOptions() {
        let value = this.filter.value;
        let hintOptions = Array.from(this.optionList.querySelectorAll('li'));
        let allHidden = true;

        hintOptions.forEach((option) => {
            let optionText = option.textContent.toLowerCase();

            if (optionText.indexOf(value) !== -1) {
                option.classList.remove('--hide');
                allHidden = false;
            } else {
                !option.classList.contains('hidden') && option.classList.add('--hide');
            }
        });

        let emptyTip = this.hintWindow.querySelector('[data-select-empty]');

        if (allHidden) {
            this.optionList.classList.add('hidden');
            emptyTip && emptyTip.style.setProperty('display', 'block');
        } else {
            this.optionList.classList.remove('hidden');
            emptyTip && emptyTip.style.setProperty('display', '');
        }
    }

    getValue() {
        return this.selectedOptions;
    }

    getTextValue() {
        let textValues = [];

        this.selectedOptions.forEach(item => {
            const option = this.select.querySelector(`option[value="${item}"]`);
            option ? textValues.push(option.textContent) : textValues.push(item);
        });

        return textValues;
    }

    showSelectedCount() {
        if (!this.counter) {
            return;
        }

        this.selectedOptions.length > 0
            ? this.counter.textContent = this.selectedOptions.length + ''
            : this.counter.textContent = '';

        this.selectedOptions.length > 0
            ? this.element.classList.add('--checked')
            : this.element.classList.remove('--checked');
    }

    // positionCalculate() {
    //     let left = offset(this.element).left;
    //     let top = offset(this.element).top + this.element.offsetHeight;
    //     let right = left + this.hint.offsetWidth;
    //
    //     if (this.options.shown) {
    //         if (right > window.innerWidth) {
    //             left = right - window.innerWidth;
    //         }
    //
    //         this.hintWindow.style.minWidth = this.element.offsetWidth + 'px';
    //         this.hint.style.left = left + 'px';
    //         this.hint.style.top = top + 'px';
    //     }
    // }

    showSelect() {
        this.hint.classList.remove('hidden');
        this.options.shown = true;

        this.checkHintOptions();

        // this.positionCalculate();
        this.element.classList.add('active');
        this.hint.classList.add('--shown');
    }

    hideSelect() {
        this.element.classList.remove('active');
        this.hint.classList.remove('--shown');

        if (this.animationTimer === null) {
            this.animationTimer = setTimeout(() => {
                this.hint.classList.add('hidden');
                this.options.shown = false;

                clearTimeout(this.animationTimer);
                this.animationTimer = null;
            }, 200);
        }

        this.selectedOptionsTemp = this.selectedOptions.slice();
        this.printValue();
    }

    onClick(event) {
        if (isMobile()) {
            return;
        }

        if (this.filter) {
            setTimeout(() => {
                this.filter.focus();

                if (event.target !== this.filter) {
                    this.filter.setSelectionRange(this.filter.value.length, this.filter.value.length);
                }
            }, 0);

            this.filterOptions();
        }

        if (!this.options.shown) {
            this.showSelect();
            return;
        }

        if (this.element.contains(event.target) && !this.hint.contains(event.target) && !this.filter) {
            this.hideSelect();
        }
    }

    onOuterClick(event) {
        if (this.options.shown && !this.element.contains(event.target) && !this.hint.contains(event.target)) {
            this.hideSelect();
        }
    }

    reset() {
        this.selectedOptions.length = 0;
        this.selectedOptionsTemp.length = 0;

        this.applySelected();
        this.showSelectedCount();
        this.hideSelect();
    }
}
