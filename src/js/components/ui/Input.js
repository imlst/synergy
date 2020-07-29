import Collection from '../../base/Collection';
import EventEmitter from '../../base/EventEmitter';
import { isEmail, isMobilePhone } from 'validator';

const defaultOptions = {
    required: false,
};

const allowedOptions = {
    validate: ['email', 'phone', 'mobilePhone'],
    required: [true, false, 1, 0],
};

const InputCollection = new class InputCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-input]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Input({ element: item, ...options }));
            }
        });

        this.emit('filled');
    }
};

export default window.InputCollection = InputCollection;

class Input extends EventEmitter {
    constructor({ element, ...options }) {
        super();

        this.element = element;
        this.options = this.prepareOptions(options);
        this.input = this.element.querySelector('input');
        this.inputMessage = this.element.querySelector('[data-input-message]');

        this.checkEmpty();
        this.input.addEventListener('input', () => this.onInput());

        if (this.options.hasOwnProperty('validate')) {
            if (this.options.validate === 'email') {
                this.input.value !== '' && this.validateEmail();
                this.input.addEventListener('change', () => this.validateEmail());
            }

            if (this.options.validate === 'phone') {
                this.input.value !== '' && this.validatePhone();
                this.input.addEventListener('change', () => this.validatePhone());
            }

            if (this.options.validate === 'mobilePhone') {
                this.input.value !== '' && this.validateMobilePhone();
                this.input.addEventListener('change', () => this.validateMobilePhone());
            }
        }

        if (this.options.required) {
            this.input.addEventListener('blur', () => this.checkRequired());
        }
    }

    prepareOptions(options) {
        let dataParams = this.element.getAttribute('data-input');

        try {
            dataParams = JSON.parse(dataParams);
        } catch (e) {
            dataParams = {};
        }

        let spreadOptions = { ...defaultOptions, ...options, ...dataParams };

        if (spreadOptions.validate !== undefined && !allowedOptions.validate.includes(spreadOptions.validate)) {
            console.error(`Not allowed value given for property "validate". Allowed values: ${allowedOptions.validate.join(', ')}`);
        }

        if (!allowedOptions.required.includes(spreadOptions.required)) {
            console.error(`Not allowed value given for property "required". Allowed values: ${allowedOptions.required.join(', ')}`);
        }

        return spreadOptions;
    }

    checkEmpty() {
        this.input.value === ''
            ? this.element.classList.add('--empty')
            : this.element.classList.remove('--empty');
    }

    onInput() {
        this.checkEmpty();
    }

    setValue(value) {
        this.input.value = value;
        this.onInput();
    }

    setError() {
        this.element.classList.remove('--success');
        this.element.classList.add('--error');
    }

    setSuccess() {
        this.element.classList.remove('--error');
        this.element.classList.add('--success');
    }

    setMessage(message) {
        if (this.inputMessage) {
            this.inputMessage.textContent = message;
        }
    }

    resetState() {
        this.element.classList.remove('--error');
        this.element.classList.remove('--success');
        this.setMessage('');
    }

    validateEmail() {
        if (this.input.value === '') {
            this.resetState();
            return;
        }

        if (isEmail(this.input.value)) {
            this.setSuccess();
            this.setMessage('');
        } else {
            this.setError();
            this.setMessage('Указан некорректный адрес');
        }
    }

    validatePhone() {
        this.input.value = this.input.value.replace(/[^0-9+]+/g, "");
        this.onInput();

        if (this.input.value === '') {
            this.resetState();
            return;
        }

        if (isMobilePhone(this.input.value)) {
            this.setSuccess();
            this.setMessage('');
        } else {
            this.setError();
            this.setMessage('Некорректный номер');
        }
    }

    validateMobilePhone() {
        this.input.value = this.input.value.replace(/[^0-9+]+/g, "");
        this.onInput();

        if (this.input.value === '') {
            this.resetState();
            return;
        }

        if (isMobilePhone(this.input.value, 'ru-RU')) {
            this.setSuccess();
            this.setMessage('');
        } else {
            this.setError();
            this.setMessage('Некорректный номер');
        }
    }

    checkRequired() {
        if (this.input.value === '') {
            this.setError();
            this.setMessage('Поле обязательно для заполнения');
        } else if (!this.options.hasOwnProperty('validate')) {
            this.setSuccess();
            this.setMessage('');
        }
    }
}
