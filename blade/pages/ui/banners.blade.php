@extends('pages.layout')

@section('title', 'Баннеры')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Баннеры</h1>
        </div>

        <div class="container -mb-20">
            <h3 class="-color-indigo-80">Баннеры разделов</h3>
        </div>

        <section class="section --bg-grey" data-customizable-block='{ "id": "section-banners", "name": "Баннеры разделов" }'>
            <div class="container">
                <div class="grid">
                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'work',
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'person',
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'health',
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'family',
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </section>

        <section class="section --bg-grey" data-customizable-block='{ "id": "section-banners-with-desc", "name": "Баннеры разделов с описанием" }'>
            <div class="container">
                <div class="grid">
                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'work',
                            'descriptions' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'person',
                            'descriptions' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'health',
                            'descriptions' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'family',
                            'descriptions' => true,
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </section>

        <section class="section" data-customizable-block='{ "id": "section-banners", "name": "Баннеры разделов" }'>
            <div class="container">
                <div class="grid">
                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'work',
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'person',
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'health',
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'family',
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </section>

        <section class="section" data-customizable-block='{ "id": "section-banners-with-desc", "name": "Баннеры разделов с описанием" }'>
            <div class="container">
                <div class="grid">
                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'work',
                            'descriptions' => true,
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'person',
                            'descriptions' => true,
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'health',
                            'descriptions' => true,
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>

                    <div class="grid__cell --xsm-6 --md-4 --lg-3">
                        @component('components.section-banner', [
                            'banner' => 'family',
                            'descriptions' => true,
                            'colored' => true,
                        ])
                        @endcomponent
                    </div>
                </div>
            </div>
        </section>

        <div class="-mb-60">
            <div class="container -mb-20">
                <h3 class="-color-indigo-80">Подписка на алгоритмы Работы</h3>
            </div>

            @component('blocks.banner-work-subscribe') @endcomponent
        </div>

        <div class="-mb-60">
            <div class="container -mb-20">
                <h3 class="-color-indigo-80">Интенсив «Сильные Решения»</h3>
            </div>

            @component('blocks.banner-strong-solutions') @endcomponent
        </div>

        <div class="-mb-60">
            @component('blocks.banner-strong-solutions-v2') @endcomponent
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Интенсив «Сильные Решения» вертикальный</h3>
        </div>

        <div class="sidebar-container --left -d-none -md-d-block">
            <div class="sidebar-container__bar">
                @component('blocks.banner-strong-solutions-vertical') @endcomponent
            </div>

            <div class="sidebar-container__bar">
                @component('blocks.banner-strong-solutions-vertical-v2') @endcomponent
            </div>
        </div>
    </section>
@endsection
