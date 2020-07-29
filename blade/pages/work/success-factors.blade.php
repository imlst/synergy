@extends('pages.layout')

@section('title', '117 факторов успеха вашего бизнеса')

@section('content')
    @component('components.header', [
        'logo' => 'work',
        'secondLevel' => [
            ['name' => 'Мероприятия'],
            ['name' => 'Анкета'],
        ],
    ])
    @endcomponent

    <section class="success-factors-screen">
        <div class="container success-factors-screen__container">
            <h1 class="--large success-factors-screen__title"><span>117</span> факторов <span>успеха</span> вашего бизнеса</h1>
            <p class="success-factors-screen__desc">Скачайте этот чек-лист и проверьте насколько хорошо вы понимаете свой бизнес</p>

            <img class="success-factors-screen__check-list -md-d-none" src="/dist/img/pages/success-factors/check-list.png" alt="">
            <img class="success-factors-screen__check-list -d-none -md-d-block" src="/dist/img/pages/success-factors/check-list.gif?v2" alt="">

            <div class="grid">
                <div class="grid__cell --sm-by-content">
                    <div class="-xsm-max-width-300px">
                        @component('components.input', [
                            'placeholder' => 'Введите ваш email',
                            'name' => 'subscribeEmail',
                            'id' => 'subscribeEmail',
                            'large' => true,
                            'iconStatus' => true,
                            'errorMessage' => 'Обязательное поле',
                            'class' => '-width-100ps',
                        ])
                        @endcomponent

                        <div class="-mt-15">
                            <div class="-font-size-12px -color-indigo-35">Нажимая на кнопку, я соглашаюсь на <a href="javascript:void(0);" class="-color-indigo-35">обработку данных</a> и с <a href="javascript:void(0);" class="-color-indigo-35">политикой конфиденциальности</a></div>
                        </div>
                    </div>
                </div>

                <div class="grid__cell --xsm-by-content">
                    <a href="/work/success-factors-outro" class="button --large --shadowed -width-100ps -xs-width-auto">
                        <img class="button__file" src="/dist/img/file-types/pdf.svg" alt="">
                        <span>Получить чек-лист</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="-overflow-hidden">
                <div class="grid --gutters-20 -mt-0">
                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/growth.svg" width="24" alt="">
                                <h4>Развитие</h4>
                            </div>

                            <div>10 факторов успеха</div>
                        </div>
                    </div>

                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/marketing.svg" width="26" alt="">
                                <h4>Маркетинг</h4>
                            </div>

                            <div>30 факторов успеха</div>
                        </div>
                    </div>

                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/staff.svg" width="17" alt="">
                                <h4>Персонал</h4>
                            </div>

                            <div>14 факторов успеха</div>
                        </div>
                    </div>

                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/finances.svg" width="24" alt="">
                                <h4>Финансы</h4>
                            </div>

                            <div>8 факторов успеха</div>
                        </div>
                    </div>

                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/management.svg" width="24" alt="">
                                <h4>Управление</h4>
                            </div>

                            <div>8 факторов успеха</div>
                        </div>
                    </div>

                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/sales.svg" width="24" alt="">
                                <h4>Продажи</h4>
                            </div>

                            <div>30 факторов успеха</div>
                        </div>
                    </div>

                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/product.svg" width="24" alt="">
                                <h4>Продукт</h4>
                            </div>

                            <div>9 факторов успеха</div>
                        </div>
                    </div>

                    <div class="grid__cell --xs-6 --sm-4 --md-3">
                        <div class="success-factors-screen__factor">
                            <div class="success-factors-screen__factor-caption">
                                <img src="/dist/img/success-factors-icons/security.svg" width="24" alt="">
                                <h4>Безопасность</h4>
                            </div>

                            <div>8 факторов успеха</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @component('components.footer', [
        'compact' => true,
    ])
    @endcomponent
@endsection
