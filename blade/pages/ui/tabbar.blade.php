@extends('pages.layout')

@section('title', 'Вкладки')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Вкладки</h1>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Со скроллом</h3>

            <div data-tabbar>
                @component('components.tabbar', [
                    'scrollable' => true,
                    'tabs' => [
                        ['id' => 'first', 'label' => 'Первая вкладка'],
                        ['id' => 'second', 'label' => 'Следующая вкладка'],
                        ['id' => 'third', 'label' => 'Вкладка c иконкой', 'icon' => '#files'],
                        ['id' => 'fourth', 'label' => 'Неактивная вкладка', 'disabled' => true],
                        ['id' => 'fifth', 'label' => 'Еще одна вкладка'],
                        ['id' => 'sixth', 'label' => 'Вот здесь еще одна'],
                        ['id' => 'seventh', 'label' => 'Ладно последняя'],
                    ],
                ])
                @endcomponent

                <div class="hidden" data-tabbar-page="first">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut cumque, deserunt dicta eaque eos error excepturi laborum molestiae nesciunt nisi nobis obcaecati pariatur praesentium quaerat recusandae tempore veniam voluptatum.
                </div>

                <div class="hidden" data-tabbar-page="second">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequuntur deleniti, eaque ex id in inventore itaque molestiae nemo neque numquam obcaecati reprehenderit repudiandae, sequi sint suscipit ut vitae voluptas?
                </div>

                <div class="hidden" data-tabbar-page="third">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolorum ipsam itaque nisi placeat possimus quidem reiciendis soluta. Aliquid amet exercitationem ipsa nemo, non perferendis quidem reprehenderit sunt voluptates voluptatum.
                </div>

                <div class="hidden" data-tabbar-page="fourth">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi aperiam culpa cumque earum est, expedita facere facilis labore laboriosam minus modi nesciunt odit placeat porro, praesentium quam quidem voluptatibus?
                </div>

                <div class="hidden" data-tabbar-page="fifth">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut impedit minima quasi ratione? Accusantium delectus dolores ipsa praesentium! Ipsum, maiores nobis odit quia quisquam voluptas! Enim id minus nam pariatur.
                </div>

                <div class="hidden" data-tabbar-page="sixth">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ipsam labore mollitia natus odit, porro provident quae quisquam quos soluta? A ad amet eaque, harum id possimus quaerat temporibus? Magni.
                </div>

                <div class="hidden" data-tabbar-page="seventh">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam animi aspernatur, blanditiis consequuntur distinctio eligendi id molestias nesciunt nihil perspiciatis quia recusandae! Alias assumenda nam quasi rem, rerum vel!
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">С переносом</h3>

            <div data-tabbar>
                @component('components.tabbar', [
                    'tabs' => [
                        ['label' => 'Первая вкладка'],
                        ['label' => 'Следующая вкладка', 'active' => true],
                        ['label' => 'Вкладка c иконкой', 'icon' => '#files'],
                        ['label' => 'Неактивная вкладка', 'disabled' => true],
                        ['label' => 'Еще одна вкладка'],
                        ['label' => 'Вот здесь еще одна'],
                        ['label' => 'Ладно последняя'],
                    ],
                ])
                @endcomponent

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut cumque, deserunt dicta eaque eos error excepturi laborum molestiae nesciunt nisi nobis obcaecati pariatur praesentium quaerat recusandae tempore veniam voluptatum.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequuntur deleniti, eaque ex id in inventore itaque molestiae nemo neque numquam obcaecati reprehenderit repudiandae, sequi sint suscipit ut vitae voluptas?
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolorum ipsam itaque nisi placeat possimus quidem reiciendis soluta. Aliquid amet exercitationem ipsa nemo, non perferendis quidem reprehenderit sunt voluptates voluptatum.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi aperiam culpa cumque earum est, expedita facere facilis labore laboriosam minus modi nesciunt odit placeat porro, praesentium quam quidem voluptatibus?
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut impedit minima quasi ratione? Accusantium delectus dolores ipsa praesentium! Ipsum, maiores nobis odit quia quisquam voluptas! Enim id minus nam pariatur.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ipsam labore mollitia natus odit, porro provident quae quisquam quos soluta? A ad amet eaque, harum id possimus quaerat temporibus? Magni.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam animi aspernatur, blanditiis consequuntur distinctio eligendi id molestias nesciunt nihil perspiciatis quia recusandae! Alias assumenda nam quasi rem, rerum vel!
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">По центру</h3>

            <div data-tabbar>
                @component('components.tabbar', [
                    'centered' => true,
                    'tabs' => [
                        ['label' => 'Первая вкладка'],
                        ['label' => 'Следующая вкладка'],
                        ['label' => 'Вкладка c иконкой', 'icon' => '#files', 'active' => true],
                        ['label' => 'Неактивная вкладка', 'disabled' => true],
                        ['label' => 'Еще одна вкладка'],
                        ['label' => 'Вот здесь еще одна'],
                        ['label' => 'Ладно последняя'],
                    ],
                ])
                @endcomponent

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut cumque, deserunt dicta eaque eos error excepturi laborum molestiae nesciunt nisi nobis obcaecati pariatur praesentium quaerat recusandae tempore veniam voluptatum.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequuntur deleniti, eaque ex id in inventore itaque molestiae nemo neque numquam obcaecati reprehenderit repudiandae, sequi sint suscipit ut vitae voluptas?
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolorum ipsam itaque nisi placeat possimus quidem reiciendis soluta. Aliquid amet exercitationem ipsa nemo, non perferendis quidem reprehenderit sunt voluptates voluptatum.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi aperiam culpa cumque earum est, expedita facere facilis labore laboriosam minus modi nesciunt odit placeat porro, praesentium quam quidem voluptatibus?
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut impedit minima quasi ratione? Accusantium delectus dolores ipsa praesentium! Ipsum, maiores nobis odit quia quisquam voluptas! Enim id minus nam pariatur.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita ipsam labore mollitia natus odit, porro provident quae quisquam quos soluta? A ad amet eaque, harum id possimus quaerat temporibus? Magni.
                </div>

                <div class="hidden" data-tabbar-page>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam animi aspernatur, blanditiis consequuntur distinctio eligendi id molestias nesciunt nihil perspiciatis quia recusandae! Alias assumenda nam quasi rem, rerum vel!
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="php" data-language="blade">{{
"<div data-tabbar>
    component('components.tabbar', [
        'scrollable' => true, // со скроллом или без
        'centered' => true, // по центру или нет
        'tabs' => [ // вкладки
            ['id' => 'first', 'label' => 'Первая вкладка'], // id не обязателен, но можно указать такой же как в data-tabbar-page='...'
            ['id' => 'second', 'label' => 'Следующая вкладка', 'active' => true], // указана активная вкладкка, по-умолчанию всегда первая
            ['id' => 'third', 'label' => 'Вкладка c иконкой', 'icon' => '#files'], // с иконкой
            ['id' => 'fourth', 'label' => 'Неактивная вкладка', 'disabled' => true], // неактивная
        ],
        'class' => '', // дополнительные классы
    ])
    endcomponent

    <div class=\"hidden\" data-tabbar-page=\"first\">
        Содержимое первой вкладки
    </div>

    <div class=\"hidden\" data-tabbar-page=\"second\">
        Содержимое второй вкладки
    </div>

    <div class=\"hidden\" data-tabbar-page=\"third\">
        Содержимое третьей вкладки
    </div>

    <div class=\"hidden\" data-tabbar-page=\"fourth\">
        Содержимое четвертой вкладки
    </div>
</div>"
                }}</code>
            </pre>

            <pre>
                <code class="html" data-language="html">{{
'<div data-tabbar>
    <div class="tabbar"> <!-- --scrollable если нужен скролл, --centered если надо выровнять по центру -->
        <div class="tabbar__toggle" data-tabbar-toggle>
            <div>Темы: <span class="tabbar__toggle-name" data-tabbar-toggle-name></span></div>

            <div class="tabbar__toggle-arrow">
                <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
            </div>
        </div>

        <div class="tabbar__scroller">
            <div class="tabbar__wrapper">
                <div class="tabbar__tab" data-tabbar-tab="first">
                    <span>Первая вкладка</span>
                </div>

                <!-- Выбранная вкладка -->
                <div class="tabbar__tab active" data-tabbar-tab="second">
                    <span>Следующая вкладка</span>
                </div>

                <div class="tabbar__tab" data-tabbar-tab="third">
                    <span class="icon --large"><svg><use xlink:href="#files"></use></svg></span>
                    <span>Вкладка c иконкой</span>
                </div>

                <!-- Неактивная вкладка -->
                <div class="tabbar__tab disabled" data-tabbar-tab="fourth">
                    <span>Неактивная вкладка</span>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden" data-tabbar-page="first">
        Содержимое первой вкладки
    </div>

    <div class="hidden" data-tabbar-page="second">
        Содержимое второй вкладки
    </div>

    <div class="hidden" data-tabbar-page="third">
        Содержимое третьей вкладки
    </div>

    <div class="hidden" data-tabbar-page="fourth">
        Содержимое четвертой вкладки
    </div>
</div>'
                }}</code>
            </pre>
        </div>
    </section>
@endsection
