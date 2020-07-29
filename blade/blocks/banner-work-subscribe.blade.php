<div class="banner-work-subscribe{{ !empty($class) ? ' ' . $class : '' }}" data-customizable-block='{ "id": "banner-work-subscribe", "name": "Подписка на алгоритмы Работы" }'>
    <div class="banner-work-subscribe__skew-bg"></div>
    <div class="banner-work-subscribe__pattern"></div>

    <div class="banner-work-subscribe__container">
        <div class="banner-work-subscribe__left">
            <img class="banner-work-subscribe__logo" src="/dist/img/logos/a2-work-white.svg" alt="">
            <div class="h1 --large">Труд в радость</div>
            <div>В работе нет универсальных рецептов.<br>Но есть надежные алгоритмы.</div>
        </div>

        <div>
            <div class="banner-work-subscribe__form">
                <div class="grid --gutters-10">
                    <div class="grid__cell">
                        <div class="banner-work-subscribe__caption">Подпишись на новые алгоритмы</div>
                    </div>
                </div>

                <div class="grid --gutters-10">
                    <div class="grid__cell --lg-by-content">
                        @component('components.input', [
                            'iconStatus' => true,
                            'placeholder' => 'Ваш email',
                            'errorMessage' => 'Необходимо указать email',
                            ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --lg-by-content -d-none -lg-d-block">
                        <button class="button --white --invert -width-100ps">Отправить</button>
                    </div>
                </div>

                <div class="grid --gutters-10">
                    <div class="grid__cell">
                        <label class="checkbox --small-text">
                            <input type="checkbox" checked>

                            <span class="checkbox__view">
                                <span class="checkbox__marker"></span>
                                <span class="checkbox__label">Даю согласие на обработку <a href="javascript:void(0);">персональных данных</a> и соглашаюсь с
                                    <a href="javascript:void(0);">политикой конфиденциальности</a></span>
                            </span>
                        </label>
                    </div>

                    <div class="grid__cell -lg-d-none">
                        <button class="button --white --invert -width-100ps -md-width-auto">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
