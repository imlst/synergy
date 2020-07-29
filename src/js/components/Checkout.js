import TabbarCollection from './ui/Tabbar';
import NumberPickerCollection from './ui/NumberPicker';

export default class Checkout{
    constructor({ element, ...options }) {
        this.element = element;
        this.options = options;
        this.legalMethodToggle = this.element.querySelector('[data-checkout-legal-method]');
        this.phisicalMethodToggle = this.element.querySelector('[data-checkout-phisical-method]');
        this.tariffTabbar = null;
        this.tariff = null;
        this.tariffPrice = null;
        this.amount = 1;
        this.amountPicker = null;

        this.changePayMethod();
        this.legalMethodToggle.addEventListener('change', () => this.changePayMethod());
        this.phisicalMethodToggle.addEventListener('change', () => this.changePayMethod());

        TabbarCollection.on('filled', () => {
            this.tariffTabbar = TabbarCollection.getByElement(this.element.querySelector('[data-tabbar]'));
            this.tariffTabbar.on('change', () => this.onTariffChange());
            this.onTariffChange();
        });

        NumberPickerCollection.on('filled', () => {
            this.amountPicker = NumberPickerCollection.getByElement(this.element.querySelector('[data-number-picker]'));
            this.amountPicker.on('input', () => this.onAmountChange());
            this.onAmountChange();
        });

        this.element.querySelector('form').addEventListener('keypress', (event) => {
            event.key === 'Enter' && event.preventDefault();
        });
    }

    changePayMethod () {
        const finalInfoContainer = this.element.querySelector('[data-checkout-final-info-container]');
        const finalInfoBlock = this.element.querySelector('[data-checkout-final-info]');
        const legalInfo = this.element.querySelectorAll('[data-checkout-if-legal]');
        const phisicalInfo = this.element.querySelectorAll('[data-checkout-if-phisical]');

        if (this.legalMethodToggle.checked || this.phisicalMethodToggle.checked) {
            finalInfoContainer.classList.remove('hidden');
            finalInfoBlock.classList.remove('hidden');
            setTimeout(() => finalInfoBlock.classList.add('--shown'), 0);
        }

        this.legalMethodToggle.checked ? legalInfo.forEach(item => item.classList.remove('hidden')) : legalInfo.forEach(item => item.classList.add('hidden'));
        this.phisicalMethodToggle.checked ? phisicalInfo.forEach(item => item.classList.remove('hidden')) : phisicalInfo.forEach(item => item.classList.add('hidden'));
    }

    onTariffChange() {
        const activeTabID = this.tariffTabbar.activeTab;
        const activeTab = this.tariffTabbar.tabs[activeTabID].element;

        this.tariff = activeTab.getAttribute('data-checkout-tariff-name');
        this.tariffPrice = Number(activeTab.getAttribute('data-checkout-tariff-price'));

        this.setFinalPrice();

        this.element.querySelectorAll('[data-checkout-current-tariff]').forEach(item => item.textContent = this.tariff);

        this.element.querySelector('input[name="checkoutTariff"]').value = this.tariff;
        this.element.querySelector('input[name="checkoutPrice"]').value = this.tariffPrice;
    }

    onAmountChange() {
        this.amount = this.amountPicker.value;
        this.setFinalPrice();
    }

    setFinalPrice() {
        const discountLabel = this.element.querySelector('[data-checkout-final-discount]');

        this.element.querySelectorAll('[data-checkout-final-price]').forEach(item => {
            const cost = this.amount < 3 ? this.tariffPrice * this.amount : this.tariffPrice * this.amount * 0.7; // -30% если 3 и более штук
            item.textContent = cost.toLocaleString() + ' ₽';
        });

        if (discountLabel) {
            this.amount < 3 ? discountLabel.classList.add('hidden') : discountLabel.classList.remove('hidden');
        }
    }
}

if (document.body.querySelector('[data-checkout]')) {
    window.Checkout = new Checkout({ element: document.body.querySelector('[data-checkout]') });
}
