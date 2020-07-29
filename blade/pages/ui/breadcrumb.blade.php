@extends('pages.layout')

@section('title', 'Хлебные крошки')

@section('content')
    <section class="section -pb-20">
        <div class="container">
            <h1 class="-text-uppercase">Хлебные крошки</h1>
        </div>
    </section>

    @component('components.breadcrumb', [
        'items' => [
            ['name' => 'Бизнес', 'link' => true],
            ['name' => 'Персонал', 'link' => false],
        ]
    ])
    @endcomponent

    @component('components.breadcrumb', [
        'items' => [
            ['name' => 'Бизнес', 'link' => true],
            ['name' => 'Персонал', 'link' => true],
            ['name' => 'Как быстро нанимать сотрудников', 'link' => false],
        ]
    ])
    @endcomponent

    <section class="section">
        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="php" data-language="blade">{{
"component('components.breadcrumb', [
    'items' => [
        ['name' => 'Бизнес', 'link' => true],
        ['name' => 'Персонал', 'link' => true],
        ['name' => 'Как быстро нанимать сотрудников', 'link' => false],
    ]
])
endcomponent"
                }}</code>
            </pre>

            <pre>
                <code class="html" data-language="html">{{
'<div class="breadcrumb">
    <ul class="breadcrumb__list">
        <li>
            <a href="javascript:void(0);">Бизнес</a>
            <span class="icon"><svg><use xlink:href="#arrowhead"></use></svg></span>
        </li>

        <li>
            <a href="javascript:void(0);">Персонал</a>
            <span class="icon"><svg><use xlink:href="#arrowhead"></use></svg></span>
        </li>

        <li>
            <span>Как быстро нанимать сотрудников</span>
        </li>
    </ul>
</div>'
                }}</code>
            </pre>
        </div>
    </section>
@endsection
