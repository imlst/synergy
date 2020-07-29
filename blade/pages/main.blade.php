@extends('pages.layout')

@section('title', 'Главная')

@section('content')
    @component('components.header', [
        'firstLevel' => true,
        'section' => 'work',
    ])
    @endcomponent

    <section class="main-first-screen">
        <div class="container -text-center">
            <h1 class="--large -text-uppercase main-first-screen__title -mx-auto">Понимание приносит <strong>радость</strong></h1>

            <div class="main-first-screen__desc">
                <span>Присоединяйтесь к сообществу знаний</span>
                <img src="/dist/img/logos/a2-indigo-80.svg" width="130" alt="A2LIFE">
            </div>

            <a href="javascript:void(0);" class="button --blue --large --shadowed -mt-60" data-modal-show="subscribeModal">Присоединиться</a>
        </div>
    </section>

    <section class="section hidden" data-customizable-block='{ "id": "algorithms-slider-section", "name": "Лента «Другие алгоритмы»" }'>
        <div class="container">
            <div class="slider --edge-to-edge" data-slider>
                <div class="slider__heading">
                    <h2 class="h3 --large slider__title">Алгоритмы:</h2>

                    <div class="slider__controls">
                        <a href="javascript:void(0);" class="button --blue --icon --large disabled" data-slider-prev>
                            <span class="icon --h-flip"><svg><use xlink:href="#arrowhead"></use></svg></span>
                        </a>

                        <a href="javascript:void(0);" class="button --blue --icon --large disabled" data-slider-next>
                            <span class="icon"><svg><use xlink:href="#arrowhead"></use></svg></span>
                        </a>
                    </div>
                </div>

                <div class="slider__wrapper" data-slider-wrapper>
                    <div class="slider__scroller" data-slider-scroller>
                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '11 мин',
                                    'files' => '2 pdf',
                                ],
                                'title' => 'Как быстро нанимать сотрудников',
                                'desc' => 'Используя этот алгоритм, можно нанять сотрудника за 2 недели',
                                'program' => ['Список лучших HR сайтов', 'Скрипт приглашения на собеседование'],
                            ])
                            @endcomponent
                        </div>

                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-provodit-sobesedovaniya.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '24 мин',
                                    'files' => '1 pdf',
                                ],
                                'title' => 'Как проводить собеседования',
                                'desc' => 'Этот алгоритм собеседования позволяет быстрее отбирать нужного кандидата',
                                'program' => ['Список вопросов для группового собеседования', 'Список вопросов для индивидуального собеседования'],
                            ])
                            @endcomponent
                        </div>

                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '11 мин',
                                    'files' => '2 pdf',
                                ],
                                'title' => 'Как быстро нанимать сотрудников',
                                'desc' => 'Используя этот алгоритм, можно нанять сотрудника за 2 недели',
                                'program' => ['Список лучших HR сайтов', 'Скрипт приглашения на собеседование'],
                            ])
                            @endcomponent
                        </div>

                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-provodit-sobesedovaniya.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '24 мин',
                                    'files' => '1 pdf',
                                ],
                                'title' => 'Как проводить собеседования',
                                'desc' => 'Этот алгоритм собеседования позволяет быстрее отбирать нужного кандидата',
                                'program' => ['Список вопросов для группового собеседования', 'Список вопросов для индивидуального собеседования'],
                            ])
                            @endcomponent
                        </div>

                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '11 мин',
                                    'files' => '2 pdf',
                                ],
                                'title' => 'Как быстро нанимать сотрудников',
                                'desc' => 'Используя этот алгоритм, можно нанять сотрудника за 2 недели',
                                'program' => ['Список лучших HR сайтов', 'Скрипт приглашения на собеседование'],
                            ])
                            @endcomponent
                        </div>

                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-provodit-sobesedovaniya.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '24 мин',
                                    'files' => '1 pdf',
                                ],
                                'title' => 'Как проводить собеседования',
                                'desc' => 'Этот алгоритм собеседования позволяет быстрее отбирать нужного кандидата',
                                'program' => ['Список вопросов для группового собеседования', 'Список вопросов для индивидуального собеседования'],
                            ])
                            @endcomponent
                        </div>

                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '11 мин',
                                    'files' => '2 pdf',
                                ],
                                'title' => 'Как быстро нанимать сотрудников',
                                'desc' => 'Используя этот алгоритм, можно нанять сотрудника за 2 недели',
                                'program' => ['Список лучших HR сайтов', 'Скрипт приглашения на собеседование'],
                            ])
                            @endcomponent
                        </div>

                        <div class="slider__slide" data-slider-slide>
                            @component('components.algorithm-card', [
                                'image' => '/dist/img/algorithms/kak-provodit-sobesedovaniya.jpg',
                                'details' => [
                                    'course' => 'Персонал',
                                    'time' => '24 мин',
                                    'files' => '1 pdf',
                                ],
                                'title' => 'Как проводить собеседования',
                                'desc' => 'Этот алгоритм собеседования позволяет быстрее отбирать нужного кандидата',
                                'program' => ['Список вопросов для группового собеседования', 'Список вопросов для индивидуального собеседования'],
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @component('blocks.banner-strong-solutions', [
        'class' => 'hidden',
    ])
    @endcomponent

    @component('blocks.banner-strong-solutions-v2', [
        'class' => 'hidden',
    ])
    @endcomponent

    <section class="main-section-banners hidden" data-customizable-block='{ "id": "section-banners", "name": "Баннеры разделов", "group": "section-banners" }'>
        <div class="main-section-banners__container">
            <div class="grid">
                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'work',
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'person',
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'health',
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'family',
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

    <section class="main-section-banners" data-customizable-block='{ "id": "section-banners-with-desc", "name": "Баннеры разделов с описанием", "group": "section-banners" }'>
        <div class="main-section-banners__container">
            <div class="grid">
                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'work',
                        'descriptions' => true,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'person',
                        'descriptions' => true,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'health',
                        'descriptions' => true,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'family',
                        'descriptions' => true,
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

    @component('components.footer', [
        'customizableID' => 'footer-simple',
    ])
    @endcomponent

    @component('components.footer', [
        'auth' => true,
        'about' => true,
        'class' => 'hidden',
        'customizableID' => 'footer-full',
        'customizableName' => 'Footer полный',
    ])
    @endcomponent
@endsection
