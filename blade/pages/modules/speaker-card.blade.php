<? $title = 'Модуль спикеров' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell -width-auto">
                    @component('components.modules.speaker-card', [
                        'photo' => '/dist/img/modules/speaker-card/alexander-chulok.jpg',
                        'name' => 'Александр Чулок',
                        'description' => 'Кандидат экономических наук',
                        'rating' => '4.6',
                        'achieves' => ['top-3', 'many-materials'],
                        'languages' => ['ru'],

                        'info' => [
                            'achieves' => [
                                'top-3' => 'Топ 3 на платформе',
                                'many-materials' => 'Много материалов',
                            ],
                            'languages' => [
                                'ru' => 'Русский',
                            ],
                            'themes' => 'Тайм-менеджмент',
                            'whom' => 'Владелец бизнеса, руководитель',
                            'materials' => [
                                'articles' => '5 статей',
                            ],
                        ],
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell -width-auto">
                    @component('components.modules.speaker-card', [
                        'photo' => '/dist/img/modules/speaker-card/alexander-chulok.jpg',
                        'name' => 'Александр Чулок',
                        'description' => 'Кандидат экономических наук, доцент департамента образовательных программ, директор центра научно-технологического прогнозирования',
                        'rating' => '4.6',
                        'achieves' => ['top-3', 'top-10', 'many-materials', 'many-articles', 'high-activity'],
                        'languages' => ['ru', 'en'],
                        'style' => 'blue',

                        'info' => [
                            'achieves' => [
                                'top-3' => 'Топ 3 на платформе',
                                'top-10' => 'Топ 10 на платформе',
                                'many-materials' => 'Много материалов',
                                'many-articles' => 'Большое количество статей',
                                'high-activity' => 'Высокая активность',
                            ],
                            'languages' => [
                                'ru' => 'Русский',
                                'en' => 'Английский',
                            ],
                            'themes' => 'Тайм-менеджмент',
                            'whom' => 'Владелец бизнеса, руководитель',
                            'materials' => [
                                'videos' => '4 видео',
                                'articles' => '3 статьи',
                                'audio' => '1 аудио',
                                'events' => '3 ближайших мероприятия',
                            ],
                        ],
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell -width-auto">
                    @component('components.modules.speaker-card', [
                        'photo' => '/dist/img/modules/speaker-card/alexander-chulok.jpg',
                        'name' => 'Александр Бен Хамим Аль Азур Муслим Нариман Рахим Джа Чулок',
                        'description' => 'Кандидат экономических наук, доцент департамента образовательных программ, директор центра научно-технологического прогнозирования',
                        'rating' => '4.6',
                        'achieves' => ['top-3', 'top-10', 'many-materials', 'many-articles', 'high-activity'],
                        'antiAchieves' => ['bad-reviews'],
                        'languages' => ['ru', 'en'],
                        'style' => 'purple',

                        'info' => [
                            'achieves' => [
                                'top-3' => 'Топ 3 на платформе',
                                'top-10' => 'Топ 10 на платформе',
                                'many-materials' => 'Много материалов',
                                'many-articles' => 'Большое количество статей',
                                'high-activity' => 'Высокая активность',
                            ],
                            'antiAchieves' => [
                                'bad-reviews' => 'Имеет плохие отзывы',
                            ],
                            'languages' => [
                                'ru' => 'Русский',
                                'en' => 'Английский',
                            ],
                            'themes' => 'Тайм-менеджмент',
                            'whom' => 'Владелец бизнеса, руководитель',
                            'materials' => [
                                'videos' => '4 видео',
                                'articles' => '3 статьи',
                                'audio' => '1 аудио',
                                'events' => '3 ближайших мероприятия',
                            ],
                        ],
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell -width-auto">
                    @component('components.modules.speaker-card', [
                        'name' => 'Человек без лица',
                    ])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>
@endsection
