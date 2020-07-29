import Collection from '../../base/Collection';

const defaultOptions = {
    trigger: 'click',
};

const allowedOptions = {
    trigger: ['click', 'hover'],
};

const AccordionCollection = new class AccordionCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-accordion]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Accordion({ element: item, ...options }));
            }
        });
    }
};

export default window.AccordionCollection = AccordionCollection;

export class Accordion {
    constructor({ element, ...options }) {
        this.element = element;
        this.options = this.prepareOptions(options);
        this.collapsed = this.element.classList.contains('--collapsed');
        this.toggler = this.element.querySelector('[data-accordion-toggle]');
        this.container = this.element.querySelector('[data-accordion-body]');
        this.inGroup = this.element.parentNode.hasAttribute('data-accordion-group');

        if (this.options.trigger === 'click') {
            this.toggler.addEventListener('click', (event) => this.toggle(event));
        } else {
            this.element.addEventListener('mouseenter', (event) => this.toggle(event));
            this.element.addEventListener('mouseleave', (event) => this.toggle(event));
        }
    }

    prepareOptions(options) {
        let dataParams = this.element.getAttribute('data-accordion');

        try {
            dataParams = JSON.parse(dataParams);
        } catch (error) {
            dataParams = {};
        }

        let spreadOptions = { ...defaultOptions, ...options, ...dataParams };

        if (!allowedOptions.trigger.includes(spreadOptions.trigger)) {
            throw new Error(`Not allowed value given for property "trigger". Allowed values: ${allowedOptions.trigger.join(', ')}`);
        }

        return spreadOptions;
    }

    toggle() {
        if (this.collapsed && this.inGroup) {
            const otherAccordions = AccordionCollection.getByContainer(this.element.parentNode).filter(item => {
                return item.element !== this.element && item.collapsed === false;
            });

            otherAccordions.forEach(item => item.toggle());
        }

        let paddingTop = parseInt(window.getComputedStyle(this.container).paddingTop);
        // let paddingBottom = parseInt(window.getComputedStyle(this.container).paddingBottom);
        let height = this.container.scrollHeight + paddingTop;
        let listener;

        this.container.style.setProperty('height',  `${height}px`);

        setTimeout(() => {
            this.element.classList.toggle('--collapsed');
            this.collapsed = this.element.classList.contains('--collapsed');
        }, 0);

        this.container.addEventListener('transitionend', listener = () => {
            this.container.style.removeProperty('height');

            if (!this.collapsed && this.element.getBoundingClientRect().top < 0) {
                window.scrollTo({
                    top: this.element.offsetTop - 15,
                    behavior: 'smooth'
                });
            }

            this.container.removeEventListener('transitionend', listener);
        });
    }
}
