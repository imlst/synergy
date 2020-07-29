import Collection from '../../base/Collection';
import EventEmitter from '../../base/EventEmitter';
import offset from '../../helpers/offset';
// import ShaveCollection from "./Shaving";

/**
 * Дефолтные параметры
 *
 * @param   {string}        trigger         Открывать при наведении или клике
 * @param   {string}        position        Позиционирование: top, bottom, left, right
 * @param   {boolean}       pushing         Если уходит за края экрана, то будет смещаться в другую сторону
 * @param   {boolean}       interactive     Можно взаимодействовать с выпадашкой, иначе сразу скрывать ее
 * @param   {boolean}       shaving         Будет показываться всегда, но можно только если внутри есть сокращенный текст
 * @param   {number}        delay           Задержка при открытии / закрытии
 * @param   {null|number}   width           Фиксированная ширина попапа
 * @param   {null|number}   maxWidth        Максимальная ширина попапа
 * @param   {null|number}   maxHeight       Максимальная высота попапа, возможна прокрутка внутри
 * @param   {boolean}       shown           Видно сразу
 * @param   {boolean}       propagateActive Вешать active так же на родителя
 * @param   {boolean}       hideAtMove      Скрывать если хинт смещается, полезно чтобы не вылезал за края таблиц или экрана
 */
const defaultOptions = {
    trigger: 'hover',
    position: 'top',
    pushing: true,
    interactive: false,
    shaving: false,
    delay: 100,
    width: 0,
    maxWidth: 0,
    maxHeight: 0,
    shown: false,
    propagateActive: false,
    hideAtMove: true,
};

const allowedOptions = {
    trigger: ['hover', 'click'],
    position: ['top', 'bottom', 'left', 'right', 'left-bottom', 'right-bottom'],
};

const DropdownCollection = new class DropdownCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-dropdown]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Dropdown({ element: item, ...options }));
            }
        });
    }
};

export default window.DropdownCollection = DropdownCollection;

class Dropdown {
    constructor({ element, ...options }) {
        this.element = element;
        this.elementLeft = offset(this.element).left;
        this.elementTop = offset(this.element).top;
        this.options = this.prepareOptions(options);
        this.margins = 10;
        this.hovered = false;
        this.delayTimer = null;
        this.animationTimer = null;
        this.animationDuration = 200;
        this.currentPosition = this.options.position;
        this.created = false;
        this.closing = false;
        this.hint = null;
        this.hintWindow = null;
        this.hintArrow = null;
        this.hintTop = 0;
        this.hintRight = 0;
        this.hintBottom = 0;
        this.hintLeft = 0;

        this.element.addEventListener('mouseenter', () => this.onMouseEnter());
        this.element.addEventListener('mousedown', () => this.onMouseEnter());
        this.element.addEventListener('mousedown', () => this.onClick());
        this.element.addEventListener('mouseleave', () => this.onMouseLeave());

        document.addEventListener('mousedown', (event) => this.onOuterClick(event));
        document.addEventListener('touchstart', (event) => this.onOuterClick(event));

        this.element.querySelectorAll('[data-dropdown-close]').forEach((item) => {
           item.addEventListener('click', () => this.hideHint(true));
        });

        this.options.shown && this.createHint();
    }

    /**
     * Обрабатываем параметры в соответстиии с приоритетом
     * @param {object} options
     * (!)      defaultOptions
     * (!!)     options переданные в .init({...})
     * (!!!)    data-dropdown='{...}'
     */
    prepareOptions(options) {
        let dataParams = this.element.getAttribute('data-dropdown');

        try {
            dataParams = JSON.parse(dataParams);
        } catch (error) {
            dataParams = {};
        }

        let spreadOptions = { ...defaultOptions, ...options, ...dataParams };

        if (!allowedOptions.trigger.includes(spreadOptions.trigger)) {
            console.error(`Not allowed value given for property "trigger". Allowed values: ${allowedOptions.trigger.join(', ')}`);
        }

        if (!allowedOptions.position.includes(spreadOptions.position)) {
            console.error(`Not allowed value given for property "position". Allowed values: ${allowedOptions.position.join(', ')}`);
        }

        spreadOptions.shown = Boolean(spreadOptions.shown);
        spreadOptions.interactive = Boolean(spreadOptions.interactive);
        spreadOptions.shaving = Boolean(spreadOptions.shaving);
        spreadOptions.hideAtMove = Boolean(spreadOptions.hideAtMove);

        !isNaN(parseInt(spreadOptions.delay))
            ? spreadOptions.delay = parseInt(spreadOptions.delay)
            : console.error(`Property "delay" must be a Number.`);

        !isNaN(parseInt(spreadOptions.width))
            ? spreadOptions.width = parseInt(spreadOptions.width)
            : console.error(`Property "width" must be a Number.`);

        !isNaN(parseInt(spreadOptions.maxWidth))
            ? spreadOptions.maxWidth = parseInt(spreadOptions.maxWidth)
            : console.error(`Property "maxWidth" must be a Number.`);

        !isNaN(parseInt(spreadOptions.maxHeight))
            ? spreadOptions.maxHeight = parseInt(spreadOptions.maxHeight)
            : console.error(`Property "maxHeight" must be a Number.`);

        return spreadOptions;
    }

    /**
     * Создаем попап
     */
    createHint() {
        this.hint = document.createElement('div');
        this.hint.className = 'dropdown hidden';
        this.hint.setAttribute('dropdown-position', this.options.position);
        this.hint.setAttribute('data-theme', 'dark');

        this.hintWindow = document.createElement('div');
        this.hintWindow.className = 'dropdown__window';

        this.hintArrow = document.createElement('span');
        this.hintArrow.className = 'dropdown__arrow';

        this.hintWindow.appendChild(this.hintArrow);
        this.hintWindow.appendChild(this.element.querySelector('[data-dropdown-content]'));
        this.hint.appendChild(this.hintWindow);

        document.body.appendChild(this.hint);
        this.created = true;

        this.hint.addEventListener('mouseenter', () => this.hintMouseEnter());
        this.hint.addEventListener('mouseleave', () => this.onMouseLeave());

        window.addEventListener('scroll', () => this.positionHint());
        window.addEventListener('resize', () => this.onWidthResize());

        document.addEventListener('touchstart', () => this.positionHint());

        this.handleStyles();
        this.showHint();
    }

    onWidthResize() {
        if (!this.options.shown) {
            return;
        }

        // this.hideHint(true);
        this.positionHint();

        let documentWidth = document.documentElement.clientWidth || document.body.clientWidth;

        if (documentWidth < this.options.maxWidth) {
            this.hint.style.maxWidth = '';
            return;
        }

        if (this.options.maxWidth > 0) {
            this.hint.style.maxWidth = this.options.maxWidth + 'px';
        }
    }

    /**
     * Применяем кастомные стили
     */
    handleStyles() {
        let documentWidth = document.documentElement.clientWidth || document.body.clientWidth;

        if (this.options.width > 0) {
            this.hint.style.width = this.options.width + 'px';
        }

        this.options.maxWidth > 0 && documentWidth > this.options.maxWidth
            ? this.hint.style.maxWidth = this.options.maxWidth + 'px'
            : this.hint.style.maxWidth = '';

        if (this.options.maxHeight > 0 && window.innerHeight > this.options.maxHeight) {
            this.hint.style.maxHeight = this.options.maxHeight + 'px';

            if (this.hint.querySelector('.dropdown__list')) {
                this.hint.querySelector('.dropdown__list').style.maxHeight = 'unset';
            }
        } else {
            this.hint.style.maxHeight = '';
        }
    }

    /**
     * Позиционируем стрелку
     */
    positionArrow() {
        if (this.currentPosition === 'left' || this.currentPosition === 'right' || this.currentPosition === 'left-bottom' || this.currentPosition === 'right-bottom') {
            const hintCenter = this.elementTop + this.element.offsetHeight / 2;
            const maxTop = this.hintWindow.offsetHeight - this.hintArrow.offsetHeight - this.margins;

            let position = hintCenter - offset(this.hintWindow).top - this.hintArrow.offsetHeight / 2;

            position < this.margins
                ? position = this.margins
                : position > maxTop ? position = maxTop : null;

            this.hintArrow.style.top = position + 'px';
            this.hintArrow.style.left = '';
        } else {
            const hintCenter = this.elementLeft + this.element.offsetWidth / 2;
            const maxLeft = this.hintWindow.offsetWidth - this.hintArrow.offsetWidth - this.margins;

            let position = hintCenter - offset(this.hintWindow).left - this.hintArrow.offsetWidth / 2;

            position < this.margins
                ? position = this.margins
                : position > maxLeft ? position = maxLeft : null;

            this.hintArrow.style.left = position + 'px';
            this.hintArrow.style.top = '';
        }
    }

    /**
     * Смещаем попап если выходит за края экрана
     */
    pushPosition() {
        let scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if ((this.currentPosition === 'left' || this.currentPosition === 'left-bottom') && this.currentPosition === this.options.position && this.options.shown) {
            if (this.hintLeft - this.margins * 2 < scrollLeft) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'bottom';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }
        }

        if ((this.currentPosition === 'right' || this.currentPosition === 'right-bottom') && this.currentPosition === this.options.position && this.options.shown) {
            let documentWidth = document.documentElement.clientWidth || document.body.clientWidth;

            if (this.hintLeft + this.hint.offsetWidth > scrollLeft + documentWidth) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'bottom';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }
        }

        if (this.currentPosition === 'top' && this.currentPosition === this.options.position && this.options.shown) {
            if (this.hintTop - this.margins * 2 < scrollTop && scrollTop + window.innerHeight > this.elementTop + this.element.offsetHeight + this.hint.offsetHeight) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'bottom';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }
        }

        if (this.currentPosition === 'bottom' && this.currentPosition === this.options.position && this.options.shown) {
            if (this.hintTop + this.hint.offsetHeight > scrollTop + window.innerHeight && scrollTop < this.elementTop - this.hint.offsetHeight) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'top';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }
        }

        if (this.currentPosition !== this.options.position && this.options.shown) {
            let documentWidth = document.documentElement.clientWidth || document.body.clientWidth;

            if (this.options.position === 'right' && this.elementLeft + this.element.offsetWidth + this.hint.offsetWidth < scrollLeft + documentWidth) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'right';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }

            if (this.options.position === 'right-bottom' && this.elementLeft + this.element.offsetWidth + this.hint.offsetWidth < scrollLeft + documentWidth) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'right-bottom';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }

            if (this.options.position === 'left' && this.elementLeft - this.hint.offsetWidth > scrollLeft) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'left';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }

            if (this.options.position === 'left-bottom' && this.elementLeft - this.hint.offsetWidth > scrollLeft) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'left-bottom';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }

            if (this.options.position === 'top' && scrollTop < this.elementTop - this.hint.offsetHeight) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'top';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }

            if (this.options.position === 'bottom' && scrollTop + window.innerHeight > this.elementTop + this.element.offsetHeight + this.hint.offsetHeight) {
                this.hintWindow.style.transition = 'none';

                this.currentPosition = 'bottom';
                this.hint.setAttribute('dropdown-position', this.currentPosition);
                this.calcPosition();

                this.hintWindow.style.transition = '';
            }
        }
    }

    /**
     * Рассчитываем координаты
     */
    calcPosition() {
        this.elementLeft = offset(this.element).left;
        this.elementTop = offset(this.element).top;

        let scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        let scrollBottom = scrollTop + window.innerHeight;
        let elementWidth = this.element.offsetWidth;
        let elementHeight = this.element.offsetHeight;
        let hintWidth = this.hint.offsetWidth;
        let hintHeight = this.hint.offsetHeight;
        let windowWidth = this.hintWindow.offsetWidth;
        let windowHeight = this.hintWindow.offsetHeight;
        let documentWidth = document.documentElement.clientWidth || document.body.clientWidth;

        switch (this.currentPosition) {
            case 'top': {
                this.hintLeft = this.elementLeft + elementWidth / 2 - windowWidth / 2;
                this.hintTop = this.elementTop - windowHeight;
                break;
            }

            case 'bottom': {
                this.hintLeft = this.elementLeft + elementWidth / 2 - windowWidth / 2;
                this.hintTop = this.elementTop + elementHeight;
                break;
            }

            case 'left': {
                this.hintLeft = this.elementLeft - windowWidth;
                this.hintTop = this.elementTop + elementHeight / 2 - windowHeight / 2;
                break;
            }

            case 'left-bottom': {
                this.hintLeft = this.elementLeft - windowWidth;
                this.hintTop = this.elementTop - this.margins * 2; // + elementHeight / 2 - windowHeight / 2;
                break;
            }

            case 'right': {
                this.hintLeft = this.elementLeft + elementWidth;
                this.hintTop = this.elementTop + elementHeight / 2 - windowHeight / 2;
                break;
            }

            case 'right-bottom': {
                this.hintLeft = this.elementLeft + elementWidth;
                this.hintTop = this.elementTop - this.margins * 2; // + elementHeight / 2 - windowHeight / 2
                break;
            }
        }

        this.hintRight = this.hintLeft + hintWidth - this.margins;
        this.hintBottom = this.hintTop + hintHeight;

        // if (this.currentPosition === 'left' || this.currentPosition === 'right') {
            // let smallHeightFix = 0;

            // if (elementHeight < 30) {
            //     smallHeightFix = elementHeight / 2
            // }

            // if (this.hintTop < scrollTop + this.margins) {
            //     if (scrollTop < this.elementTop - this.margins - smallHeightFix) {
            //         this.hintTop = scrollTop + this.margins;
            //     } else {
            //         this.hintTop = this.elementTop - smallHeightFix;
            //     }
            // }

            // if (this.hintBottom > scrollBottom + this.margins) {
            //     if (this.elementTop + elementHeight + smallHeightFix + this.margins < scrollTop + window.innerHeight) {
            //         this.hintTop = scrollBottom - hintHeight + this.margins;
            //     } else {
            //         this.hintTop = this.elementTop + elementHeight + smallHeightFix - hintHeight + this.margins * 2;
            //     }
            // }

            // return;
        // }

        if (this.hintLeft < this.margins + scrollLeft) {
            this.hintLeft = this.margins + scrollLeft;

            if (this.hintLeft > this.elementLeft + elementWidth - this.margins * 2) {
                this.hintLeft = this.elementLeft + elementWidth - this.margins * 2;
            }
        }

        if (this.hintRight > documentWidth + scrollLeft) {
            this.hintLeft = documentWidth + scrollLeft - hintWidth + this.margins;

            if (this.hintLeft < this.elementLeft - hintWidth + this.margins * 4) {
                this.hintLeft = this.elementLeft - hintWidth + this.margins * 4;
            }
        }
    }

    /**
     * Позиционируем попап
     */
    positionHint() {
        if (!this.options.shown) {
            return;
        }

        if (this.element.offsetParent !== null && window.getComputedStyle(this.element).visibility !== 'hidden') {
            this.calcPosition();
            this.options.pushing && this.pushPosition();

            this.hint.style.transform = `translate3d(${Math.round(this.hintLeft)}px, ${Math.round(this.hintTop)}px, 0px)`;
            this.positionArrow();
        } else {
            this.hideHint(true);
        }
    }

    /**
     * Открытие попапа
     */
    showHint() {
        if (this.delayTimer === null) {
            this.delayTimer = setTimeout(() => {
                if (this.options.trigger === 'hover' && this.hovered || this.options.trigger !== 'hover') {
                    this.options.shown = true;
                    this.hint.classList.remove('hidden');

                    this.positionHint();
                    setTimeout(() => this.hint.classList.add('--shown'), 50);

                    this.onScrollingHide = this.onScrollingHide.bind(this);
                    window.addEventListener('wheel', () => this.onScrollingHide());
                    document.addEventListener('touchmove', () => this.onScrollingHide());

                    let hintContent = this.element.querySelector('[data-dropdown-content]');
                    let button = this.element.querySelector('.ag-button');

                    if (hintContent && hintContent.contains(button)) {
                        button = null;
                    }

                    button !== null ? button.classList.add('--active') : this.element.classList.add('--active');

                    this.options.propagateActive && this.element.parentNode.classList.add('--active');

                    // ShaveCollection.update(this.hint);
                }

                clearTimeout(this.delayTimer);
                this.delayTimer = null;
            }, this.options.delay);
        }
    }

    /**
     * Закрытие попапа
     *
     * @param   {boolean}   force     Принудительное закрытие
     */
    hideHint(force = false) {
        if (this.delayTimer === null && this.options.shown) {
            this.closing = true;

            this.delayTimer = setTimeout(() => {
                if (!this.hovered || force) {
                    this.hint.classList.remove('--shown');

                    let button = this.element.querySelector('.ag-button');
                    button !== null ? button.classList.remove('--active') : this.element.classList.remove('--active');

                    this.options.propagateActive && this.element.parentNode.classList.remove('--active');

                    if (this.animationTimer === null) {
                        this.animationTimer = setTimeout(() => {
                            this.hint.classList.add('hidden');
                            this.options.shown = false;

                            window.removeEventListener('wheel', () => this.onScrollingHide());
                            document.removeEventListener('touchmove', () => this.onScrollingHide());

                            clearTimeout(this.animationTimer);
                            this.animationTimer = null;
                        }, this.animationDuration);
                    }
                }

                clearTimeout(this.delayTimer);
                this.delayTimer = null;

                this.closing = false;
            }, force ? 0 : this.options.delay);
        }
    }

    /**
     * Скрывать попапа если он сместился при скролле
     */
    onScrollingHide() {
        if (!this.options.hideAtMove) {
            return;
        }

        let currentElementLeft = offset(this.element).left;
        let currentElementTop = offset(this.element).top;

        if ((currentElementLeft !== this.elementLeft || currentElementTop !== this.elementTop)) {
            this.positionHint();

            this.elementLeft = currentElementLeft;
            this.elementTop = currentElementTop;

            !this.closing && this.hideHint(true);
        }
    }

    /**
     * Навели курсор на элемент
     */
    onMouseEnter() {
        if (this.options.trigger !== 'hover') {
            return;
        }

        let hintContent = this.element.querySelector('[data-dropdown-content]');
        let button = this.element.querySelector('.ag-button');

        if (hintContent && hintContent.contains(button)) {
            button = null;
        }

        this.hovered = true;

        if (this.options.shaving && this.element.querySelectorAll('.js-shave').length !== 0 || !this.options.shaving) {
            if (!this.created) {
                this.createHint();
                button !== null ? button.classList.add('--active') : this.element.classList.add('--active');
                return;
            }

            if (!this.options.shown) {
                this.showHint();
                button !== null ? button.classList.add('--active') : this.element.classList.add('--active');
            }
        }
    }

    /**
     * Убрали курсор с элемента
     */
    onMouseLeave() {
        if (this.options.trigger !== 'hover') {
            return;
        }

        let button = this.element.querySelector('.ag-button');

        this.hovered = false;

        if (this.options.shaving && this.element.querySelectorAll('.js-shave').length !== 0 || !this.options.shaving) {
            this.hideHint();
            button !== null ? button.classList.remove('--active') : this.element.classList.remove('--active');
        }
    }

    /**
     * Навели курсор на попап
     */
    hintMouseEnter() {
        if (!this.options.interactive || (this.options.trigger !== 'hover')) {
            return;
        }

        let hintContent = this.element.querySelector('[data-dropdown-content]');
        let button = this.element.querySelector('.ag-button');

        if (hintContent && hintContent.contains(button)) {
            button = null;
        }

        button !== null ? button.classList.add('--active') : this.element.classList.add('--active');
        this.hovered = true;
    }

    /**
     * Кликнули на элемент
     */
    onClick() {
        if (this.options.trigger !== 'click') {
            return;
        }

        this.hovered = true;

        if (!this.created) {
            this.createHint();
            return;
        }

        this.options.shown ? this.hideHint() : this.showHint();
    }

    /**
     * Кликнули в другом месте
     */
    onOuterClick(event) {
        if (!this.options.shown || !this.created) {
            return;
        }

        let target = event.target;

        if (this.options.interactive && !this.hintWindow.contains(target) || !this.options.interactive) {
            this.hovered = false;
            this.hideHint();
        }
    }
}
