@extends('pages.layout')

@section('title', 'Алгоритмы Общая')

@section('content')
    @component('components.header', [
            'auth' => true,
            'firstLevel' => true,
            'section' => 'work',
            'secondLevel' => [
                ['name' => 'Алгоритмы', 'active' => true],
                ['name' => 'Мероприятия'],
                ['name' => 'Анкета'],
            ],
        ])
    @endcomponent

    @component('blocks.banner-work-subscribe') @endcomponent

    <section class="section">
        <div class="container">
            <h1 class="-text-center">Алгоритмы работы</h1>
        </div>

        <div class="container">
            <div data-tabbar>
                @component('components.tabbar', [
                    'centered' => true,
                    'tabs' => [
                        ['label' => 'Развитие'],
                        ['label' => 'Привлечение клиентов'],
                        ['label' => 'Продажи'],
                        ['label' => 'Продукт'],
                        ['label' => 'Управление'],
                        ['label' => 'Персонал'],
                        ['label' => 'Финансы'],
                        ['label' => 'Безопасность'],
                    ],
                    'class' => '-mb-40',
                ])
                @endcomponent

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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

                    <div class="-text-center -mt-30 -sm-mt-60">
                        <a href="javascript:void(0);" class="button --blue --invert --large -width-100ps -xs-width-auto">
                            <span class="-xs-d-none">Все видео по курсу</span>
                            <span class="-d-none -xs-d-inline">Все алгоритмы по направлению</span>
                        </a>
                    </div>
                </div>

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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

                <div class="hidden" data-tabbar-page>
                    <div class="algorithm-card-grid">
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
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="h3 --large -d-flex -wrap -justify-content-center -sm-justify-content-start -align-items-end">
                <span class="-mr-15 -mb-10">Другие разделы</span>
                <img class="-mb-10" src="/dist/img/logos/a2-work.svg" width="180" alt="A2LIFE Работа">
            </h2>

            <ul class="section-bottom-links">
                <li>
                    <a href="javascript:void(0);">
                        <span>Развитие</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <span>Управление</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <span>Продукт</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <span>Продажи</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <span>Финансы</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <span>Безопасность</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);">
                        <span>Привлечение клиентов</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    @component('blocks.banner-strong-solutions') @endcomponent

    @component('blocks.banner-strong-solutions-v2', [
        'class' => 'hidden',
    ])
    @endcomponent

    <section class="section">
        <div class="container">
            <div class="slider --edge-to-edge" data-slider>
                <div class="slider__heading">
                    <h2 class="h3 --large slider__title">Интересные алгоритмы:</h2>

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

    <section class="section --last" data-customizable-block='{ "id": "section-banners-with-desc", "name": "Баннеры разделов с описанием" }'>
        <div class="container">
            <div class="grid">
                <div class="grid__cell --xsm-6 --md-4 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'work',
                        'descriptions' => true,
                        'colored' => true,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --md-4 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'person',
                        'descriptions' => true,
                        'colored' => true,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --md-4 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'health',
                        'descriptions' => true,
                        'colored' => true,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --xsm-6 --md-4 --lg-3">
                    @component('components.section-banner', [
                        'banner' => 'family',
                        'descriptions' => true,
                        'colored' => true,
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

    @component('components.footer') @endcomponent
@endsection
