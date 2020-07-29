@extends('pages.layout')

@section('title', 'Модальные окна')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Модальные окна</h1>
        </div>

        <div class="container">
            <button class="button" data-modal-show="subscribeModal">
                <span>Email подписка</span>
            </button>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__cell">
                        <a href="javascript:void(0);" class="icon-string -color-blue -font-semibold" data-video-modal-show='{ "id": "sCSAYDTSg0g", "host": "youtube" }'>
                            <span class="icon --large"><svg><use xlink:href="#video-circled-filled"></use></svg></span>
                            <span>Открыть YouTube видео</span>
                        </a>
                    </div>

                    <div class="grid__cell">
                        <a href="javascript:void(0);" class="icon-string -color-blue -font-semibold" data-video-modal-show='{ "id": "368339115", "host": "vimeo" }'>
                            <span class="icon --large"><svg><use xlink:href="#video-circled-filled"></use></svg></span>
                            <span>Открыть Vimeo видео</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
