@extends('pages.layout')

@section('title', 'Аккордеон')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="-text-uppercase">Аккордеон</h1>
        </div>

        <div class="container">
            <div>
                @component('components.accordion', [
                    'title' => 'Чего мне ожидать от этого интенсива? Что конкретно я получу?',
                ])
                    @slot('content')
                        <p>На интенсиве Александр детально разберет 8 направлений бизнеса - привлечение клиентов, продажи, развитие, управление, продукт, персонал, финансы,  безопасность. По каждому направлению будут даны ключевые факторы успеха - это детали, от которых зависит будет в этом направлении хороший результат или нет. Понимая эти факторы вы сможете оценить, какие пробелы есть в вашем бизнесе и увидеть как их ликвидировать.</p>

                        <p>По окончанию интенсива у вас будет план внедрения новых решений в своем бизнес. Какой конкретный результат вы  благодаря этому получите будет зависеть от того, насколько вы этой информацией сами сможете воспользоваться. Если вам нужна будет помощь, то можете записаться на День разборов.</p>
                    @endslot
                @endcomponent

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Для кого проводится мероприятие:',
                    'subtitle' => 'Какой-нибудь подзаголовок',
                ])
                    @slot('content')
                        <p>Интенсив в первую очередь для собственников и генеральных директоров компаний. Возможно участие некоторые руководителей, если они приходят вместе с владельцем или при отдельном согласовании с Организатором.</p>
                    @endslot
                @endcomponent

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Что такое день разборов?',
                ])
                    @slot('content')
                        <p>21 ноября пройдет живая встреча с разборами кейсов участников. Цель разборов - помочь с внедрением новых решений в вашем бизнесе. Каждый участник приходит на разбор со списком трудностей, которые не позволяют его бизнесу вырасти и Александр помогает выработать эффективные решения, исходя из своего профессионального опыта.</p>
                    @endslot
                @endcomponent
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="php" data-language="blade">{{
"component('components.accordion', [
    'collapsed' => true, // свернуть по-умолчанию
    'title' => 'Заголовок',
    'subtitle' => 'Подзаголовок',
])
    slot('content')
        Подробное описание или другой контент
    endslot
endcomponent"
                }}</code>
            </pre>

            <pre>
                <code class="html" data-language="html">{{
'<div class="accordion --collapsed" data-accordion>
    <div class="accordion__toggle" data-accordion-toggle>
        <div class="accordion__icon">
            <span></span>
            <span></span>
        </div>

        <div class="accordion__heading">
            <div class="accordion__title">Заголовок</div>
            <div class="accordion__subtitle">Подзаголовок</div>
        </div>
    </div>

    <div class="accordion__body" data-accordion-body>Подробное описание или другой контент</div>
</div>'
                }}</code>
            </pre>
        </div>

        <div class="container">
            <div data-accordion-group>
                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Развитие',
                    'subtitle' => 'Как создать стратегию, которая будет реально работать, а не лежать бумажкой на столе',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Обычно на стратегию у руководителя либо нет времени, либо она сводится к выездному мозговому штурму на 3 дня, после которого 90% решений так и остается на бумаге.</p>

                        <p>Чтобы компания  развивалась системно, а не просто плыла по течению нужно проработать 10 факторов:</p>

                        <ul>
                            <li>Прописать цель (глобальную, на 1 год, 3 года, 10 лет)</li>
                            <li>Прописать принципы и стратегию движения к целям</li>
                            <li>Настроить взаимосвязь ежедневных задач компании со стратегией и целью</li>
                            <li>Настроить система отслеживания ключевых показателей</li>
                            <li>Прописать соглашение с партнерами (если больше 1 собственника)</li>
                            <li>Прописать сильные/слабые стороны компании, возможности и риски</li>
                            <li>Прописать ключевые компетенции</li>
                            <li>Прописать лимитирующие факторы</li>
                            <li>Прописать ключевые факторы успеха бизнеса</li>
                            <li>Четко определить бизнес-модель</li>
                        </ul>
                    @endslot
                @endcomponent

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Управление',
                    'subtitle' => 'Как эффективно управлять тысячами задач в компании и не увязнуть в рутине',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Когда бизнес растет, количество задач увеличивается геометрически. Часто собственники либо пытаются сами все контролировать и задыхаются в операционке, либо отпускают вожжи и “делегируют”, что приводит к ухудшению качества продукта, безответственным растратам бюджета и росту неэффективности.</p>

                        <p>Решение заключается в том, чтобы построить структуру управления и регламенты операционной деятельности следующим образом:</p>

                        <ul>
                            <li>Структурировать систему управления</li>
                            <li>Настроить процесс постановки задач</li>
                            <li>Настроить процесс контроля и исполнения задач</li>
                            <li>Настроить процесс приемки задач</li>
                            <li>Настроить систему показателей компании</li>
                            <li>Настроить процесс коммуникации в компании</li>
                            <li>Внедрить систему отчетности сотрудников</li>
                            <li>Настроить софт по управлению задачами</li>
                        </ul>
                    @endslot
                @endcomponent
            </div>
        </div>

        <div class="container">
            <h3 class="-color-indigo-80">Пример использования</h3>

            <pre>
                <code class="php" data-language="blade">{{
"component('components.accordion', [
    'collapsed' => true, // свернуть по-умолчанию
    'title' => 'Заголовок',
    'subtitle' => 'Подзаголовок',
    'class' => '--program',
])
    slot('content')
        Подробное описание или другой контент
    endslot
endcomponent"
                }}</code>
            </pre>
        </div>
    </section>
@endsection