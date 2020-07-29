<? $title = 'Typography' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <div class="-font-thin -mb-10">Roboto Thin</div>
            <div class="-font-light -mb-10">Roboto Light</div>
            <div class="-font-normal -mb-10">Roboto Normal</div>
            <div class="-font-medium -mb-10">Roboto Medium</div>
            <div class="-font-bold -mb-10">Roboto Bold</div>
            <div class="-font-black -mb-10">Roboto Black</div>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell --sm-6">
                    <h1>H1 • Desktop</h1>
                    <h2>H2 • Desktop</h2>
                    <h3>H3 • Desktop</h3>
                    <h4>H4 • Desktop</h4>
                </div>

                <div class="grid__cell --sm-6">
                    <h1 class="--mobile">H1 • Mobile</h1>
                    <h2 class="--mobile">H2 • Mobile</h2>
                    <h3 class="--mobile">H3 • Mobile</h3>
                    <h4 class="--mobile">H4 • Mobile</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell">
                    <div>Обычный дефолтный текст</div>
                </div>

                <div class="grid__cell">
                    <p>Абзац – отрезок письменной речи, состоящий из одного или нескольких предложений. Текст между двумя красными строками. Выделение фразы в абзац усиливает падающий на неё смысловой акцент.</p>

                    <p>Способствует правильному и быстрому восприятию текста.</p>
                </div>

                <div class="grid__cell">
                    <a href="javascript:void(0);">Стандартная ссылка</a>
                </div>

{{--                <div class="grid__cell">--}}
{{--                    <a href="javascript:void(0);" class="icon-string -color-blue -font-semibold">--}}
{{--                        <span class="icon --large"><svg><use xlink:href="#video-circled-filled"></use></svg></span>--}}
{{--                        <span>Смотреть видео</span>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="grid__cell">--}}
{{--                    <div class="icon-string -color-indigo-35 -width-240px">--}}
{{--                        <span class="icon --large"><svg><use xlink:href="#warning-circled-filled"></use></svg></span>--}}
{{--                        <span>Немного дополнительной инфы с прикольной иконкой</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
