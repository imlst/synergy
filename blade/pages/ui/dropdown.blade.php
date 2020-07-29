<? $title = 'Dropdown' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <h3 class="-font-normal">Позиционирование</h3>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "position": "top", "maxWidth": 250 }'>
                            <span>Top</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "position": "bottom", "maxWidth": 250 }'>
                            <span>Bottom</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "position": "right", "maxWidth": 250 }'>
                            <span>Right</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "position": "left", "maxWidth": 250 }'>
                            <span>Left</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "position": "right-bottom", "maxWidth": 250 }'>
                            <span>Right-bottom</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "position": "left-bottom", "maxWidth": 250 }'>
                            <span>Left-bottom</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Триггер</h3>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "maxWidth": 250 }'>
                            <span>Наведение</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>

                    <div class="group__item">
                        <a href="javascript:void(0);" class="button --small" data-dropdown='{ "trigger": "click", "maxWidth": 250 }'>
                            <span>Нажатие</span>

                            <div data-dropdown-content>
                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Интерактивный</h3>

            <div class="group -mb-5">
                <div class="group__wrapper">
                    <div class="group__item">
                        <button class="button --small" data-dropdown='{ "trigger": "click", "interactive": true, "maxWidth": 250 }'>
                            <span>info</span>

                            <div data-dropdown-content>
                                <div class="-mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, et!</div>
                                <a href="javascript:void(0);" class="button --small">action</a>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
