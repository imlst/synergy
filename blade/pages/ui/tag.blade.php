<? $title = 'Tag' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <h3 class="-font-normal">Крупные</h3>

            <div class="group">
                <div class="group__wrapper">
                    <div class="group__item">
                        <div class="tag">Простой тег</div>
                    </div>

                    <div class="group__item">
                        <div class="tag --outline">Простой тег</div>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="tag" onclick="this.classList.toggle('--active');">
                            <span>Кликабельный</span>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="tag --outline" onclick="this.classList.toggle('--active');">
                            <span>Кликабельный</span>
                        </a>
                    </div>

                    <div class="group__item">
                        <div class="tag">+ 1 тег</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Средние</h3>

            <div class="group">
                <div class="group__wrapper">
                    <div class="group__item">
                        <div class="tag --medium">Простой тег</div>
                    </div>

                    <div class="group__item">
                        <div class="tag --medium --outline">Простой тег</div>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="tag --medium" onclick="this.classList.toggle('--active');">
                            <span>Кликабельный</span>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="tag --medium --outline" onclick="this.classList.toggle('--active');">
                            <span>Кликабельный</span>
                        </a>
                    </div>

                    <div class="group__item">
                        <div class="tag --medium">+ 1 тег</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Маленькие</h3>

            <div class="group -mb-10">
                <div class="group__wrapper">
                    <div class="group__item">
                        <div class="tag --small --outline">Простой тег</div>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="tag --small --outline" onclick="this.classList.toggle('--active');">
                            <span>Кликабельный</span>
                        </a>
                    </div>

                    <div class="group__item">
                        <div class="tag --small">+ 1 тег</div>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="group__wrapper">
                    <div class="group__item">
                        <div class="tag --small --dark">
                            <span class="icon"><svg><use xlink:href="#online-events-16x"></use></svg></span>
                            <span>Ведет онлайн</span>
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#star-16x"></use></svg></span>
                            <span>5.0</span>
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#video-16x"></use></svg></span>
                            <span>Видео</span>
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#article-16x"></use></svg></span>
                            <span>Статья</span>
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#audio-16x"></use></svg></span>
                            <span>Аудио</span>
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#video-16x"></use></svg></span>
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#article-16x"></use></svg></span>
                        </div>
                    </div>

                    <div class="group__item">
                        <div class="tag --small --primary">
                            <span class="icon"><svg><use xlink:href="#audio-16x"></use></svg></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
