import Collection from '../../base/Collection';
import { disableBodyScroll, enableBodyScroll, clearAllBodyScrollLocks } from 'body-scroll-lock';

const defaultOptions = {
    name: '',
    width: 0,
    maxWidth: 0,
    maxHeight: 0,
};

const ModalCollection = new class ModalCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-modal]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Modal({ element: item, ...options }));
            }
        });
    }
};

export default window.ModalCollection = ModalCollection;

class Modal {
    constructor({ element, ...options }) {
        this.element = element;
        this.options = this.prepareOptions(options);
        this.window = this.element.querySelector('[data-modal-window]');
        this.shown = false;
        this.bodyLock = false;

        this.handleActions();
        this.applyStyles();

        this.element.addEventListener('click', (event) => this.onOverlayClick(event));

        this.options.shown && this.showDialog();
    }

    prepareOptions(options) {
        let dataParams = this.element.getAttribute('data-modal');

        try {
            dataParams = JSON.parse(dataParams);
        } catch (e) {
            dataParams = {};
        }

        let spreadOptions = { ...defaultOptions, ...options, ...dataParams };

        if (spreadOptions.name === '') {
            throw new Error(`Property "name" should not be empty.`);
        }

        if (!isNaN(parseInt(spreadOptions.width))) {
            spreadOptions.width = parseInt(spreadOptions.width);
        } else {
            throw new Error(`Property "width" must be a Number.`);
        }

        if (!isNaN(parseInt(spreadOptions.maxWidth))) {
            spreadOptions.maxWidth = parseInt(spreadOptions.maxWidth);
        } else {
            throw new Error(`Property "maxWidth" must be a Number.`);
        }

        if (!isNaN(parseInt(spreadOptions.maxHeight))) {
            spreadOptions.maxHeight = parseInt(spreadOptions.maxHeight);
        } else {
            throw new Error(`Property "maxHeight" must be a Number.`);
        }

        return spreadOptions;
    }

    applyStyles() {
        if (this.options.width > 0) {
            this.window.style.width = this.options.width + 'px'
        }

        if (this.options.maxWidth > 0) {
            this.window.style.maxWidth = this.options.maxWidth + 'px'
        }

        if (this.options.maxHeight > 0) {
            this.window.style.maxHeight = this.options.maxHeight + 'px'
        }
    }

    handleMaxHeight() {
        if (this.window.offsetHeight >= window.innerHeight - 10) {
            this.window.style.setProperty('max-height', '100%');
            return;
        }

        if (this.options.maxHeight > 0) {
            this.window.style.setProperty('max-height', this.options.maxHeight + 'px');
        }
    }

    showDialog() {
        this.element.classList.add('--shown');
        this.shown = true;

        if (!this.bodyLock) {
            disableBodyScroll(this.element);
            this.bodyLock = true;
        }
    }

    hideDialog() {
        this.element.classList.remove('--shown');
        this.shown = false;

        if (this.bodyLock) {
            enableBodyScroll(this.element);
            this.bodyLock = false;
        }
    }

    onOverlayClick(event) {
        event.target === this.element && this.hideDialog();
    }

    handleActions() {
        this.element.querySelectorAll('[data-modal-close]').forEach((item) => {
            item.addEventListener('click', () => this.hideDialog());
        });

        document.querySelectorAll('[data-modal-show="' + this.options.name + '"]').forEach((item) => {
            item.addEventListener('click', () => this.showDialog());
        });
    }
}
