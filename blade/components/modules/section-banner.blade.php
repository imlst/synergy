@if(!empty($banner))
    @switch ($banner)
        @case ('work')
            <div class="section-banner{{ isset($colored) && $colored ? ' --blue' : '' }}">
                @if(isset($colored) && $colored)
                    <img class="section-banner__icon" src="/dist/img/illustrations/work-icon-white.svg" alt="">
                @else
                    <img class="section-banner__icon" src="/dist/img/illustrations/work-icon.svg" alt="">
                @endif

                <div class="section-banner__title">Работа</div>
                <div class="section-banner__caption">труд в радости</div>

                @if(isset($descriptions) && $descriptions)
                    <div class="section-banner__desc">В бизнесе нет универсальных рецептов. Но есть рабочие алгоритмы.</div>
                @endif

                <div class="section-banner__button">
                    <a href="javascript:void(0);" class="button --invert --small{{ isset($colored) && $colored ? ' --white' : ' --secondary' }}">
                        <span>Перейти в раздел</span>
                        <span class="icon --small"><svg><use xlink:href="#arrow"></use></svg></span>
                    </a>
                </div>
            </div>
        @break

        @case ('person')
            <div class="section-banner{{ isset($colored) && $colored ? ' --purple' : '' }}">
                @if(isset($colored) && $colored)
                    <img class="section-banner__icon" src="/dist/img/illustrations/person-icon-white.svg" alt="">
                @else
                    <img class="section-banner__icon" src="/dist/img/illustrations/person-icon.svg" alt="">
                @endif

                <div class="section-banner__title">Личность</div>
                <div class="section-banner__caption">смелость быть собой</div>

                @if(isset($descriptions) && $descriptions)
                    <div class="section-banner__desc">Растите духовно.<br>Старайтесь радоваться за людей, а не завидовать, и вы будете счастливы.</div>
                @endif

                <div class="section-banner__button">
                    <a href="javascript:void(0);" class="button --invert --small{{ isset($colored) && $colored ? ' --white' : ' --secondary' }}">
                        <span>Перейти в раздел</span>
                        <span class="icon --small"><svg><use xlink:href="#arrow"></use></svg></span>
                    </a>
                </div>
            </div>
        @break

        @case ('health')
            <div class="section-banner{{ isset($colored) && $colored ? ' --green' : '' }}">
                @if(isset($colored) && $colored)
                    <img class="section-banner__icon" src="/dist/img/illustrations/health-icon-white.svg" alt="">
                @else
                    <img class="section-banner__icon" src="/dist/img/illustrations/health-icon.svg" alt="">
                @endif

                <div class="section-banner__title">Здоровье</div>
                <div class="section-banner__caption">понимание гармонии</div>

                @if(isset($descriptions) && $descriptions)
                    <div class="section-banner__desc">Чтобы наслаждаться бесконечным здоровьем, надо работать над собой.</div>
                @endif

                <div class="section-banner__button">
                    <div class="section-banner__soon">
                        <span>Скоро</span>
                    </div>
                </div>
            </div>
        @break

        @case ('family')
            <div class="section-banner{{ isset($colored) && $colored ? ' --pink' : '' }}">
                @if(isset($colored) && $colored)
                    <img class="section-banner__icon" src="/dist/img/illustrations/family-icon-white.svg" alt="">
                @else
                    <img class="section-banner__icon" src="/dist/img/illustrations/family-icon.svg" alt="">
                @endif

                <div class="section-banner__title">Семья</div>
                <div class="section-banner__caption">путь к любви</div>

                @if(isset($descriptions) && $descriptions)
                    <div class="section-banner__desc">Не ищите свою половинку.<br>Ищите такого же целого, как Вы сами.</div>
                @endif

                <div class="section-banner__button">
                    <a href="javascript:void(0);" class="button --invert --small{{ isset($colored) && $colored ? ' --white' : ' --secondary' }}">
                        <span>Перейти в раздел</span>
                        <span class="icon --small"><svg><use xlink:href="#arrow"></use></svg></span>
                    </a>
                </div>
            </div>
        @break
    @endswitch
@endif
