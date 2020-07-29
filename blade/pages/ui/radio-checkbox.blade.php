@extends('pages.layout')

@section('title', 'Radio & чекбоксы')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Radio & чекбоксы</h1>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Radio кнопки</h3>

            <div class="grid">
                <div class="grid__cell">
                    <div class="-color-indigo-35 -font-semibold">Обычные</div>
                </div>

                <div class="grid__cell">
                    <label class="radio">
                        <input type="radio" name="radio" checked>

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Вариант</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="radio">
                        <input type="radio" name="radio">

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Получше вариант</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="radio">
                        <input type="radio" checked disabled>

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Самый лучший вариант</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="radio --error">
                        <input type="radio" name="radio">

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Неправильный выбор</span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell">
                    <div class="-color-indigo-35 -font-semibold">Большие</div>
                </div>

                <div class="grid__cell">
                    <label class="radio --large">
                        <input type="radio" name="radio-l" checked>

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Вариант</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="radio --large">
                        <input type="radio" name="radio-l">

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Получше вариант</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="radio --large">
                        <input type="radio" checked disabled>

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Самый лучший вариант</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="radio --large --error">
                        <input type="radio" name="radio-l">

                        <span class="radio__view">
                            <span class="radio__marker"></span>
                            <span class="radio__label">Неправильный выбор</span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="html" data-language="html">{{
'<!-- Выбранная радио кнопка -->
<label class="radio">
    <input type="radio" name="radio" checked>

    <span class="radio__view">
        <span class="radio__marker"></span>
        <span class="radio__label">Вариант</span>
    </span>
</label>

<!-- Неактивная радио кнопка -->
<label class="radio">
    <input type="radio" name="radio" disabled>

    <span class="radio__view">
        <span class="radio__marker"></span>
        <span class="radio__label">Вариант</span>
    </span>
</label>'
                }}</code>
            </pre>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Чекбоксы</h3>

            <div class="grid">
                <div class="grid__cell">
                    <div class="-color-indigo-35 -font-semibold">Обычные</div>
                </div>

                <div class="grid__cell" style="max-width: 520px;">
                    <label class="checkbox --small-text">
                        <input type="checkbox" checked>

                        <span class="checkbox__view">
                            <span class="checkbox__marker"></span>
                            <span class="checkbox__label">Даю согласие на обработку <a href="javascript:void(0);">персональных данных</a> и соглашаюсь с
                                <a href="javascript:void(0);">политикой конфиденциальности</a></span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="checkbox">
                        <input type="checkbox" checked disabled>

                        <span class="checkbox__view">
                            <span class="checkbox__marker"></span>
                            <span class="checkbox__label">Согласен всегда и на все</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="checkbox --error">
                        <input type="checkbox">

                        <span class="checkbox__view">
                            <span class="checkbox__marker"></span>
                            <span class="checkbox__label">Неправильный выбор</span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell">
                    <div class="-color-indigo-35 -font-semibold">Большие</div>
                </div>

                <div class="grid__cell" style="max-width: 520px;">
                    <label class="checkbox --large --small-text">
                        <input type="checkbox" checked>

                        <span class="checkbox__view">
                            <span class="checkbox__marker"></span>
                            <span class="checkbox__label">Даю согласие на обработку <a href="javascript:void(0);">персональных данных</a> и соглашаюсь с
                                <a href="javascript:void(0);">политикой конфиденциальности</a></span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="checkbox --large">
                        <input type="checkbox" checked disabled>

                        <span class="checkbox__view">
                            <span class="checkbox__marker"></span>
                            <span class="checkbox__label">Согласен всегда и на все</span>
                        </span>
                    </label>
                </div>

                <div class="grid__cell">
                    <label class="checkbox --large --error">
                        <input type="checkbox">

                        <span class="checkbox__view">
                            <span class="checkbox__marker"></span>
                            <span class="checkbox__label">Неправильный выбор</span>
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="html" data-language="html">{{
'<!-- Выбранный чекбокс -->
<label class="checkbox"> <!-- --small-text - сделать текст меньше -->
    <input type="checkbox" checked>

    <span class="checkbox__view">
        <span class="checkbox__marker"></span>
        <span class="checkbox__label">Даю согласие на обработку <a href="javascript:void(0);">персональных данных</a> и соглашаюсь с
            <a href="javascript:void(0);">политикой конфиденциальности</a></span>
    </span>
</label>

<!-- Неактивный чекбокс -->
<label class="checkbox">
    <input type="checkbox" disabled>

    <span class="checkbox__view">
        <span class="checkbox__marker"></span>
        <span class="checkbox__label">Согласен всегда и на все</span>
    </span>
</label>'
                }}</code>
            </pre>
        </div>
    </section>
@endsection
