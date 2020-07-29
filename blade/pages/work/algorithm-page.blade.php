@extends('pages.layout')

@section('title', 'Алгоритм Индивидуальная')

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
            'thirdLevel' => [
                ['name' => 'Маркетинг'],
                ['name' => 'Управление'],
                ['name' => 'Стратегия'],
                ['name' => 'Продажи'],
                ['name' => 'Финансы'],
                ['name' => 'Персонал', 'active' => true],
                ['name' => 'Продукт'],
                ['name' => 'Безопасность'],
            ],
        ])
    @endcomponent

    @component('components.breadcrumb', [
        'items' => [
            ['name' => 'Бизнес', 'link' => true],
            ['name' => 'Персонал', 'link' => true],
            ['name' => 'Как быстро нанимать сотрудников', 'link' => false],
        ]
    ])
    @endcomponent

    <section class="section">
        <div class="sidebar-container">
            <div class="container --compact">
                <div class="grid --gutters-10 -align-items-center">
                    <div class="grid__cell --sm-by-content">
                        <div class="algorithm-author">
                            <div class="algorithm-author__avatar" style="background-image: url('/dist/img/av/algorithm-author.png')"></div>
                            <span>Александр Волчек</span>
                        </div>
                    </div>

                    <div class="grid__cell -sm-order-1">
                        <h1 class="h2 --large">Как быстро нанимать сотрудников</h1>
                    </div>

                    <div class="grid__cell --sm-by-content -sm-ml-auto" data-customizable-block='{ "id": "algorithm-details", "name": "Иконки с деталями" }'>
                        <ul class="algorithm-details">
                            <li>
                                <span class="algorithm-details__course">Персонал</span>
                            </li>

                            <li>
                                <span class="icon --small"><svg><use xlink:href="#clock"></use></svg></span>
                                <span>11 мин</span>
                            </li>

                            <li>
                                <span class="icon --small"><svg><use xlink:href="#files"></use></svg></span>
                                <span>2 pdf</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sidebar-container__bar -d-none -md-d-block">
                @component('blocks.banner-strong-solutions-vertical') @endcomponent

                @component('blocks.banner-strong-solutions-vertical-v2', [
                    'class' => 'hidden',
                ])
                @endcomponent

                <div class="algorithm-details-table" data-customizable-block='{ "id": "algorithm-details-table", "name": "Подробности курса" }'>
                    <h5>Подробности курса</h5>

                    <ul>
                        <li>
                            <span>Время</span>
                            <span class="algorithm-details-table__value">11 мин</span>
                        </li>

                        <li>
                            <span>Видео</span>
                            <span class="algorithm-details-table__value">1</span>
                        </li>

                        <li>
                            <span>Материалы</span>
                            <span class="algorithm-details-table__value">2 pdf</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class='embed-video'>
                    <div class='embed-video__container'>
                        <iframe src="https://player.vimeo.com/video/369529760" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="container" data-customizable-block='{ "id": "algorithm-description", "name": "Описание алгоритма" }'>
                <h3>Описание</h3>

                <p>Используя этот алгоритм, можно нанять сотрудника за 2 недели</p>
            </div>

            <div class="container" data-customizable-block='{ "id": "algorithm-detail-text", "name": "Детальный текст" }'>
                <h3>Как быстро нанять сотрудника в команду</h3>

                <p>Тема найма сотрудников – ключевая в управлении.</p>
                <p>Когда я оглядываюсь на свои прошлые проекты и анализирую, что я точно мог бы сделать в них лучше, первое что приходит на ум – это набор команды.</p>
                <p>В этом алгоритме 5 правил, как это делать быстро и эффективно.</p>

                <h4>Самое главное правило – кандидатов нужно смотреть лично</h4>
                <ul>
                    <li>Найм человека – это либо точка роста, либо сильнейший тормоз.</li>
                    <li>Вывод правильного сотрудника приведет к серьезному росту эффективности. Но без личного контроля есть огромный риск нарваться на проблемы, что и происходит регулярно. Поэтому не отпускайте этот процесс из зоны своего внимания.</li>
                    <li>Есть вещи, которые можно и нужно делегировать, но найм новых сотрудников должен быть под личным контролем. Это железное правило.</li>
                </ul>

                <h4>Пригласите как можно больше кандидатов</h4>
                <ul>
                    <li>Вам нужно отобрать не менее 15 резюме на 1 вакансию (оптимально 30).</li>
                    <li>Ошибка – просто опубликовать вакансию и ждать отклик, нужно вручную отбирать резюме по HR-базам.</li>
                    <li>Самый быстрый способ – оплатить доступ к базе Headhunter на 1 день, отобрать номера телефонов всех подходящих кандидатов, а на следующий день прозвонить их и пригласить на собеседование.</li>
                    <li>При отборе резюме в первую очередь обращайте внимание на профессиональные навыки, а не на ВУЗ, рекомендации и прошлый опыт.</li>
                    <li>Не нужно углубляться в детали и искать того, кто идеально совпадает по всем параметрам. Это ошибка. Вы не поймете, подходит человек или нет, пока не пообщаетесь лично, поэтому просто отберите более-менее подходящих и приглашайте их на собеседование.</li>
                    <li>Не бойтесь, что к вам придет много неподходящих людей, это лучше чем маленький выбор.</li>
                </ul>

                <h4>Убедитесь, что до собеседования дойдет максимум кандидатов</h4>
                <ul>
                    <li>После отбора вакансий нужно приложить все усилия, чтобы люди пришли на собеседование. Для этого подготовьте скрипт звонка. Его цель только одна – убедить человека прийти на собеседование.</li>
                    <li>Не тратьте время на долгие разговоры – идите по скрипту и на все вопросы отвечайте, что подробности расскажете на собеседовании.</li>
                    <li>Не делайте выводов из того, как кандидат говорит по телефону, этот фактор не показательный.</li>
                    <li>Назначайте собеседование на этой же неделе, хорошие кандидаты быстро находят работу, будете оттягивать процесс – потеряете самых сильных.</li>
                </ul>

                <h4>На собеседовании прислушивайтесь к своему чутью</h4>
                <ul>
                    <li>Чаще всего эффективнее провести групповое собеседование – это позволяет сэкономить время и посмотреть, как люди ведут себя в групповой динамике (алгоритм «Как проводить собеседование» будет скоро доступен).</li>
                    <li>При выборе доверяйте своему внутреннему чутью. Есть много нюансов, которые приходят с опытом, но самое важное – слушайте себя.</li>
                    <li>Часто крутая самопрезентация на собеседовании может оказаться блефом. Если есть чувство, что что-то не так, что вам пытаются «пустить пыль в глаза», скорее всего так и есть.</li>
                    <li>Задавайте вопросы про детали работы, попросите рассказать, как он рассуждал, решая трудную профессиональную задачу.</li>
                    <li>Обращайте внимание, на мимику, жестикуляцию, осанку, тон и манеру речи, паузы, заминки и т. д.</li>
                    <li>Собеседование лучше проводить втроем – совместно с партнером (или руководителем) и надежным сотрудником. Если кандидат понравится всем троим, шансов, что выбор удачный, больше.</li>
                </ul>

                <h4>Не тормозите, принимайте решение быстро</h4>
                <ul>
                    <li>Если вам понравились несколько человек на групповом собеседовании, попросите их остаться и пообщайтесь сразу с каждым индивидуально.</li>
                    <li>Если в целом человек вам подходит, но не нравятся какие-то детали – пробуйте. Не затягивайте процесс длительными размышлениями.</li>
                    <li>Между первым этапом, когда пришла идея о вакансии, и последним – когда человек приступил к работе, должно пройти как можно меньше времени, в идеале не больше двух недель.</li>
                </ul>

                <h3>Этот алгоритм прост и эффективен. Но многие его не делают. Почему?</h3>
                <p>Здесь два стандартных тормоза:</p>

                <ol>
                    <li>Одни руководители не понимают значимости этого процесса. Поэтому отдают его кому-то бесконтрольно.</li>
                    <li>Другие боятся, что у них так просто не получится. Начинают усложнять, перепоручают «более опытным».</li>
                </ol>

                <p>Но годами уже проверено, что такой подход работает. Даже если с первого собеседования вы не найдете сотрудника, то получите крутой полезный опыт и с каждым разом будете действовать точнее.</p>

                <h3>Налаженная система найма сотрудников – это один из 84 факторов успеха в вашем бизнесе. Каждый из 84 я подробно разберу 13-14 ноября на интенсиве «Сильные решения».</h3>
            </div>
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

    @component('blocks.banner-work-subscribe') @endcomponent

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
