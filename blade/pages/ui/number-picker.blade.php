@extends('pages.layout')

@section('title', 'Выбор количества')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Выбор количества</h1>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Большой</div>

                    @component('components.number-picker', [
                        'maxlength' => 3,
                        'large' => true,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Обычный</div>

                    @component('components.number-picker', [
                        'maxlength' => 3,
                    ])
                    @endcomponent
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Указаны min, max и значение</div>

                    @component('components.number-picker', [
                        'value' => 1,
                        'min' => 1,
                        'max' => 5,
                        'maxlength' => 3,
                    ])
                    @endcomponent
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="php" data-language="blade">{{
"component('components.number-picker', [
    'value' => 1, //  значение
    'min' => 1, // минимальное значение
    'max' => 5, // максимальное значение
    'maxlength' => 3, // количество символов
    'large' => true, // большого размера
])
endcomponent"
                }}</code>
            </pre>

            <pre>
                <code class="html" data-language="html">{{
'<div class="number-picker --large" data-number-picker>
    <button type="button" data-number-picker-minus>–</button>
    <input type="text" value="1" min="1" max="5" maxlength="3">
    <button type="button" data-number-picker-plus>+</button>
</div>'
                }}</code>
            </pre>
        </div>
    </section>
@endsection
