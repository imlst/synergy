<? $title = 'Logo' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <div class="grid">
                <div class="grid__cell -width-auto">
                    <img src="/dist/img/logos/logo-synergy-blue.svg" width="240" alt="Synergy">
                </div>

                <div class="grid__cell -width-auto">
                    <img src="/dist/img/logos/logo-synergy-dark.svg" width="240" alt="Synergy">
                </div>

                <div class="grid__cell -width-auto">
                    <img src="/dist/img/logos/logo-synergy-gray.svg" width="240" alt="Synergy">
                </div>

                <div class="grid__cell -width-auto">
                    <img src="/dist/img/logos/logo-synergy-light.svg" width="240" alt="Synergy">
                </div>
            </div>
        </div>
    </section>
@endsection
