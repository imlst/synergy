@if(isset($compact) && $compact)
    <footer class="footer{{ !empty($class) ? ' ' . $class : '' }}" data-customizable-block='{ "id": "{{ !empty($customizableID) ? $customizableID : 'footer-compact' }}", "name": "{{ !empty($customizableName) ? $customizableName : 'Компактный Footer' }}", "group": "footer" }'>
        <div class="footer__bottom">
            <div class="footer__container">
                <div class="grid -align-items-center">
                    <div class="grid__cell --sm-3 --lg-2">
                        <a href="javascript:void(0);" class="footer__logo">
                            <img src="/dist/img/logos/a2-white.svg" alt="A2LIFE">
                        </a>
                    </div>

                    <div class="grid__cell --sm-5 --lg-4">
                        <a href="javascript:void(0);">Политика обработки персональных данных</a>
                    </div>

                    <div class="grid__cell --sm-by-content -sm-ml-auto">
                        <div>Copyright © 2019 A2.LIFE<br>Все права защищены</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@else
    <footer class="footer{{ !empty($class) ? ' ' . $class : '' }}" data-customizable-block='{ "id": "{{ !empty($customizableID) ? $customizableID : 'footer' }}", "name": "{{ !empty($customizableName) ? $customizableName : 'Footer' }}", "group": "footer" }'>
        <div class="footer__container">
            <div class="grid">
                <div class="grid__cell --sm-5 --lg-4">
                    <div class="grid">
                        <div class="grid__cell">
                            <a href="tel:+74951810005" class="footer__contacts">+7 (495) 181 00 05</a>
                            <div>Контактный центр</div>
                        </div>

                        <div class="grid__cell">
                            <a href="mailto:info@a2.life" class="footer__contacts">info@a2.life</a>
                            <div>Почта</div>
                        </div>

                        <div class="grid__cell">
                            <div class="footer__contacts">г.Москва, ул. Ленинская слобода д.26 стр.5</div>
                            <div>Адрес</div>
                        </div>
                    </div>
                </div>

                @if(isset($about) && $about)
                    <div class="grid__cell --sm-4 --lg-3">
                        <div class="footer__list-title">О компании</div>

                        <ul class="footer__sections-list">
                            <li>
                                <a href="javascript:void(0);">История и миссия</a>
                            </li>

                            <li>
                                <a href="javascript:void(0);">Контакты</a>
                            </li>

                            <li>
                                <a href="javascript:void(0);">Работа в компании</a>
                            </li>

                            <li>
                                <a href="javascript:void(0);">Новости</a>
                            </li>

                            <li>
                                <a href="javascript:void(0);">FAQ</a>
                            </li>
                        </ul>
                    </div>
                @endif

                <div class="grid__cell --sm-3 --lg-2">
                    <div class="footer__list-title">Продукты</div>

                    <ul class="footer__sections-list">
                        <li>
                            <a href="javascript:void(0);">Работа</a>
                        </li>

                        <li>
                            <a href="javascript:void(0);">Здоровье</a>
                        </li>

                        <li>
                            <a href="javascript:void(0);">Семья</a>
                        </li>

                        <li>
                            <a href="javascript:void(0);">Личность</a>
                        </li>
                    </ul>
                </div>

                <div class="grid__cell --lg-3 footer__fluid-cell">
                    <div class="grid -align-items-center">
                        <div class="grid__cell --sm-5 --lg-12">
                            <a href="javascript:void(0);" class="footer__logo">
                                <img src="/dist/img/logos/a2-white.svg" alt="A2LIFE">
                            </a>
                        </div>

                        <div class="grid__cell --sm-4 --lg-12">
                            <ul class="footer__social">
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

                        @if(isset($auth) && $auth)
                            <div class="grid__cell --sm-3 --lg-12">
                                <div class="-d-flex">
                                    <a href="javascript:void(0);" class="button --invert -sm-ml-auto">Войти</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__container">
                <div class="grid -align-items-center">
                    <div class="grid__cell --sm-5 --lg-4">
                        <a href="javascript:void(0);">Политика обработки персональных данных</a>
                    </div>

                    <div class="grid__cell --sm-3">
                        <a href="javascript:void(0);" data-modal-show="subscribeModal">Email подписка</a>
                    </div>

                    <div class="grid__cell --sm-by-content -sm-ml-auto">
                        <div>Copyright © 2019 A2.LIFE<br>Все права защищены</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endif
