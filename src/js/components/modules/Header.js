import Collection from '../../base/Collection';

const HeaderCollection = new class HeaderCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-header]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Header({ element: item, ...options }));
            }
        });
    }
};

export default window.HeaderCollection = HeaderCollection;

class Header {
    constructor({ element, ...options }) {
        this.element = element;
        this.options = options;
        this.menuToggle = this.element.querySelector('[data-header-mobile-menu-toggle]');

        this.menuToggle && this.menuToggle.addEventListener('click', () => this.mobileMenuToggle());
    }

    mobileMenuToggle() {
        this.element.classList.toggle('--mobile-menu-opened');
    }
}
