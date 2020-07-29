<? $title = 'Pagination' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => false,
                'pages' => 5,
                'current' => 1,
            ])
            @endcomponent
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => false,
                'pages' => 6,
                'current' => 1,
            ])
            @endcomponent
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => true,
                'pages' => 10,
                'current' => 1,
            ])
            @endcomponent
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => true,
                'pages' => 10,
                'current' => 2,
            ])
            @endcomponent
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => true,
                'pages' => 10,
                'current' => 4,
            ])
            @endcomponent
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => true,
                'pages' => 10,
                'current' => 5,
            ])
            @endcomponent
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => true,
                'pages' => 10,
                'current' => 7,
            ])
            @endcomponent
        </div>

        <div class="container">
            @component('components.ui.pagination', [
                'steps' => true,
                'pages' => 10,
                'current' => 10,
            ])
            @endcomponent
        </div>
    </section>
@endsection
