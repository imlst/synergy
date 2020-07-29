<?
    $sections = ['work', 'health', 'family', 'person'];
?>

<header class="header" data-header>
    <div class="header__first-level">
        <div class="header__container">
            <a href="javascript:void(0);" class="header__logo">
                @if(!empty($logo) && in_array($logo, $sections))
                    @switch ($logo)
                        @case ('work')
                            <img src="/dist/img/logos/a2-work-white.svg" alt="A2LIFE">
                        @break
                    @endswitch
                @else
                    <img src="/dist/img/logos/a2-white.svg" alt="A2LIFE">
                @endif
            </a>

            @if(isset($firstLevel) && $firstLevel)
                <div class="header__menu">
                    <ul>
                        <li class="{{ !empty($section) && in_array($section, $sections) ? 'active' : '' }}">
                            @if(!empty($section) && in_array($section, $sections))
                                @switch ($section)
                                    @case ('work')
                                        <a href="javascript:void(0);">
                                            <img src="/dist/img/illustrations/work-icon-white.svg" class="header__menu-icon" width="30" alt="">
                                            <span>Работа</span>
                                            <span class="icon header__dropdown-arrow"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                                        </a>
                                    @break

                                    @case ('health')
                                        <a href="javascript:void(0);">
                                            <img src="/dist/img/illustrations/health-icon-white.svg" class="header__menu-icon" width="30" alt="">
                                            <span>Здоровье</span>
                                            <span class="icon header__dropdown-arrow"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                                        </a>
                                    @break

                                    @case ('family')
                                        <a href="javascript:void(0);">
                                            <img src="/dist/img/illustrations/family-icon-white.svg" class="header__menu-icon" width="30" alt="">
                                            <span>Семья</span>
                                            <span class="icon header__dropdown-arrow"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                                        </a>
                                    @break

                                    @case ('person')
                                        <a href="javascript:void(0);">
                                            <img src="/dist/img/illustrations/person-icon-white.svg" class="header__menu-icon" width="30" alt="">
                                            <span>Личность</span>
                                            <span class="icon header__dropdown-arrow"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                                        </a>
                                    @break
                                @endswitch
                            @else
                                <a href="javascript:void(0);">
                                    <span>Продукты</span>
                                    <span class="icon header__dropdown-arrow"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                                </a>
                            @endif

                            <div class="header__menu-dropdown">
                                <ul class="header__sections-list">
                                    <li class="{{ !empty($section) && $section === 'work' ? 'active' : '' }}">
                                        <a href="javascript:void(0);">
                                            <span>Работа</span>
                                            <img src="/dist/img/illustrations/work-icon.svg" class="header__menu-icon" width="30" alt="">
                                        </a>
                                    </li>

                                    <li class="{{ !empty($section) && $section === 'health' ? 'active' : '' }}">
                                        <a href="javascript:void(0);">
                                            <span>Здоровье</span>
                                            <img src="/dist/img/illustrations/health-icon.svg" class="header__menu-icon" width="30" alt="">
                                        </a>
                                    </li>

                                    <li class="{{ !empty($section) && $section === 'family' ? 'active' : '' }}">
                                        <a href="javascript:void(0);">
                                            <span>Семья</span>
                                            <img src="/dist/img/illustrations/family-icon.svg" class="header__menu-icon" width="30" alt="">
                                        </a>
                                    </li>

                                    <li class="{{ !empty($section) && $section === 'person' ? 'active' : '' }}">
                                        <a href="javascript:void(0);">
                                            <span>Личность</span>
                                            <img src="/dist/img/illustrations/person-icon.svg" class="header__menu-icon" width="30" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="javascript:void(0);">
                                <span>О проекте</span>
                            </a>
                        </li>
                    </ul>
                </div>
            @endif

            <div class="header__right-block">
                <a href="tel:+74951810005" class="header__phone">+7 (495) 181 00 05</a>

                @if(isset($auth) && $auth)
                    <a href="javascript:void(0);" class="button --white --invert header__login">Вход</a>
                @elseif (isset($authorized) && $authorized)
                    <a href="javascript:void(0);" class="header__profile">
                        <div class="header__avatar" style="background-image: url('https://avatars.dicebear.com/v2/male/person1.svg')"></div>
                        <div>Мистер</div>
                    </a>
                @endif

                @if(isset($auth) && $auth || isset($authorized) && $authorized || isset($firstLevel) && $firstLevel)
                    <div class="header__burger-menu" data-header-mobile-menu-toggle>
                        <div class="header__burger-menu-open">
                            <span>Меню</span>
                            <span class="icon"><svg><use xlink:href="#burger"></use></svg></span>
                        </div>

                        <div class="header__burger-menu-close">
                            <span>Закрыть</span>
                            <span class="icon -color-error"><svg><use xlink:href="#cross"></use></svg></span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if(!empty($secondLevel) && is_array($secondLevel))
        <div class="header__second-level">
            <div class="header__container">
                <div class="header__menu --scrollable">
                    <ul>
                        @foreach ($secondLevel as $menuItem)
                            <li class="{{ isset($menuItem['active']) && $menuItem['active'] ? 'active' : '' }}">
                                <a href="javascript:void(0);">{{ !empty($menuItem['name']) ? $menuItem['name'] : '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if(!empty($thirdLevel) && is_array($thirdLevel))
        <div class="header__third-level">
            <div class="header__container">
                <div class="header__menu --scrollable">
                    <ul>
                        @foreach ($thirdLevel as $menuItem)
                            <li class="{{ isset($menuItem['active']) && $menuItem['active'] ? 'active' : '' }}">
                                <a href="javascript:void(0);">{{ !empty($menuItem['name']) ? $menuItem['name'] : '' }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if(isset($auth) && $auth || isset($authorized) && $authorized || isset($firstLevel) && $firstLevel)
        <div class="header__mobile-menu">
            @if(isset($firstLevel) && $firstLevel)
                <div class="header__menu --scrollable">
                    <ul>
                        @if(!empty($section) && $section === 'work')
                            <li class="active">
                                <a href="javascript:void(0);">
                                    <img src="/dist/img/illustrations/work-icon.svg" class="header__menu-icon" width="30" alt="">
                                    <span>Работа</span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="javascript:void(0);">Работа</a>
                            </li>
                        @endif

                        @if(!empty($section) && $section === 'health')
                            <li class="active">
                                <a href="javascript:void(0);">
                                    <img src="/dist/img/illustrations/health-icon.svg" class="header__menu-icon" width="30" alt="">
                                    <span>Здоровье</span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="javascript:void(0);">Здоровье</a>
                            </li>
                        @endif

                        @if(!empty($section) && $section === 'family')
                            <li class="active">
                                <a href="javascript:void(0);">
                                    <img src="/dist/img/illustrations/family-icon.svg" class="header__menu-icon" width="30" alt="">
                                    <span>Семья</span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="javascript:void(0);">Семья</a>
                            </li>
                        @endif

                        @if(!empty($section) && $section === 'person')
                            <li class="active">
                                <a href="javascript:void(0);">
                                    <img src="/dist/img/illustrations/person-icon.svg" class="header__menu-icon" width="30" alt="">
                                    <span>Личность</span>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="javascript:void(0);">Личность</a>
                            </li>
                        @endif
                    </ul>
                </div>
            @endif

            @if(!empty($thirdLevel) && is_array($thirdLevel))
                <ul class="header__sections-list">
                    @foreach ($thirdLevel as $menuItem)
                        <li class="{{ isset($menuItem['active']) && $menuItem['active'] ? 'active' : '' }}">
                            <a href="javascript:void(0);">{{ !empty($menuItem['name']) ? $menuItem['name'] : '' }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif

            @if(isset($authorized) && $authorized)
                <div class="-pt-30 -pb-40">
                    <div class="grid -align-items-center">
                        <div class="grid__cell --xsm-by-content">
                            <a href="javascript:void(0);" class="button --large -width-100ps">Подключить PRO</a>
                        </div>

                        <div class="grid__cell --xsm-by-content">
                            <div class="-text-center">
                                <a href="javascript:void(0);">Подробнее о PRO версии</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endif
</header>
