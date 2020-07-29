@extends('pages.layout')

@section('title', 'Карточки алгоритмов')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Карточки алгоритмов</h1>
        </div>

        <div class="container">
            <div class="slider" data-slider>
                <div class="slider__heading">
                    <h3 class="slider__title -color-indigo-80">В слайдере</h3>

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
                                ],
                                'title' => 'Как быстро нанимать сотрудников',
                                'soon' => true,
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

        <div class="container">
            <div class="slider --edge-to-edge" data-slider>
                <div class="slider__heading">
                    <h3 class="slider__title -color-indigo-80">Слайдер от края до края</h3>

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
                                ],
                                'title' => 'Как быстро нанимать сотрудников',
                                'soon' => true,
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

        <div class="container">
            <h3 class="-color-indigo-80">Полный вариант</h3>

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

        <div class="container">
            <h3 class="-color-indigo-80">Без иконок</h3>

            <div class="algorithm-card-grid">
                @component('components.algorithm-card', [
                    'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                    'details' => [
                        'course' => 'Персонал',
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
                    ],
                    'title' => 'Как проводить собеседования',
                    'desc' => 'Этот алгоритм собеседования позволяет быстрее отбирать нужного кандидата',
                    'program' => ['Список вопросов для группового собеседования', 'Список вопросов для индивидуального собеседования'],
                ])
                @endcomponent
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Без описания</h3>

            <div class="algorithm-card-grid">
                @component('components.algorithm-card', [
                    'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                    'details' => [
                        'course' => 'Персонал',
                        'time' => '11 мин',
                        'files' => '2 pdf',
                    ],
                    'title' => 'Как быстро нанимать сотрудников',
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
                    'program' => ['Список вопросов для группового собеседования', 'Список вопросов для индивидуального собеседования'],
                ])
                @endcomponent
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Без пунктов программы</h3>

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
                ])
                @endcomponent
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Только заголовок</h3>

            <div class="algorithm-card-grid">
                @component('components.algorithm-card', [
                    'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                    'details' => [
                        'course' => 'Персонал',
                    ],
                    'title' => 'Как быстро нанимать сотрудников',
                ])
                @endcomponent

                @component('components.algorithm-card', [
                    'image' => '/dist/img/algorithms/kak-provodit-sobesedovaniya.jpg',
                    'details' => [
                        'course' => 'Персонал',
                    ],
                    'title' => 'Как проводить собеседования',
                ])
                @endcomponent
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Недоступны</h3>

            <div class="algorithm-card-grid">
                @component('components.algorithm-card', [
                    'image' => '/dist/img/algorithms/kak-bystro-nanyat-sotrudnikov.jpg',
                    'details' => [
                        'course' => 'Персонал',
                    ],
                    'title' => 'Как быстро нанимать сотрудников',
                    'soon' => true,
                ])
                @endcomponent

                @component('components.algorithm-card', [
                    'image' => '/dist/img/algorithms/kak-provodit-sobesedovaniya.jpg',
                    'details' => [
                        'course' => 'Персонал',
                    ],
                    'title' => 'Как проводить собеседования',
                    'soon' => true,
                ])
                @endcomponent
            </div>
        </div>
    </section>
@endsection
