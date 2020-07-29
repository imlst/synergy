<? $title = 'Button' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <h3 class="-font-normal">Крупные</h3>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button">Кнопка</button>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button">Ссылка</a>
                    </div>

                    <div class="group__item">
                        <button class="button" disabled>Неактивна</button>
                    </div>
                </div>
            </div>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --outline">Кнопка</button>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --outline">Ссылка</a>
                    </div>

                    <div class="group__item">
                        <button class="button --outline" disabled>Неактивна</button>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --outline --icon">
                            <span class="icon"><svg><use xlink:href="#like-outline-48x"></use></svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Средние</h3>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --medium">Кнопка</button>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --medium">Ссылка</a>
                    </div>

                    <div class="group__item">
                        <button class="button --medium" disabled>Неактивна</button>
                    </div>
                </div>
            </div>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --outline --medium">Кнопка</button>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --outline --medium">Ссылка</a>
                    </div>

                    <div class="group__item">
                        <button class="button --outline --medium" disabled>Неактивна</button>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --outline --medium --icon">
                            <span class="icon"><svg><use xlink:href="#like-outline-48x"></use></svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Маленькие</h3>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --small">Кнопка</button>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small">Ссылка</a>
                    </div>

                    <div class="group__item">
                        <button class="button --small" disabled>Неактивна</button>
                    </div>
                </div>
            </div>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --outline --small">Кнопка</button>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --outline --small">Ссылка</a>
                    </div>

                    <div class="group__item">
                        <button class="button --outline --small" disabled>Неактивна</button>
                    </div>
                </div>
            </div>

            <div class="group -mb-10">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --outline --small --icon">
                            <span class="icon"><svg><use xlink:href="#like-outline-48x"></use></svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">На темном фоне</h3>

            <div class="guide__theme-sampler" data-theme="dark">
                <div class="group -mb-5">
                    <div class="group__wrapper">
                        <div class="group__item">
                            <button class="button --medium">Кнопка</button>
                        </div>

                        <div class="group__item">
                            <a href="javascript:void(0);" class="button --medium">Ссылка</a>
                        </div>

                        <div class="group__item">
                            <button class="button --medium" disabled>Неактивна</button>
                        </div>
                    </div>
                </div>

                <div class="group">
                    <div class="group__wrapper">
                        <div class="group__item">
                            <button class="button --outline --medium">Кнопка</button>
                        </div>

                        <div class="group__item">
                            <a href="javascript:void(0);" class="button --outline --medium">Ссылка</a>
                        </div>

                        <div class="group__item">
                            <button class="button --outline --medium" disabled>Неактивна</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
