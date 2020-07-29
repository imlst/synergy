@extends('pages.layout')

@section('title', 'Программа "Алгоритмы бизнеса"')

@section('content')
    @component('components.header', [
        'auth' => true,
        'firstLevel' => true,
        'section' => 'work',
        'secondLevel' => [
            ['name' => 'Алгоритмы'],
            ['name' => 'Мероприятия', 'active' => true],
            ['name' => 'Анкета'],
        ],
    ])
    @endcomponent

    <section class="strong-solutions-start">
        <div class="container strong-solutions-start__container">
            <div class="oblique-caption">
                <div><span class="-color-blue -text-uppercase">3-х месячная программа</span></div>
            </div>

            <div class="strong-solutions-start__content">
                <div class="h1 --large -text-uppercase">Алгоритмы бизнеса</div>

                <div class="strong-solutions-start__desc">Прокачай свою компанию<br>по 8 направлениям</div>

                <a href="#strong-solutions-register" class="button --orange --large --white-bg-onhover">Забронировать место</a>

                <div class="-mt-20 -sm-mt-30 -sm-font-size-18px"><span class="-color-orange">*</span> Живое и онлайн участие</div>
            </div>

            <img src="/dist/img/pages/strong-solutions/start/av.png" class="strong-solutions-start__av" alt="">
        </div>
    </section>

    <section class="strong-solutions-executives">
        <div class="container">
            <h2 class="--large -text-center">За 3 месяца глубоко проработаем<br>8 направлений вашего бизнеса</h2>

            <div class="business-algorithms-directions -mt-60">
                <div class="business-algorithms-directions__row">
                    <div class="business-algorithms-directions__cell">
                        <div class="h4">1 месяц</div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Развитие</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-1-dir-1">от хаотичных действий к целенаправленным</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-1-dir-1", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Развитие</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Проработать цели, принципы и стратегию движения к целям</li>
                                        <li>Настроить взаимосвязь ежедневных задач компании со стратегией и целью</li>
                                        <li>Настроить систему отслеживания ключевых показателей</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Управление</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-1-dir-2">от текучки и суеты к системной работе</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-1-dir-2", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Управление</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Настроить процессы постановки, исполнения и контроля задач</li>
                                        <li>Настроить систему управленческих показателей компании</li>
                                        <li>Настроить софт по управлению задачами</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Персонал</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-1-dir-3">от нехватки нужных людей к системе найма</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-1-dir-3", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Персонал</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, veritatis?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="business-algorithms-directions__row">
                    <div class="business-algorithms-directions__cell">
                        <div class="h4">2 месяц</div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Продажи</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-2-dir-1">от неуправляемых продаж к управляемым</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-2-dir-1", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Продажи</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, veritatis?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Продукт</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-2-dir-2">от среднего продукта к выдающемуся</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-2-dir-2", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Продукт</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, veritatis?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Персонал</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-2-dir-3">от непрофессонализма команды к системе обучения</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-2-dir-3", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Персонал</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, veritatis?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="business-algorithms-directions__row">
                    <div class="business-algorithms-directions__cell">
                        <div class="h4">3 месяц</div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Привлечение клиентов</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-3-dir-1">от нехватки новых заказов к стабильному потоку</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-3-dir-1", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Привлечение клиентов</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, veritatis?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Финансы</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-3-dir-2">от непонимания к точным решениям</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-3-dir-2", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Финансы</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, veritatis?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="business-algorithms-directions__cell">
                        <div class="h5">Безопасность</div>
                        <div>
                            <a href="javascript:void(0);" class="-underline-dashed" data-modal-show="month-3-dir-3">от неоправданных рисков к четким регламентам</a>
                        </div>

                        <div class="modal" data-modal='{ "name": "month-3-dir-3", "maxWidth": 640 }'>
                            <div class="modal__window" data-modal-window>
                                <div class="modal__header">Безопасность</div>

                                <div class="modal__close" data-modal-close>
                                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                                </div>

                                <div class="modal__body">
                                    <ul class="-color-indigo-80">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, nisi.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, debitis!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, veritatis?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section --wide">
        <div class="container">
            <h2 class="--large -text-center -mb-30 -sm-mb-60">3 главных принципа обучения</h2>

            <ul class="numbered-steps --large -max-width-780px">
                <li class="-sm-mb-40">
                    <div>
                        <h3>Детальное объяснение</h3>
                        <p>Конкретика, а не общие слова, реальные примеры из собственной практики, а не книжная теория. Как живое участие, так и возможность смотреть запись онлайн.</p>
                    </div>
                </li>

                <li class="-sm-mb-40">
                    <div>
                        <h3>Разборы реальных кейсов</h3>
                        <p>Вы прорабатывает теорию, сталкиваетесь с трудностями и приходите с ними на живой разбор, где получаете ответы на ваши конкретные задачи. После живых разборов записи будут доступны в личном кабинете.</p>
                    </div>
                </li>

                <li>
                    <div>
                        <h3>Помощь во внедрении</h3>
                        <p>В процессе внедрения вы будете сталкиваться с сопротивлением команды, для преодоления этого сопротивления мы проведем онлайн-занятия для собственников и ваших руководителей с объяснением деталей внедрения.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div class="business-algorithms-get-sample">
        <div class="business-algorithms-get-sample__skew-bg"></div>
        <div class="business-algorithms-get-sample__pattern"></div>

        <div class="business-algorithms-get-sample__container">
            <div class="business-algorithms-get-sample__left">
                <div class="business-algorithms-get-sample__title">Посмотрите пример контента, который будет на&nbsp;программе</div>
            </div>

            <div>
                <form action="">
                    <div class="business-algorithms-get-sample__caption -mb-20">Получить пример</div>

                    <div class="grid --gutters-5">
                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Ваше имя',
                                'id' => 'registerName',
                                'name' => 'registerName',
                                'class' => '-width-100ps',
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Телефон',
                                'id' => 'registerPhone',
                                'name' => 'registerPhone',
                                'class' => '-width-100ps',
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Email',
                                'id' => 'registerEmail',
                                'name' => 'registerEmail',
                                'iconStatus' => true,
                                'errorMessage' => 'Обязательное поле',
                                'class' => '-width-100ps',
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            <button class="button --white --invert -width-100ps -mt-10">Пришлите пример</button>
                        </div>
                    </div>

                    <div class="-font-size-12px -color-indigo-35 -mt-15">Нажимая на кнопку, я соглашаюсь на <a href="javascript:void(0);" class="-color-indigo-35">обработку данных</a> и с <a href="javascript:void(0);" class="-color-indigo-35">политикой конфиденциальности</a></div>
                </form>
            </div>
        </div>
    </div>

    <section class="strong-solutions-splited">
        <div class="container">
            <div class="strong-solutions-splited__block">
                <div class="strong-solutions-splited__block-content -lg-max-width-580px">
                    <h2 class="--large">Как проходит программа</h2>

                    <div class="-mb-30 -sm-mb-60">
                        <p class="-md-font-size-22px">— 3 живых встречи для собственников с погружением в&nbsp;направление на 4-5 часов каждый</p>
                        <p class="-md-font-size-22px">— 3 живых групповых разбора на 4-5 часов каждый (разбор ваших кейсов)</p>
                        <p class="-md-font-size-22px">— 9 онлайн-занятий для собственников и руководителей (помощь во внедрении)</p>
                    </div>

                    <img src="/dist/img/pages/strong-solutions/splited/perspectives.svg" class="strong-solutions-splited__program -sm-d-none" alt="">

                    <div class="-mt-30">
                        <h2 class="-text-uppercase">Итого за 3 месяца:</h2>
                        <p class="-font-semibold -md-font-size-22px -mb-10">6 живых встреч (~1 занятие в 2 недели)</p>
                        <p class="-font-semibold -md-font-size-22px -mb-10">9 занятий онлайн (~1 занятие в неделю)</p>
                    </div>
                </div>

                <img src="/dist/img/pages/strong-solutions/splited/perspectives.svg" class="strong-solutions-splited__program -d-none -sm-d-block" alt="">
            </div>
        </div>
    </section>

    <section class="strong-solutions-splited -pt-0">
        <div class="container">
            <div class="strong-solutions-splited__block -lg-mr-100">
                <div class="strong-solutions-splited__av">
                    <img src="/dist/img/pages/strong-solutions/splited/av.png" alt="">

                    <ul class="strong-solutions-splited__av-social">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><svg><use xlink:href="#facebook"></use></svg></span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><svg><use xlink:href="#instagram"></use></svg></span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><svg><use xlink:href="#vk"></use></svg></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="strong-solutions-splited__block-content -sm-ml-auto">
                    <div class="-text-uppercase -font-2mass -font-bold -color-indigo-80 -font-size-12px -mb-10">Ведущий интенсива</div>
                    <h2 class="--large -sm-font-size-30px">Александр Волчек</h2>

                    <ul class="numbered-steps --large">
                        <li class="-sm-mb-40">
                            <div>12 лет реального опыта управления бизнесом</div>
                        </li>

                        <li class="-sm-mb-40">
                            <div>Генеральный директор “Мегаплан”: увеличил базу клиентов в 15 раз</div>
                        </li>

                        <li class="-sm-mb-40">
                            <div>Соучредитель и генеральный директор “Бизнес Молодость”: на момент старта работы оборот - 20 млн руб/год. На момент выхода - 700 млн руб/год</div>
                        </li>

                        <li class="-sm-mb-40">
                            <div>Основатель платформы покупки/продажи продуктов питания оптом АГРО24</div>
                        </li>

                        <li>
                            <div>Женат, трое детей</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="strong-solutions-tariffs">
        <div class="container">
            <h2 class="--large -text-center">Варианты участия</h2>

            <div class="strong-solutions-tariffs__grid">
                <div class="strong-solutions-tariffs__tile">
                    <div class="strong-solutions-tariffs__tile-head -text-uppercase">Стандарт</div>

                    <div class="strong-solutions-tariffs__tile-body">
                        <div class="strong-solutions-tariffs__tile-schedule -mt-0">
                            <strong class="--smaller -color-black-85 -mx-0">3 живых встречи для собственника с погружением в напраление</strong>
                            <strong class="--smaller -color-black-85 -mx-0">3 живых групповых разбора на 3-4 часа (разбор ваших кейсов)</strong>
                            <strong class="--smaller -color-black-85 -mx-0">9 онлайн занятий для собственников и руководителей с разбором алгоритмов</strong>
                        </div>

                        <ul class="strong-solutions-tariffs__tile-price">
                            <li class="--profitable">
                                <strong>59 000 ₽</strong>
                                <span>до 9 декабря</span>
                            </li>

                            <li>
                                <strong>69 000 ₽</strong>
                                <span>после 9 января</span>
                            </li>
                        </ul>

                        <a href="#strong-solutions-register" class="button --black --large -width-100ps">Забронировать место</a>
                    </div>
                </div>

                <div class="strong-solutions-tariffs__tile">
                    <div class="strong-solutions-tariffs__tile-head -text-uppercase">Вип</div>

                    <div class="strong-solutions-tariffs__tile-body">
                        <div class="strong-solutions-tariffs__tile-schedule -mt-0">
                            <strong class="--smaller -mx-0">3 живых встречи для собственника с погружением в напраление</strong>
                            <strong class="--smaller -mx-0">3 живых групповых разбора на 3-4 часа (разбор ваших кейсов)</strong>
                            <strong class="--smaller -mx-0">9 онлайн занятий для собственников и руководителей с разбором алгоритмов</strong><br> +
                            <strong class="--smaller --blue -mx-0">3 дополнительных ВИП разбора с Александром</strong>
                        </div>

                        <ul class="strong-solutions-tariffs__tile-price">
                            <li class="--profitable">
                                <strong>159 000 ₽</strong>
                                <span>до 9 декабря</span>
                            </li>

                            <li>
                                <strong>179 000 ₽</strong>
                                <span>после 9 января</span>
                            </li>
                        </ul>

                        <a href="#strong-solutions-register" class="button --black --large -width-100ps">Забронировать место</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="strong-solutions-register" id="strong-solutions-register">
        <div class="container">
            <h2 class="--large -text-center">Забронируйте место</h2>

            <div class="strong-solutions-register__form">
                <h3 class="--large -text-center -mb-30 -sm-mb-40">Форма регистрации</h3>

                <form action="">
                    <div class="grid --gutters-5">
                        <div class="grid__cell">
                            <div class="select select__field -width-100ps --large" data-select='{ "placeholder": "Выберите тариф" }'>
                                <select name="registerTariff">
                                    <option disabled hidden>Выберите тариф</option>
                                    <option selected>Стандарт (59 000 ₽)</option>
                                    <option>ВИП (159 000 ₽)</option>
                                </select>

                                <div class="select__value" data-select-value></div>

                                <div class="select__arrow">
                                    <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                                </div>
                            </div>
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Ваше имя',
                                'id' => 'registerName',
                                'name' => 'registerName',
                                'class' => '-width-100ps',
                                'large' => true,
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Телефон',
                                'id' => 'registerPhone',
                                'name' => 'registerPhone',
                                'class' => '-width-100ps',
                                'large' => true,
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Email',
                                'id' => 'registerEmail',
                                'name' => 'registerEmail',
                                'iconStatus' => true,
                                'errorMessage' => 'Обязательное поле',
                                'class' => '-width-100ps',
                                'large' => true,
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            <label class="checkbox --large --small-text">
                                <input type="checkbox" id="registerTerms" name="registerTerms" checked>

                                <span class="checkbox__view">
                                    <span class="checkbox__marker"></span>
                                    <span class="checkbox__label">Даю согласие на обработку <a href="javascript:void(0);">персональных данных</a> и соглашаюсь с
                                        <a href="javascript:void(0);">политикой конфиденциальности</a></span>
                                </span>
                            </label>
                        </div>
                    </div>

                    <button class="button --blue --large -width-100ps -mt-30">Забронировать</button>
                </form>
            </div>
        </div>
    </section>

    <section class="section --last-wide">
        <div class="container">
            <div class="strong-solutions-faq-block">
                <h2 class="--large -text-center -sm-mb-40">Вопросы и ответы</h2>

                <div data-accordion-group>
                    @component('components.accordion', [
                        'title' => 'Чего мне ожидать от этого интенсива? Что конкретно я получу?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            На интенсиве Александр детально разберет 8 направлений бизнеса - привлечение клиентов, продажи, развитие, управление, продукт, персонал, финансы,  безопасность. По каждому направлению будут даны ключевые факторы успеха - это детали, от которых зависит будет в этом направлении хороший результат или нет. Понимая эти факторы вы сможете оценить, какие пробелы есть в вашем бизнесе и увидеть как их ликвидировать. По окончанию интенсива у вас будет план внедрения новых решений в своем бизнес. Какой конкретный результат вы  благодаря этому получите будет зависеть от того, насколько вы этой информацией сами сможете воспользоваться. Если вам нужна будет помощь во внедрении новых решений, то можете записаться на день разборов.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Что такое день разборов?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            21 ноября пройдет живая встреча с разборами кейсов участников. Цель разборов - помочь с внедрением новых решений в вашем бизнесе. Каждый участник приходит на разбор со списком трудностей, которые не позволяют его бизнесу вырасти и Александр помогает выработать эффективные решения, исходя из своего профессионального опыта.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Как связаны интенсив и день разборов?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Интенсив - это глубокое погружение в теорию. По его окончанию у вас будет план внедрения новых решений в своем бизнесе. Дальше вы можете следовать по этому плану самостоятельно или задать свои вопросы и проговорить трудности на дне разборов 21 ноября.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Что если я не уверен(а), подойдет ли мне этот интенсив?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            После того как вы оставите заявку появится диагностическая анкета. После того, как вы ее заполните с вами свяжется менеджер и сообщит, подойдет интенсив под вашу текущую задачу или нет. Анкеты изучаются очень внимательно, и если мы видим, что это мероприятие не для вас - мы скажем вам об этом прямо.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Могу я прийти на интенсив с партнером/директором?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Если вы совместно управляете бизнесом и принимаете стратегические решения, то лучше всего проходить интенсив вместе, чтобы у вас было общее понимание. При покупке 3 и более билетов предоставляется скидка 30%.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Какие материалы предоставляются на интенсиве:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            После каждого занятия группа получает доступ к пакету материалов, которые относятся к этому занятию. Это могут быть регламенты, процессы, описания, примеры, правила и другие полезные материалы.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Для кого проводится мероприятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Интенсив в первую очередь для собственников и генеральных директоров компаний. Возможно участие некоторые руководителей, если они приходят вместе с владельцем или при отдельном согласовании с Организатором.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли участвовать онлайн:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Нет, такой возможности не предусмотрено. Возможно только живое участие в городе Москва.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли пропустить занятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, каждый участник может пропустить занятие. При этом он получит доступ, как и другие участники, к стандартному набору материалов по данному занятия. Важно понимать, что ему не предоставят никакие другие материалы или видео-запись.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли вернуть деньги за мероприятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, деньги за мероприятие можно вернуть пропорционально проведенным занятиям.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Предоставляется ли видео-запись мероприятий:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Нет, видео запись не предоставляется.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Определен ли список точных тем:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Основные темы указаны в программе. При этом возможна незначительная корректировка в зависимости от аудитории и спикера.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Будут ли организованы ежемесячные занятия:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            После интенсива стартует группа с наставничеством, где будут проходить регулярные личные встречи. Для участия в группе требуется посещение данного мероприятия.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли оплатить мероприятие от юридического лица:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, конечно оплату можно сделать от юридического лица. Оформите платеж, используя указанные реквизиты для оплаты и счет после оформления заявки.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Какие условия оплаты:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Оплата вносится в размере 100% предоплаты. Не разрешается рассрочка и оплата частями.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли получить счет на оплату:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Счет предоставляется на шаге оплаты после регистрации заявки.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Как можно сделать платеж:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Платеж можно сделать любым электронным способом, включая пластиковые карты. А также оплатить по счету как юридическое лицо.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Могут ли мне отказать в участии:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, могут. В случае, если участник не прошел отбор по ряду критериев.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Когда в следующий раз планируется мероприятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            У нас нет точных запланированных дат следующего потока.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли купить каждое занятие по отдельности:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Нет, покупка возможно только мероприятия целиком, которое состоит из четырех занятий.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли встретиться с Александром заранее до участия или задать ему вопросы заранее:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Встречи заранее не возможны. Также как и ответы заранее на Ваши вопросы. В процессе проведения занятий Вы сможете задать любые интересующие Вас вопросы и Александр примет решение об их рассмотрении.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Есть  ли скидки:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            При покупке 3 и более билетов тарифа "Интенсив + Разбор" от одной компании предоставляется скидка 30%. Обращайтесь к менеджеру за скидкой после регистрации заявки. Скидка распространяется на партнеров и руководителей компании. Скидка действует только для вышеуказанного тарифа.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Где можно скачать договор:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            <a href="javascript:void(0);">Договор-оферты</a> на оказание услуг по проведению мероприятий можно скачать по <a href="javascript:void(0);">ссылке</a>
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

    @component('components.footer') @endcomponent
@endsection
