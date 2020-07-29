@extends('pages.layout')

@section('title', 'Видео вступление на анкету')

@section('content')
    @component('components.header', [
        'logo' => 'work',
        'secondLevel' => [
            ['name' => 'Мероприятия'],
            ['name' => 'Анкета'],
        ],
    ])
    @endcomponent

    <section class="a-intro-screen">
        <div class="container">
            <h1 class="h2 --large -mb-10 -max-width-580px -mx-auto" data-customizable-block='{ "id": "a-intro-title", "name": "Основной Заголовок" }'>Что для вас сейчас самое важное в работе?</h1>
            <div class="a-intro-screen__desc" data-customizable-block='{ "id": "a-intro-desc", "name": "Дескриптор" }'>Разработаем алгоритмы под ваши запросы</div>

            <div class="embed-video --bubble">
                <div class='embed-video__container'>
                    <iframe src="https://player.vimeo.com/video/368321803" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="a-intro-screen__bottom-action" data-customizable-block='{ "id": "a-intro-bottom-action", "name": "«Что самое важное»" }'>
                <div class="h3 --large -max-width-340px -mx-auto">Указать, что для меня самое важное</div>
                <a href="javascript:void(0);" class="button --blue --large -width-240px">Указать</a>
            </div>
        </div>
    </section>

    @component('blocks.banner-work-subscribe', [
        'class' => 'hidden',
    ]) @endcomponent

    @component('blocks.banner-strong-solutions', [
        'class' => 'hidden',
    ])
    @endcomponent

    @component('blocks.banner-strong-solutions-v2', [
        'class' => 'hidden',
    ])
    @endcomponent

    <section class="section hidden" data-customizable-block='{ "id": "algorithms-slider-section", "name": "Лента «Другие алгоритмы»" }'>
        <div class="container">
            <div class="slider --edge-to-edge" data-slider>
                <div class="slider__heading">
                    <h2 class="h3 --large slider__title">Другие алгоритмы в разделе персонал:</h2>

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

    <section class="section --last hidden" data-customizable-block='{ "id": "section-banners-with-desc", "name": "Баннеры разделов с описанием" }'>
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

    @component('components.footer', [
        'compact' => true,
    ])
    @endcomponent
@endsection
