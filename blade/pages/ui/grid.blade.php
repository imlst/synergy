<? $title = 'Grid' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell --xxs-1">
                    <div class="-py-5 -bg-primary-light -text-center">1</div>
                </div>

                <div class="grid__cell --xxs-11">
                    <div class="-py-5 -bg-primary-light -text-center">11</div>
                </div>

                <div class="grid__cell --xxs-2">
                    <div class="-py-5 -bg-primary-light -text-center">2</div>
                </div>

                <div class="grid__cell --xxs-10">
                    <div class="-py-5 -bg-primary-light -text-center">10</div>
                </div>

                <div class="grid__cell --xxs-3">
                    <div class="-py-5 -bg-primary-light -text-center">3</div>
                </div>

                <div class="grid__cell --xxs-9">
                    <div class="-py-5 -bg-primary-light -text-center">9</div>
                </div>

                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">4</div>
                </div>

                <div class="grid__cell --xxs-8">
                    <div class="-py-5 -bg-primary-light -text-center">8</div>
                </div>

                <div class="grid__cell --xxs-5">
                    <div class="-py-5 -bg-primary-light -text-center">5</div>
                </div>

                <div class="grid__cell --xxs-7">
                    <div class="-py-5 -bg-primary-light -text-center">7</div>
                </div>

                <div class="grid__cell --xxs-6">
                    <div class="-py-5 -bg-primary-light -text-center">6</div>
                </div>

                <div class="grid__cell --xxs-6">
                    <div class="-py-5 -bg-primary-light -text-center">6</div>
                </div>

                <div class="grid__cell --xxs-7">
                    <div class="-py-5 -bg-primary-light -text-center">7</div>
                </div>

                <div class="grid__cell --xxs-5">
                    <div class="-py-5 -bg-primary-light -text-center">5</div>
                </div>

                <div class="grid__cell --xxs-8">
                    <div class="-py-5 -bg-primary-light -text-center">8</div>
                </div>

                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">4</div>
                </div>

                <div class="grid__cell --xxs-9">
                    <div class="-py-5 -bg-primary-light -text-center">9</div>
                </div>

                <div class="grid__cell --xxs-3">
                    <div class="-py-5 -bg-primary-light -text-center">3</div>
                </div>

                <div class="grid__cell --xxs-10">
                    <div class="-py-5 -bg-primary-light -text-center">10</div>
                </div>

                <div class="grid__cell --xxs-2">
                    <div class="-py-5 -bg-primary-light -text-center">2</div>
                </div>

                <div class="grid__cell --xxs-11">
                    <div class="-py-5 -bg-primary-light -text-center">11</div>
                </div>

                <div class="grid__cell --xxs-1">
                    <div class="-py-5 -bg-primary-light -text-center">1</div>
                </div>

                <div class="grid__cell">
                    <div class="-py-5 -bg-primary-light -text-center">12</div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell -width-auto">
                    <div class="-py-5 -bg-primary-light -text-center -px-20">по размеру внутреннего контента</div>
                </div>
            </div>

            <div class="grid">
                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">слева</div>
                </div>

                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">слева</div>
                </div>
            </div>

            <div class="grid -justify-content-end">
                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">справа</div>
                </div>

                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">справа</div>
                </div>
            </div>

            <div class="grid -justify-content-center">
                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">по центру</div>
                </div>

                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">по центру</div>
                </div>
            </div>

            <div class="grid -justify-content-space-between">
                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">по краям</div>
                </div>

                <div class="grid__cell --xxs-4">
                    <div class="-py-5 -bg-primary-light -text-center">по краям</div>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Пример использования</h3>

            <pre>
                <code class="html" data-language="html">{{
'<div class="grid">
    <!-- Колонка на всю ширину -->
    <div class="grid__cell">...</div>
</div>

<div class="grid">
    <!-- Колонки на половину сетки -->
    <div class="grid__cell --xxs-6">...</div>
    <div class="grid__cell --xxs-6">...</div>
</div>

<div class="grid">
    <!-- Колонки на треть сетки от 768px -->
    <div class="grid__cell --sm-4">...</div>
    <div class="grid__cell --sm-4">...</div>
    <div class="grid__cell --sm-4">...</div>
</div>

<div class="grid">
    <!-- Колонка по размеру контента -->
    <div class="grid__cell -width-auto">...</div>
</div>

<div class="grid -justify-content-end">
    <!-- Колонки по правому краю -->
    <div class="grid__cell">...</div>
    <div class="grid__cell">...</div>
</div>

<div class="grid -justify-content-center">
    <!-- Колонки по центру -->
    <div class="grid__cell">...</div>
    <div class="grid__cell">...</div>
</div>

<div class="grid -justify-content-space-between">
    <!-- Колонки по краям -->
    <div class="grid__cell">...</div>
    <div class="grid__cell">...</div>
</div>'
                }}</code>
            </pre>
        </div>
    </section>
@endsection
