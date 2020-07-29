<? $title = 'Input' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'placeholder' => 'Текстовое поле',
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>
            </div>

            <div class="grid">
                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'placeholder' => 'Текстовое поле',
                        'disabled' => 'true',
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'value' => 'Заполнено',
                        'placeholder' => 'Текстовое поле',
                        'disabled' => 'true',
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>
            </div>

            <div class="grid">
                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'placeholder' => 'Электронная почта',
                        'options' => [
                            'validate' => 'email',
                        ],
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'placeholder' => 'Обязательное поле *',
                        'options' => [
                            'required' => true,
                        ],
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>
            </div>

            <div class="grid">
                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'value' => '88001000011',
                        'placeholder' => 'Телефон',
                        'options' => [
                            'validate' => 'phone',
                        ],
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'value' => '88001000011',
                        'placeholder' => 'Мобильный телефон',
                        'options' => [
                            'validate' => 'mobilePhone',
                        ],
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>
            </div>

            <div class="grid">
                <div class="grid__cell --sm-6 --md-4">
                    @component('components.ui.input', [
                        'value' => 'qwerty',
                        'placeholder' => 'Пароль',
                        'type' => 'password',
                        'style' => 'width: 100%;',
                    ])
                    @endcomponent
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Пример использования</h3>

            <pre>
                <code class="php" data-language="blade">{{
"/* Базовый пример */
@ component('components.ui.input', [
    'value' => 'Заполнено',   // значение [не обязательно]
    'placeholder' => 'Текстовое поле',   // placeholder [не обязательно]
    'type' => 'password',   // тип (text, password, number) [не обязательно]
    'disabled' => 'true',   // неактивно [не обязательно]
    'style' => 'width: 100%;',   // дополнительные стили [не обязательно]
])
@ endcomponent

/* Пример с валидацией */
@ component('components.ui.input', [
    'placeholder' => 'Электронная почта',   // placeholder [не обязательно]
    'options' => [   // параметры компонента [не обязательно]
        'validate' => 'email',   // тип валидации (email, phone, mobilePhone) [не обязательно]
        'required' => true,   // необходимо заполнение [не обязательно]
    ],
])
@ endcomponent"
                }}</code>
            </pre>
        </div>
    </section>
@endsection
