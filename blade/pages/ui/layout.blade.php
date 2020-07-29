@extends('pages.layout')

@section('title', 'Header & Footer')

@section('content')
    <section class="section -pb-0">
        <div class="container">
            <h1 class="-text-uppercase">Header & Footer</h1>
        </div>

        <div class="container -mb-20">
            <h3 class="-color-indigo-80">Header</h3>
        </div>

        <div class="-mb-60">
            @component('components.header') @endcomponent
        </div>

        <div class="-mb-60">
            @component('components.header', [
                'logo' => 'work',
            ])
            @endcomponent
        </div>

        <div class="-mb-60">
            @component('components.header', [
                'firstLevel' => true,
            ])
            @endcomponent
        </div>

        <div class="-mb-60">
            @component('components.header', [
                'auth' => true,
                'firstLevel' => true,
                'section' => 'family',
            ])
            @endcomponent
        </div>

        <div class="-mb-60">
            @component('components.header', [
                'authorized' => true,
                'firstLevel' => true,
                'section' => 'work',
                'secondLevel' => [
                    ['name' => 'Алгоритмы'],
                    ['name' => 'Мероприятия'],
                    ['name' => 'Анкета'],
                ],
            ])
            @endcomponent
        </div>

        <div class="-mb-60">
            @component('components.header', [
                'authorized' => true,
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
                    ['name' => 'Финансы', 'active' => true],
                    ['name' => 'Персонал'],
                    ['name' => 'Продукт'],
                    ['name' => 'Безопасность'],
                ],
            ])
            @endcomponent
        </div>

        <div class="container -mb-20">
            <h3 class="-color-indigo-80">Footer</h3>
        </div>

        <div class="-mb-60">
            @component('components.footer', [
                'compact' => true,
            ])
            @endcomponent
        </div>

        <div class="-mb-60">
            @component('components.footer') @endcomponent
        </div>

        @component('components.footer', [
            'auth' => true,
            'about' => true,
        ])
        @endcomponent
    </section>
@endsection
