@extends('pages.layout')

@section('title', 'Чек-лист отправлен')

@section('content')
    @component('components.header', [
        'logo' => 'work',
        'secondLevel' => [
            ['name' => 'Мероприятия'],
            ['name' => 'Анкета'],
        ],
    ])
    @endcomponent

    <section class="a-intro-screen">
        <div class="container">
            <div class="h2">Чек-лист у вас на почте!</div>
            <h1 class="h2 --large -mb-10 -mx-auto">Посмотрите это видео</h1>
            <div class="a-intro-screen__desc">о чем не принято говорить в бизнес-образовании</div>

            <div class="embed-video --bubble">
                <div class='embed-video__container'>
                    <iframe src="https://player.vimeo.com/video/368321803" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="a-intro-screen__bottom-action">
                <div class="h3 --large -max-width-340px -mx-auto">Что конкретно вы хотели бы улучшить в своем бизнесе?</div>
                <a href="javascript:void(0);" class="button --blue --large -width-240px">Рассказать</a>
            </div>
        </div>
    </section>

    @component('components.footer', [
        'compact' => true,
    ])
    @endcomponent
@endsection
