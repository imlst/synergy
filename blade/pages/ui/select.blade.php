@extends('pages.layout')

@section('title', 'Селекты')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Селекты</h1>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Обычный</div>

                    <div class="select select__field -width-240px" data-select='{ "placeholder": "Выберите вариант" }'>
                        <select>
                            <option disabled hidden>Выберите вариант</option>
                            <option>Вариант 1</option>
                            <option>Вариант 2 подлиннее</option>
                            <option>Вариант 3 с самым длинным значением</option>
                            <option disabled>Вариант 4</option>
                            <option>Вариант 5</option>
                            <option>Вариант 6</option>
                        </select>

                        <div class="select__value" data-select-value></div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Radio</div>

                    <div class="select select__field -width-240px" data-select='{ "placeholder": "Выберите вариант", "optionType": "radio" }'>
                        <select>
                            <option disabled hidden>Выберите вариант</option>
                            <option selected>Вариант 1</option>
                            <option>Вариант 2</option>
                            <option>Вариант 3</option>
                        </select>

                        <div class="select__value" data-select-value></div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Чекбоксы</div>

                    <div class="select select__field -width-240px" data-select='{ "placeholder": "Выберите вариант", "optionType": "checkbox" }'>
                        <select>
                            <option disabled hidden>Выберите вариант</option>
                            <option selected>Вариант 1</option>
                            <option>Вариант 2</option>
                            <option>Вариант 3</option>
                        </select>

                        <div class="select__value" data-select-value></div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Multiple</div>

                    <div class="select select__field -width-240px" data-select='{ "placeholder": "Выберите вариант", "optionType": "checkbox" }'>
                        <select multiple>
                            <option disabled hidden>Выберите вариант</option>
                            <option>Вариант 1</option>
                            <option>Вариант 2</option>
                            <option>Вариант 3</option>
                        </select>

                        <div class="select__value" data-select-value></div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Неактивный</div>

                    <div class="select select__field -width-240px disabled" data-select='{ "placeholder": "Выберите вариант" }'>
                        <select disabled>
                            <option disabled hidden>Выберите вариант</option>
                            <option>Вариант 1</option>
                            <option>Вариант 2</option>
                            <option>Вариант 3</option>
                        </select>

                        <div class="select__value" data-select-value></div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Со счетчиком</div>

                    <div class="select select__field -width-240px" data-select='{ "placeholder": "Выберите вариант", "optionType": "checkbox" }'>
                        <select multiple>
                            <option disabled hidden>Выберите вариант</option>
                            <option>Вариант 1</option>
                            <option>Вариант 2</option>
                            <option>Вариант 3</option>
                        </select>

                        <div class="select__value">
                            <span>Варианты</span>
                            <span class="select__counter" data-select-counter></span>
                        </div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>

                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Код страны</div>

                    <div class="select select__field -width-120px" data-select='{ "placeholder": "Код" }'>
                        <select>
                            <option disabled hidden>Код телефона</option>
                            <option value="1" data-option-description="Канада">+1</option>
                            <option value="7" data-option-description="Россия">+7</option>
                            <option value="33" data-option-description="Франция">+33</option>
                            <option value="43" data-option-description="Австрия">+43</option>
                            <option value="357" data-option-description="Кипр">+357</option>
                            <option value="374" data-option-description="Армения">+374</option>
                            <option value="375" data-option-description="Беларусь">+375</option>
                            <option value="385" data-option-description="Хорватия">+385</option>
                            <option value="966" data-option-description="Саудовская Аравия">+966</option>
                        </select>

                        <input class="select__filter" type="text" maxlength="5" data-select-filter>

                        <div class="select__empty" data-select-empty>Нет результатов</div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid">
                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">Большой</div>

                    <div class="select select__field --large -width-240px" data-select='{ "placeholder": "Выберите вариант" }'>
                        <select>
                            <option disabled hidden>Выберите вариант</option>
                            <option>Вариант 1</option>
                            <option>Вариант 2</option>
                            <option>Вариант 3</option>
                        </select>

                        <div class="select__value" data-select-value></div>

                        <div class="select__arrow">
                            <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid">
                <div class="grid__cell --by-content">
                    <div class="-color-indigo-35 -font-semibold -mb-15">В виде ссылки</div>

                    <span>Показать </span>

                    <div class="select --link" data-select>
                        <select>
                            <option selected>20</option>
                            <option>60</option>
                            <option>Все</option>
                        </select>

                        <a href="javascript:void(0);" class="select__link">
                            <span data-select-value>20</span><span class="icon select__arrow"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
