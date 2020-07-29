import Collection from '../../base/Collection';
import throttle from '../../helpers/throttle';
import offset from '../../helpers/offset';

const SliderCollection = new class SliderCollection extends Collection {
    constructor(options = {}) {
        super();

        document.addEventListener('DOMContentLoaded', () => {
            this.fill(options);
        });
    }

    fill(options = {}) {
        let container = options.container || document.body;

        container.querySelectorAll('[data-slider]').forEach((item) => {
            if (!this.getByElement(item)) {
                this.add(new Slider({ element: item, ...options }));
            }
        });
    }
};

export default window.SliderCollection = SliderCollection;

class Slider {
    constructor({ element, ...options }) {
        this.element = element;
        this.options = options;
        this.wrapper = this.element.querySelector('[data-slider-wrapper]');
        this.scroller = this.element.querySelector('[data-slider-scroller]');
        this.slides = Array.from(this.element.querySelectorAll('[data-slider-slide]'));
        this.prevButton = this.element.querySelector('[data-slider-prev]');
        this.nextButton = this.element.querySelector('[data-slider-next]');
        this.edgeToEdge = this.element.classList.contains('--edge-to-edge');

        this.handleNavButtons();
        this.scroller.addEventListener('scroll', throttle(this.handleNavButtons.bind(this)));
        window.addEventListener('resize', throttle(this.handleNavButtons.bind(this)));

        this.prevButton.addEventListener('click', () => this.toPrev());
        this.nextButton.addEventListener('click', () => this.toNext());

        this.handleEdgeToEdge();
        window.addEventListener('resize', throttle(this.handleEdgeToEdge.bind(this)));

        this.handleSlides();
        this.scroller.addEventListener('scroll', throttle(this.handleSlides.bind(this)));
        window.addEventListener('resize', throttle(this.handleSlides.bind(this)));
    }

    handleEdgeToEdge() {
        if (!this.edgeToEdge) {
            return;
        }

        const offsetLeft = offset(this.element).left;
        const offsetRight = document.body.clientWidth - offsetLeft - this.element.offsetWidth;

        this.wrapper.style.setProperty('margin-left', -offsetLeft + 'px');
        this.wrapper.style.setProperty('margin-right', -offsetRight + 'px');

        this.slides[0].style.setProperty('padding-left', offsetLeft + 'px');
        this.slides[this.slides.length - 1].style.setProperty('padding-right', offsetRight + 'px');
    }

    handleSlides() {
        this.slides.forEach(item => {
            const outsideRight = item.offsetLeft + item.offsetWidth > this.scroller.scrollLeft + this.scroller.offsetWidth;
            const outsideLeft = item.offsetLeft < this.scroller.scrollLeft - item.offsetWidth;

            if (outsideLeft || outsideRight) {
                item.classList.add('--outside');
            } else {
                item.classList.remove('--outside');
            }
        });
    }

    handleNavButtons() {
        if (!this.prevButton || !this.nextButton) {
            return;
        }

        this.scroller.offsetWidth + this.scroller.scrollLeft >= this.scroller.scrollWidth
            ? this.nextButton.classList.add('disabled')
            : this.nextButton.classList.remove('disabled');

        this.scroller.scrollLeft > 0
            ? this.prevButton.classList.remove('disabled')
            : this.prevButton.classList.add('disabled');
    }

    toNext() {
        let nextSlide = null;

        this.slides.some(item => {
            const condition = item.offsetLeft + item.offsetWidth - 15 > this.scroller.scrollLeft + this.scroller.offsetWidth;
            condition && (nextSlide = item);

            return condition;
        });

        this.scroller.scrollTo({
            left: nextSlide.offsetLeft,
            behavior: 'smooth'
        });
    }

    toPrev() {
        let prevSlide = null;

        this.slides.forEach(item => {
            if (item.offsetLeft - this.scroller.scrollLeft < -15) {
                prevSlide = item;
            }
        });

        this.scroller.scrollTo({
            left: prevSlide.offsetLeft + prevSlide.offsetWidth - this.scroller.offsetWidth,
            behavior: 'smooth'
        });
    }
}
