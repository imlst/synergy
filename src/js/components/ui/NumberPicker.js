import Collection from '../../base/Collection';
import EventEmitter from '../../base/EventEmitter';

const NumberPickerCollection = new class NumberPickerCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-number-picker]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new NumberPicker({ element: item, ...options }));
            }
        });

        this.emit('filled');
    }
};

export default window.NumberPickerCollection = NumberPickerCollection;

class NumberPicker extends EventEmitter {
    constructor({ element, ...options }) {
        super();

        this.element = element;
        this.options = options;
        this.input = this.element.querySelector('input');
        this.value = this.input.value;
        this.min = this.input.hasAttribute('min') ? Number(this.input.getAttribute('min')) : 0;
        this.max = this.input.hasAttribute('max') ? Number(this.input.getAttribute('max')) : 999;
        this.buttonMinus = this.element.querySelector('[data-number-picker-minus]');
        this.buttonPlus = this.element.querySelector('[data-number-picker-plus]');

        this.handleInput();
        this.input.addEventListener('input', () => this.onInput());
        this.input.addEventListener('blur', () => this.handleInput());

        this.input.addEventListener('keydown', event => {
            event.key === 'ArrowUp' && this.increment();
            event.key === 'ArrowDown' && this.decrement();
        });

        this.buttonMinus.addEventListener('click', () => this.decrement());
        this.buttonPlus.addEventListener('click', () => this.increment());
    }

    get numberValue() {
        return Number(this.input.value) || 0;
    }

    set numberValue(value) {
        this.input.value = value;
        this.value = value;
    }

    onInput() {
        this.numberValue = this.input.value.replace(/[^-\d]/g, '').replace(/(\d)-+/g, '$1').replace(/--/g, '-');
    }

    handleInput() {
        this.numberValue = this.numberValue;

        if (this.min !== null && this.numberValue <= this.min) {
            this.numberValue = this.min;
            this.buttonMinus.setAttribute('disabled', '');
        } else {
            this.buttonMinus.removeAttribute('disabled')
        }

        if (this.max !== null && this.numberValue >= this.max) {
            this.numberValue = this.max;
            this.buttonPlus.setAttribute('disabled', '');
        } else {
            this.buttonPlus.removeAttribute('disabled')
        }

        this.emit('input');
    }

    increment() {
        this.numberValue = this.numberValue + 1;
        this.handleInput();
    }

    decrement() {
        this.numberValue = this.numberValue - 1;
        this.handleInput();
    }
}
