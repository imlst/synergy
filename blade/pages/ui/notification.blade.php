@extends('pages.layout')

@section('title', 'Уведомления')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Уведомления</h1>
        </div>

        <div class="container">
            @component('components.notification', [
                'icon' => '#info-circled-filled',
                'title' => 'Информация',
                'close' => true,
            ])
                @slot('text')
                    <div>Добавили новый курс "Финансы". Рекомендуем!</div>

                    <div class="-mt-5">
                        <a href="javascript:void(0);">Перейти</a>
                    </div>
                @endslot
            @endcomponent

            @component('components.notification', [
                'type' => 'success',
                'icon' => '#tick-circled-filled',
                'title' => 'Успешно',
                'text' => 'Ваш платеж на сумму 150 000 ₽ принят! Свяжемся с Вами в ближайшее время.',
                'close' => true,
            ])
            @endcomponent

            @component('components.notification', [
                'type' => 'warning',
                'icon' => '#warning-circled-filled',
                'title' => 'Предупреждение',
                'text' => 'Возможно поля формы заполнены неверно',
                'close' => true,
            ])
            @endcomponent

            @component('components.notification', [
                'type' => 'error',
                'icon' => '#warning-circled-filled',
                'title' => 'Ошибка',
                'text' => 'Сервис платежей не отвечает. Попробуйте повторить позже.',
                'close' => true,
            ])
            @endcomponent
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="php" data-language="blade">{{
"component('components.notification', [
    'type' => '', // вид уведомления success, warning, error
    'icon' => '#info-circled-filled', // иконка
    'title' => 'Информация', // заголовок
    'text' => 'Добавили новый курс \"Финансы\". Рекомендуем!', // текст уведомления
    'close' => true, // крестик
])
    // так можно вывести не только текст
    slot('text')
        <div>Добавили новый курс \"Финансы\". Рекомендуем!</div>

        <div class=\"-mt-5\">
            <a href=\"javascript:void(0);\">Перейти</a>
        </div>
    endslot
endcomponent"
                }}</code>
            </pre>

            <pre>
                <code class="html" data-language="html">{{
'<div class="notification"> <!-- другие виды уведомлений --success --warning --error -->
    <!-- Иконка уведомления -->
    <span class="notification__icon">
        <span class="icon"><svg><use xlink:href="#info-circled-filled"></use></svg></span>
    </div>

    <div class="notification__content">
        <div class="notification__title">
            <!-- Иконка уведомления для мобилы -->
            <span class="notification__icon">
                <span class="icon"><svg><use xlink:href="#info-circled-filled"></use></svg></span>
            </div>

            <span>Заголовок</span>
        </div>

        <div class="notification__text">Текст уведомления</div>
    </div>

    <!-- Крестик -->
    <div class="notification__close">
        <span class="icon"><svg><use xlink:href="#cross"></use></svg></span>
    </div>
</div>'
                }}</code>
            </pre>
        </div>
    </section>
@endsection
