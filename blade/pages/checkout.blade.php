@extends('pages.layout')

@section('title', 'Оплата')

@section('content')
    @component('components.header') @endcomponent

    <div data-checkout>
        <section class="section --bg-grey --underline -pb-20 -sm-pb-40">
            <div class="container">
                <h1 class="--large">Оплата</h1>

                <p class="-max-width-380px -color-indigo-80">Для успешного завершения, заполните все поля и выберите способ оплаты</p>
            </div>
        </section>

        <section class="section --bg-grey --underline -pt-20 -sm-pt-40">
            <div class="container">
                <div data-tabbar>
                    <div class="tabbar --scrollable">
                        <div class="tabbar__scroller">
                            <div class="tabbar__wrapper">
                                <div class="tabbar__tab {{ isset($_GET['checkoutTariff']) && $_GET['checkoutTariff'] === 'Интенсив' ? 'active' : '' }}" data-tabbar-tab data-checkout-tariff-name="Интенсив" data-checkout-tariff-price="23000">
                                    <span>Интенсив</span>
                                </div>

                                <div class="tabbar__tab {{ isset($_GET['checkoutTariff']) && $_GET['checkoutTariff'] === 'Интенсив + Разбор' ? 'active' : '' }}" data-tabbar-tab data-checkout-tariff-name="Интенсив + Разбор" data-checkout-tariff-price="51000">
                                    <span>Интенсив + Разбор</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div data-tabbar-page>
                        <div class="grid">
                            <div class="grid__cell -flex-1">
                                <div class="h3 -mb-10">Интенсив</div>
                                <div class="-mb-20 -font-size-18px">1 + 2 день</div>
                            </div>

                            <div class="grid__cell --xsm-by-content">
                                <ul class="checkout-price-list">
                                    <li class="--profitable">
                                        <strong>23 000 ₽</strong>
                                        <span>до 24 ноября</span>
                                    </li>

                                    <li>
                                        <strong>27 000 ₽</strong>
                                        <span>до 1 декабря</span>
                                    </li>

                                    <li>
                                        <strong>31 000 ₽</strong>
                                        <span>до 8 декабря</span>
                                    </li>

                                    <li>
                                        <strong>34 000 ₽</strong>
                                        <span>после 9 декабря</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="hidden" data-tabbar-page>
                        <div class="grid">
                            <div class="grid__cell -flex-1">
                                <div class="h3 -mb-10">Интенсив + Разбор</div>
                                <div class="-mb-20 -font-size-18px">1 + 2 день</div>
                            </div>

                            <div class="grid__cell --xsm-by-content">
                                <ul class="checkout-price-list">
                                    <li class="--profitable">
                                        <strong>51 000 ₽</strong>
                                        <span>до 24 ноября</span>
                                    </li>

                                    <li>
                                        <strong>57 000 ₽</strong>
                                        <span>до 1 декабря</span>
                                    </li>

                                    <li>
                                        <strong>63 000 ₽</strong>
                                        <span>до 8 декабря</span>
                                    </li>

                                    <li>
                                        <strong>69 000 ₽</strong>
                                        <span>после 9 декабря</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section --last">
            <form>
                <div class="container">
                    <h5 class="--underline -text-uppercase -color-indigo-35 -mb-30">Данные регистрации</h5>

                    <div class="grid --mobile-gutters-10">
                        <div class="grid__cell --xsm-6 --md-4">
                            <label class="form__label" for="checkoutName">Имя</label>

                            @component('components.input', [
                                'placeholder' => 'Введите ваше имя',
                                'value' => $_GET['checkoutName'] ?? '',
                                'name' => 'checkoutName',
                                'id' => 'checkoutName',
                                'large' => true,
                                'class' => '-width-100ps',
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell --xsm-6 --md-4">
                            <label class="form__label" for="checkoutPhone">Телефон</label>

                            @component('components.input', [
                                'placeholder' => 'Номер телефона',
                                'value' => $_GET['checkoutPhone'] ?? '',
                                'name' => 'checkoutPhone',
                                'id' => 'checkoutPhone',
                                'large' => true,
                                'class' => '-width-100ps',
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell --xsm-6 --md-4">
                            <label class="form__label" for="checkoutEmail">Email *</label>

                            @component('components.input', [
                                'placeholder' => 'Укажите ваш email',
                                'value' => $_GET['checkoutEmail'] ?? '',
                                'name' => 'checkoutEmail',
                                'id' => 'checkoutEmail',
                                'iconStatus' => true,
                                'errorMessage' => 'Обязательное поле',
                                'large' => true,
                                'class' => '-width-100ps',
                                'data' => [
                                    'required' => true,
                                    'type' => 'email',
                                ],
                            ])
                            @endcomponent
                        </div>
                    </div>

                    <input type="text" name="checkoutTariff" hidden>
                    <input type="text" name="checkoutPrice" hidden>
                </div>

                <div class="container">
                    <h5 class="--underline -text-uppercase -color-indigo-35 -mb-30">Метод оплаты</h5>

                    <div class="grid --mobile-gutters-10">
                        <div class="grid__cell --md-6">
                            <label class="checkout-pay-method --legal">
                                <input type="radio" name="checkoutPayMethod" value="legal" {{ isset($_GET['checkoutPayMethod']) && $_GET['checkoutPayMethod'] === 'legal' ? 'checked' : '' }} data-checkout-legal-method>

                                <span class="checkout-pay-method__view">
                                    <span class="checkout-pay-method__info">
                                        <span class="checkout-pay-method__title">Оплачиваю как юридическое лицо</span>
                                        <span>Оплата по счету на реквизиты</span>
                                    </span>

                                    <span class="checkout-pay-method__marker">
                                        <span class="icon --small"><svg><use xlink:href="#tick"></use></svg></span>
                                    </span>

                                    <span class="checkout-pay-method__pattern"></span>
                                </span>
                            </label>
                        </div>

                        <div class="grid__cell --md-6">
                            <label class="checkout-pay-method --phisical">
                                <input type="radio" name="checkoutPayMethod" value="phisical" {{ isset($_GET['checkoutPayMethod']) && $_GET['checkoutPayMethod'] === 'phisical' ? 'checked' : '' }} data-checkout-phisical-method>

                                <span class="checkout-pay-method__view">
                                    <span class="checkout-pay-method__info">
                                        <span class="checkout-pay-method__title">Оплачиваю как физическое лицо</span>

                                        <span class="checkout-pay-method__pay-systems">
                                            <img src="/dist/img/pay-systems/visa.png" class="-d-none -xsm-d-block" width="42" alt="visa">
                                            <img src="/dist/img/pay-systems/mastercard.png" width="30" alt="mastercard">
                                            <img src="/dist/img/pay-systems/apple-pay.png" width="40" alt="apple-pay">
                                            <img src="/dist/img/pay-systems/qiwi.png" class="-d-none -xsm-d-block" width="57" alt="qiwi">
                                            <img src="/dist/img/pay-systems/yandex.png" width="65" alt="yandex" style="margin-top: -10px;">
                                            <span>и др.</span>
                                        </span>
                                    </span>

                                    <span class="checkout-pay-method__marker">
                                        <span class="icon --small"><svg><use xlink:href="#tick"></use></svg></span>
                                    </span>

                                    <span class="checkout-pay-method__pattern"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container hidden" data-checkout-final-info-container>
                    <div class="-text-center -color-indigo-35 -mx-auto -mb-40 hidden" style="max-width: 660px" data-checkout-if-legal>Оплачивая счет Вы соглашаетесь c условиями
                        <a href="javascript:void(0);" class="-color-indigo-35">договора-оферты</a> и <a href="javascript:void(0);" class="-color-indigo-35">политикой конфиденциальности</a></div>

                    <div class="-text-center -color-indigo-35 -mx-auto -mb-40 hidden" style="max-width: 660px" data-checkout-if-phisical>Нажимая на кнопку "Далее", я даю согласие на обработку персональных данных и соглашаюсь c условиями <a href="javascript:void(0);" class="-color-indigo-35">договора-оферты</a> и <a href="javascript:void(0);" class="-color-indigo-35">политикой конфиденциальности</a></div>

                    @component('components.notification', [
                        'icon' => '#info-circled-filled',
                        'title' => 'Скидка 30%',
                        'text' => 'При покупке от 3х билетов, вы получаете скидку 30%',
                        'close' => true,
                        'class' => '-mb-40 -sm-mb-60',
                    ])
                    @endcomponent

                    <div class="checkout-final-info" data-checkout-final-info>
                        <div class="checkout-final-info__top-block">
                            <button class="button --white --large -width-100ps -sm-width-auto -md-d-none" data-checkout-if-legal>
                                <img class="button__file" src="/dist/img/file-types/pdf.svg" alt="">
                                <span>Скачать счет</span>
                            </button>

                            <button class="button --white --large -width-100ps -sm-width-auto -md-d-none" data-checkout-if-phisical>
                                <span>Далее</span>
                                <span class="icon --small"><svg><use xlink:href="#arrow"></use></svg></span>
                            </button>

                            <div class="checkout-final-info__price-block">
                                <div class="checkout-final-info__price">
                                    <div class="checkout-final-info__price-value" data-checkout-final-price></div>
                                    <div class="checkout-final-info__discount hidden" data-checkout-final-discount>Скидка 30%</div>
                                </div>

                                @component('components.number-picker', [
                                    'value' => $_GET['checkoutAmount'] ?? 1,
                                    'min' => 1,
                                    'max' => 5,
                                    'maxlength' => 3,
                                    'name' => 'checkoutAmount',
                                    'large' => true,
                                ])
                                @endcomponent
                            </div>
                        </div>

                        <ul class="checkout-final-info__list">
                            <li>
                                <span data-checkout-current-tariff></span>
                                <span>1+2 день</span>
                            </li>

                            <li>
                                <span>Оплачиваю как</span>
                                <span data-checkout-if-legal>юридическое лицо</span>
                                <span data-checkout-if-phisical>физическое лицо</span>
                            </li>
                        </ul>

                        <div class="checkout-final-info__right-buttons">
                            <button class="button --white --large" data-checkout-if-legal>
                                <img class="button__file -md-d-none -lg-d-block" src="/dist/img/file-types/pdf.svg" alt="">
                                <span>Скачать счет</span>
                            </button>

                            <button class="button --white --large" data-checkout-if-phisical>
                                <span>Далее</span>
                                <span class="icon --small"><svg><use xlink:href="#arrow"></use></svg></span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

    @component('components.footer') @endcomponent
@endsection
