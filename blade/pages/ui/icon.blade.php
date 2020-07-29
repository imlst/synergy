<? $title = 'Icon' ?>

@extends('pages.layout')

@section('title', $title.' • '.$base_title)

@section('content')
    <section class="section --bg-guide">
        <div class="container">
            <h2 class="-font-normal"><?= $title ?></h2>
        </div>

        <div class="container">
            <h3 class="-font-normal">Иконки 16x16</h3>
            <div class="grid" data-icons-16x16></div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Иконки 24x24</h3>
            <div class="grid" data-icons-24x24></div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Иконки 48x48</h3>
            <div class="grid" data-icons-48x48></div>
        </div>

        <div class="container">
            <h3 class="-font-normal">Пример использования</h3>

            <pre>
                <code class="html" data-language="html">{{
'<!-- Обычная иконка по размеру текста -->
<span class="icon"><svg><use xlink:href="#clock"></use></svg></span>

<!-- Маленькая иконка 16px -->
<span class="icon --small"><svg><use xlink:href="#clock"></use></svg></span>

<!-- Большая иконка 24px -->
<span class="icon --large"><svg><use xlink:href="#clock"></use></svg></span>

<!-- Цветная иконка -->
<span class="icon -color-blue"><svg><use xlink:href="#clock"></use></svg></span>'
                }}</code>
            </pre>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const interval1 = setInterval(() => {
                if (document.querySelector('#svg-icons-16x16')) {
                    document.querySelector('#svg-icons-16x16').querySelectorAll('symbol').forEach(item => {
                        const iconID = item.getAttribute('id');
                        const gridCell = document.createElement('div');

                        gridCell.className = 'grid__cell --xs-6 --xsm-4 --md-3 --lg-2';
                        gridCell.innerHTML = `
                            <div class="-text-center">
                                <span class="icon" style="font-size: 16px;"><svg><use xlink:href="#${iconID}"></use></svg></span>
                                <div class="-mt-10" style="font-family: monospace;">${iconID}</div>
                            </div>`;

                        document.querySelector('[data-icons-16x16]').appendChild(gridCell);
                        clearInterval(interval1);
                    });
                }
            }, 10);

            const interval2 = setInterval(() => {
                if (document.querySelector('#svg-icons-24x24')) {
                    document.querySelector('#svg-icons-24x24').querySelectorAll('symbol').forEach(item => {
                        const iconID = item.getAttribute('id');
                        const gridCell = document.createElement('div');

                        gridCell.className = 'grid__cell --xs-6 --xsm-4 --md-3 --lg-2';
                        gridCell.innerHTML = `
                            <div class="-text-center">
                                <span class="icon" style="font-size: 24px;"><svg><use xlink:href="#${iconID}"></use></svg></span>
                                <div class="-mt-10" style="font-family: monospace;">${iconID}</div>
                            </div>`;

                        document.querySelector('[data-icons-24x24]').appendChild(gridCell);
                        clearInterval(interval2);
                    });
                }
            }, 10);

            const interval3 = setInterval(() => {
                if (document.querySelector('#svg-icons-48x48')) {
                    document.querySelector('#svg-icons-48x48').querySelectorAll('symbol').forEach(item => {
                        const iconID = item.getAttribute('id');
                        const gridCell = document.createElement('div');

                        gridCell.className = 'grid__cell --xs-6 --xsm-4 --md-3 --lg-2';
                        gridCell.innerHTML = `
                            <div class="-text-center">
                                <span class="icon" style="font-size: 48px;"><svg><use xlink:href="#${iconID}"></use></svg></span>
                                <div class="-mt-10" style="font-family: monospace;">${iconID}</div>
                            </div>`;

                        document.querySelector('[data-icons-48x48]').appendChild(gridCell);
                        clearInterval(interval3);
                    });
                }
            }, 10);
        });
    </script>
@endsection
