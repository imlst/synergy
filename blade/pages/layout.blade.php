<?
session_start(['cookie_lifetime' => 60 * 60 * 24 * 30]);

function withMTime($filePath)
{
    $filename = __DIR__ . '/../' . $filePath;
    file_exists($filename) ? $filemtime = filemtime($filename) : $filemtime = null;

    if ($filemtime) {
        return $filePath . '?v=' . $filemtime;
    } else {
        return null;
    }
}

$navigation = [
    [
        'title' => 'Базовые элементы',
        'items' => [
            [
                'link' => '/ui/typography',
                'title' => 'Typography',
            ],
            [
                'link' => '/ui/logo',
                'title' => 'Logo',
            ],
        ]
    ],
    [
        'title' => 'UI компоненты',
        'items' => [
            [
                'link' => '/ui/icon',
                'title' => 'Icon',
            ],
            [
                'link' => '/ui/grid',
                'title' => 'Grid',
            ],
            [
                'link' => '/ui/tag',
                'title' => 'Tag',
            ],
            [
                'link' => '/ui/button',
                'title' => 'Button',
            ],
            [
                'link' => '/ui/input',
                'title' => 'Input',
            ],
//            [
//                'link' => '/ui/number-picker',
//                'title' => 'Выбор количества',
//            ],
//            [
//                'link' => '/ui/select',
//                'title' => 'Селекты',
//            ],
//            [
//                'link' => '/ui/radio-checkbox',
//                'title' => 'Radio & чекбоксы',
//            ],
            [
                'link' => '/ui/pagination',
                'title' => 'Pagination',
            ],
            [
                'link' => '/ui/dropdown',
                'title' => 'Dropdown',
            ],
//            [
//                'link' => '/ui/tabbar',
//                'title' => 'Вкладки',
//            ],
//            [
//                'link' => '/ui/accordion',
//                'title' => 'Аккордеон',
//            ],
//            [
//                'link' => '/ui/notification',
//                'title' => 'Уведомления',
//            ],
//            [
//                'link' => '/ui/modal',
//                'title' => 'Модальные окна',
//            ],
//            [
//                'link' => '/ui/breadcrumb',
//                'title' => 'Хлебные крошки',
//            ],
        ]
    ],
    [
        'title' => 'Модули',
        'items' => [
            [
                'title' => 'Спикеры',
                'link' => '/modules/speaker-card',
            ],
//            [
//                'title' => 'Header & Footer',
//                'link' => '/ui/layout',
//            ],
//            [
//                'title' => 'Карточки алгоритмов',
//                'link' => '/ui/algorithm-card',
//            ],
//            [
//                'title' => 'Баннеры',
//                'link' => '/ui/banners',
//            ],
        ],
    ],
//    [
//        'title' => 'Страницы',
//        'items' => [
//            [
//                'title' => 'Главная',
//                'link' => '/main',
//            ],
//            [
//                'title' => '«Сильные Решения»',
//                'link' => '/strong-solutions',
//            ],
//            [
//                'title' => '«Алгоритмы бизнеса»',
//                'link' => '/business-algorithms',
//            ],
//            [
//                'title' => 'Оплата',
//                'link' => '/checkout',
//            ],
//        ],
//    ],
//    [
//        'title' => 'Раздел Работа',
//        'items' => [
//            [
//                'title' => '117 факторов успеха вашего бизнеса',
//                'link' => '/work/success-factors',
//            ],
//            [
//                'title' => 'Видео вступление на анкету',
//                'link' => '/work/a-intro',
//            ],
//            [
//                'title' => 'Алгоритмы Общая',
//                'link' => '/work/entry-page',
//            ],
//            [
//                'title' => 'Алгоритм Индивидуальная',
//                'link' => '/work/algorithm-page',
//            ],
//        ],
//    ],
];

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
?>

<!DOCTYPE html>
<html lang="en" data-theme="" class="ui">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0">
        <meta name="format-detection" content="telephone=no">

        <title>@yield('title', $base_title)</title>

        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <link rel="stylesheet" type="text/css" href="<?= withMTime('/dist/styles/guide.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= withMTime('/dist/styles/styles.min.css') ?>">

        <script src="<?= withMTime('/dist/js/svg-icons.min.js') ?>"></script>
    </head>

    <body>
        <div class="guide {{ (($_SESSION['openBar'] ?? true) || $url === '/') ? '-open-bar' : '' }}" data-guide>
            <div class="guide__overlay" data-guide-overlay></div>

            <div class="guide__burger" data-guide-burger>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            @if(!preg_match('/\/ui/', $url) && $url !== '/')
                <div class="guide__customizable">
                    <span class="icon hidden" data-customizable-icon><svg><use xlink:href="#gear"></use></svg></span>

                    <div class="guide__customizable-dropdown" data-customizable-dropdown>
                        <ul class="guide__customizable-list" data-customizable-blocks>
                            <li>
                                <div class="-font-semibold -mb-15">Отображение блоков</div>
                            </li>

                            <!-- -->
                        </ul>
                    </div>
                </div>
            @endif

            <div class="guide__bar" data-guide-bar>
                <div class="loader">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <a href="/" class="guide__logo">
                    <img src="/dist/img/logos/logo-synergy-white.svg" width="240" alt="Synergy">
                </a>

                <div class="guide__nav">
                    @foreach($navigation as $navGroup)
                        <div class="guide__nav-block" data-guide-block>
                            <div class="guide__nav-block-name">
                                <span>{{ $navGroup['title'] }}</span>
                            </div>

                            <ul>
                                @foreach($navGroup['items'] as $navItem)
                                    @php($path = explode('?', $navItem['link'])[0])

                                    <li class="{{ $url === $path ? '-selected' : '' }}">
                                        <a href="{{ $navItem['link'] }}" data-guide-link>{{ $navItem['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="guide__content">
{{--                @if(!preg_match('/\/ui/', $url) && $url !== '/')--}}
{{--                    @component('components.header') @endcomponent--}}
{{--                @endif--}}

                @yield('content')

{{--                @if(!preg_match('/\/ui/', $url) && $url !== '/')--}}
{{--                    @component('components.footer') @endcomponent--}}
{{--                @endif--}}
            </div>
        </div>

        <div class="modal" id="subscribeModal" data-modal='{ "name": "subscribeModal", "maxWidth": 550 }'>
            <div class="modal__window" data-modal-window>
                <div class="modal__header">Email подписка</div>

                <div class="modal__close" data-modal-close>
                    <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
                </div>

{{--                <div class="modal__body">--}}
{{--                    <div id="subscribeForm">--}}
{{--                        <p class="-color-indigo-80">Заполните форму ниже, чтобы получать наши еженедельные письма</p>--}}

{{--                        <form class="form" action="" onsubmit="return false;">--}}
{{--                            <div class="grid --mobile-gutters-10">--}}
{{--                                <div class="grid__cell --xsm-6">--}}
{{--                                    <label class="form__label" for="subscribeName">Имя</label>--}}

{{--                                    @component('components.input', [--}}
{{--                                        'placeholder' => 'Введите ваше имя',--}}
{{--                                        'id' => 'subscribeName',--}}
{{--                                        'name' => 'subscribeName',--}}
{{--                                        'class' => '-width-100ps',--}}
{{--                                    ])--}}
{{--                                    @endcomponent--}}
{{--                                </div>--}}

{{--                                <div class="grid__cell --xsm-6">--}}
{{--                                    <label class="form__label" for="subscribePhone">Телефон</label>--}}

{{--                                    @component('components.input', [--}}
{{--                                        'placeholder' => 'Номер телефона',--}}
{{--                                        'id' => 'subscribePhone',--}}
{{--                                        'name' => 'subscribePhone',--}}
{{--                                        'class' => '-width-100ps',--}}
{{--                                    ])--}}
{{--                                    @endcomponent--}}
{{--                                </div>--}}

{{--                                <div class="grid__cell">--}}
{{--                                    <label class="form__label" for="subscribeEmail">Email *</label>--}}

{{--                                    @component('components.input', [--}}
{{--                                        'placeholder' => 'Укажите ваш email',--}}
{{--                                        'id' => 'subscribeEmail',--}}
{{--                                        'name' => 'subscribeEmail',--}}
{{--                                        'iconStatus' => true,--}}
{{--                                        'errorMessage' => 'Обязательное поле',--}}
{{--                                        'class' => '-width-100ps',--}}
{{--                                    ])--}}
{{--                                    @endcomponent--}}
{{--                                </div>--}}

{{--                                <div class="grid__cell">--}}
{{--                                    <label class="form__label">Направление</label>--}}

{{--                                    <div class="select select__field -width-100ps" data-select='{ "placeholder": "Выберите направление" }'>--}}
{{--                                        <select name="subscribeCourse">--}}
{{--                                            <option disabled hidden>Выберите направление</option>--}}
{{--                                            <option>Работа</option>--}}
{{--                                            <option>Личность</option>--}}
{{--                                            <option>Здоровье</option>--}}
{{--                                            <option>Семья</option>--}}
{{--                                        </select>--}}

{{--                                        <div class="select__value" data-select-value></div>--}}

{{--                                        <div class="select__arrow">--}}
{{--                                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="grid__cell">--}}
{{--                                    <label class="checkbox --small-text">--}}
{{--                                        <input type="checkbox" id="subscribeTerms" name="subscribeTerms" checked>--}}

{{--                                        <span class="checkbox__view">--}}
{{--                                            <span class="checkbox__marker"></span>--}}
{{--                                            <span class="checkbox__label">Даю согласие на обработку <a href="javascript:void(0);">персональных данных</a> и соглашаюсь с--}}
{{--                                                <a href="javascript:void(0);">политикой конфиденциальности</a></span>--}}
{{--                                        </span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}

{{--                                <div class="grid__cell">--}}
{{--                                    <button onclick="subscribe();" class="button -width-100ps -xsm-width-auto">--}}
{{--                                        <span>Подписаться</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}

{{--                    <div id="subscribeSuccess" class="hidden -text-center -py-20">--}}
{{--                        <img src="/dist/img/illustrations/success-icon.svg" class="-mb-20 -sm-mb-40 -width-60px -sm-width-100px" alt="">--}}

{{--                        <div class="h2 --large">Подписка оформлена</div>--}}

{{--                        <p class="-color-indigo-80">Теперь вы будете получать наши рассылки</p>--}}

{{--                        <div class="-sm-mt-60">--}}
{{--                            <a href="javascript:void(0);" class="button --secondary" data-modal-close>--}}
{{--                                <span>Вернуться на главную</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

        <script>
        // function subscribe() {
        //     let errors = [];
        //
        //     let modal = document.querySelector('#subscribeModal');
        //     let modalHeader = modal.querySelector('.modal__header');
        //
        //     let form = modal.querySelector('#subscribeForm');
        //     let email = form.querySelector('#subscribeEmail');
        //     let terms = form.querySelector('#subscribeTerms');
        //     let successMessage = modal.querySelector('#subscribeSuccess');
        //
        //     if (email.value !== '') {
        //         email.parentNode.classList.remove('--error');
        //     } else {
        //         email.parentNode.classList.add('--error');
        //         errors.push('email');
        //     }
        //
        //     if (!terms.checked) {
        //         errors.push('terms');
        //     }
        //
        //     if (errors.length === 0) {
        //         modalHeader.classList.add('hidden');
        //         form.classList.add('hidden');
        //         successMessage.classList.remove('hidden');
        //     }
        // }
        </script>

{{--        <div class="video-modal" data-video-modal>--}}
{{--            <div class="video-modal__window">--}}
{{--                <div class="video-modal__controls">--}}
{{--                    <span class="icon" data-video-modal-close title="Закрыть"><svg><use xlink:href="#cross"></use></svg></span>--}}
{{--                </div>--}}

{{--                <div class="video-modal__body">--}}
{{--                    <div class="video-modal__16-9">--}}
{{--                        <div id="video-frame" data-video-modal-frame></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- region FOR GUIDE -->
        <script src="<?= withMTime('/dist/js/guide.min.js') ?>"></script>
        <script src="/dist/js/libs/highlightjs-line-numbers.min.js"></script>
        <script>hljs.initLineNumbersOnLoad();</script>
        <!-- endregion -->

        <script src="<?= withMTime('/dist/js/scripts.min.js') ?>"></script>
    </body>
</html>
