@extends('pages.layout')

@section('title', 'Интенсив «Сильные Решения»')

@section('content')
    @component('components.header', [
        'auth' => true,
        'firstLevel' => true,
        'section' => 'work',
        'secondLevel' => [
            ['name' => 'Алгоритмы'],
            ['name' => 'Мероприятия', 'active' => true],
            ['name' => 'Анкета'],
        ],
    ])
    @endcomponent

    <section class="strong-solutions-start hidden" data-customizable-block='{ "id": "strong-solutions-start", "name": "Стартовая секция «Сильные решения»", "group": "strong-solutions-start" }'>
        <div class="container strong-solutions-start__container">
            <div class="oblique-caption">
                <div>29 - 30 января <span class="-color-orange">2-х дневный интенсив*</span></div>
            </div>

            <div class="strong-solutions-start__content">
                <div class="h1 --large -text-uppercase">Сильные решения</div>

                <div class="strong-solutions-start__desc">Для собственников и топ&#8209;менеджеров, которые хотят выйти из рутины и масштабировать свой бизнес</div>

                <div class="grid strong-solutions-start__actions">
                    <div class="grid__cell --sm-by-content">
                        <a href="#strong-solutions-register" class="button --orange --large --white-bg-onhover">Забронировать место</a>
                    </div>

                    <div class="grid__cell --sm-by-content">
                        <a href="javascript:void(0);" class="icon-string strong-solutions-start__play-button" data-video-modal-show='{ "id": "368339115", "host": "vimeo" }'>
                            <span class="icon"><svg><use xlink:href="#video-circled-filled"></use></svg></span>
                            <span>Смотреть видео</span>
                        </a>
                    </div>
                </div>

                <div class="-mt-20 -sm-mt-30 -sm-font-size-18px"><span class="-color-orange">*</span> Только живое участие в Москве</div>
            </div>

            <img src="/dist/img/pages/strong-solutions/start/av.png" class="strong-solutions-start__av" alt="">
        </div>
    </section>

    <section class="strong-solutions-start" data-customizable-block='{ "id": "strong-solutions-start-video", "name": "Стартовая секция «Сильные решения»", "group": "strong-solutions-start" }'>
        <div class="container strong-solutions-start__container">
            <div class="oblique-caption">
                <div>29 - 30 января <span class="-color-orange">2-х дневный интенсив*</span></div>
            </div>

            <div class="strong-solutions-start__content">
                <div class="h1 --large -text-uppercase">Сильные решения</div>

                <div class="strong-solutions-start__desc">Для собственников и топ&#8209;менеджеров, которые хотят выйти из рутины и масштабировать свой бизнес</div>

                <a href="#strong-solutions-register" class="button --orange --large --white-bg-onhover">Забронировать место</a>

                <div class="-mt-20 -sm-mt-30 -sm-font-size-18px"><span class="-color-orange">*</span> Только живое участие в Москве</div>
            </div>

            <div class='embed-video'>
                <div class='embed-video__container'>
                    <iframe src="https://player.vimeo.com/video/368339115" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="strong-solutions-start-v2 hidden" data-customizable-block='{ "id": "strong-solutions-start-v2", "name": "Стартовая секция «Сильные решения»", "group": "strong-solutions-start" }'>
        <div class="container strong-solutions-start-v2__container">
            <div class="oblique-caption">
                <div>29 - 30 января <span class="-color-orange">2-х дневный интенсив*</span></div>
            </div>

            <div class="strong-solutions-start-v2__content">
                <div class="h1 --large -text-uppercase">Сильные решения</div>

                <div class="strong-solutions-start-v2__desc -color-indigo-80">Для собственников и топ&#8209;менеджеров, которые хотят выйти из рутины и масштабировать свой бизнес</div>

                <a href="#strong-solutions-register" class="button --blue --large --shadowed">Забронировать место</a>

                <div class="-color-indigo-35 -mt-20 -sm-mt-30 -sm-font-size-18px"><span class="-color-orange">*</span> Только живое участие в Москве</div>
            </div>

            <div class="strong-solutions-start-v2__globe">
                <div class="strong-solutions-start-v2__globe-wrap">
                    <button class="button --blue --icon --invert --shadowed" data-video-modal-show='{ "id": "368339115", "host": "vimeo" }'>
                        <span class="icon"><svg><use xlink:href="#video"></use></svg></span>
                    </button>

                    <img src="/dist/img/pages/strong-solutions/start/globe.svg" alt="Сильные решения">
                </div>

                <a href="javascript:void(0);" class="icon-string -color-blue -font-semibold" data-video-modal-show='{ "id": "368339115", "host": "vimeo" }'>
                    <span class="icon --large"><svg><use xlink:href="#video-circled-filled"></use></svg></span>
                    <span>Смотреть видео</span>
                </a>
            </div>
        </div>
    </section>

    <section class="strong-solutions-executives">
        <div class="container">
            <h2 class="--large -text-center">Есть 3 типа руководителей</h2>

            <div class="strong-solutions-executives__tiles">
                <div class="strong-solutions-executives__tile">
                    <img src="/dist/img/pages/strong-solutions/executives/self-taught.svg" alt="Самоучка">
                    <h5 class="--large">Самоучка</h5>
                    <div class="strong-solutions-executives__tile-desc">У него сильная чуйка. Он знает свой бизнес, понимает своих клиентов и во всех решениях опирается на свой личный опыт</div>
                </div>

                <div class="strong-solutions-executives__tile">
                    <img src="/dist/img/pages/strong-solutions/executives/scientist.svg" alt="Ученый">
                    <h5 class="--large">Ученый</h5>
                    <div class="strong-solutions-executives__tile-desc">Он эрудит. За плечами бизнес-образование, в голове много идей и концепций. В работе опирается на лучшую практику других компаний</div>
                </div>

                <div class="strong-solutions-executives__tile">
                    <img src="/dist/img/pages/strong-solutions/executives/master.svg" alt="Мастер">
                    <h5 class="--large">Мастер</h5>
                    <div class="strong-solutions-executives__tile-desc">У него есть уникальная суперкомпетенция. В нескольких вещах он разбирается очень глубоко и весь бизнес построен вокруг его личного мастерства</div>
                </div>
            </div>

            <h3 class="strong-solutions-executives__bottom-caption">Каждый из них по-своему силен. Но после первых результатов у них начнутся проблемы</h3>
        </div>
    </section>

    <section class="strong-solutions-disease">
        <div class="strong-solutions-disease__arrow"></div>

        <div class="container">
            <h2 class="--large -text-center">5 симптомов болезни компании</h2>
            <div class="-color-indigo-80 -text-center -sm-font-size-18px">Если нашли хоть один, нужно срочно принимать меры</div>

            <div class="strong-solutions-disease__tiles">
                <div class="strong-solutions-disease__tile">
                    <img src="/dist/img/pages/strong-solutions/disease/problems.svg" alt="Безнадежье">
                    <h5 class="--large">Безнадежье</h5>
                    <div class="strong-solutions-disease__tile-desc">Вы прикладываете много усилий, а денег больше не становится</div>
                </div>

                <div class="strong-solutions-disease__tile">
                    <img src="/dist/img/pages/strong-solutions/disease/income-not-growing.svg" alt="Американские горки">
                    <h5 class="--large">Американские горки</h5>
                    <div class="strong-solutions-disease__tile-desc">То подъем, то резкое падение. То все хорошо, то очень плохо</div>
                </div>

                <div class="strong-solutions-disease__tile">
                    <img src="/dist/img/pages/strong-solutions/disease/routine.svg" alt="Мышиная возня">
                    <h5 class="--large">Мышиная возня</h5>
                    <div class="strong-solutions-disease__tile-desc">Вы живете в операционке, на стратегические вопросы нет времени</div>
                </div>

                <div class="strong-solutions-disease__tile">
                    <img src="/dist/img/pages/strong-solutions/disease/incomprehension.svg" alt="Блуждание в потемках">
                    <h5 class="--large">Блуждание в потемках</h5>
                    <div class="strong-solutions-disease__tile-desc">У вас нет ясного понимания, что делать. То, что работало в бизнесе раньше, больше не работает</div>
                </div>

                <div class="strong-solutions-disease__tile">
                    <img src="/dist/img/pages/strong-solutions/disease/inefficiently.svg" alt="Слабая команда">
                    <h5 class="--large">Слабая команда</h5>
                    <div class="strong-solutions-disease__tile-desc">Сотрудники не справляются с задачами, других найти вы не можете и постоянно доделываете за них</div>
                </div>
            </div>
        </div>
    </section>

    <section class="strong-solutions-splited">
        <div class="container">
            <div class="strong-solutions-splited__block -lg-ml-100">
                <h2 class="--large">В чем суть интенсива</h2>
                <p class="-color-indigo-80 -md-max-width-380px">Чтобы компания показывала стабильный рост руководителю нужно уметь регулярно генерировать сильные решения.</p>

                <div class="strong-solutions-splited__block-content">
                    <h3>Как генерировать сильные решения?</h3>

                    <ul class="numbered-steps --large">
                        <li>
                            <div>
                                <div class="numbered-steps__caption">Знать за чем следить</div>
                                <div class="-color-indigo-80">А значит разбираться во всех важных аспектах бизнеса, а не только в том, что нравится</div>
                            </div>
                        </li>

                        <li>
                            <div>
                                <div class="numbered-steps__caption">Понимать, на что влиять</div>
                                <div class="-color-indigo-80">А значит понимать ключевые факторы успеха в каждом значимом процессе бизнеса</div>
                            </div>
                        </li>

                        <li>
                            <div>
                                <div class="numbered-steps__caption">Действовать, когда это нужно</div>
                                <div class="-color-indigo-80">А не откладывать на потом, перекладывать ответственность и избегать трудностей</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <img src="/dist/img/pages/strong-solutions/splited/vision.svg" class="strong-solutions-splited__vision" alt="">
            </div>
        </div>
    </section>

    <section class="strong-solutions-splited -pt-0">
        <div class="container">
            <div class="strong-solutions-splited__block -lg-mr-100">
                <div class="strong-solutions-splited__block-content -sm-ml-auto">
                    <h2 class="--large">За 2 дня вы переосмыслите свой бизнес</h2>

                    <ul class="numbered-steps --large --icons">
                        <li>
                            <img src="/dist/img/pages/strong-solutions/splited/icon-compass.png" class="numbered-steps__icon" alt="">

                            <div>
                                <div class="numbered-steps__caption">Увидите всю картину</div>
                                <div class="-color-indigo-80">Детально проработаете 8 главных направлений в своем бизнесе</div>
                            </div>
                        </li>

                        <li>
                            <img src="/dist/img/pages/strong-solutions/splited/icon-diversify.png" class="numbered-steps__icon" alt="">

                            <div>
                                <div class="numbered-steps__caption">Поймете корень проблем</div>
                                <div class="-color-indigo-80">Увидите отсутствие каких ключевых факторов привело к текущим проблемам в компании</div>
                            </div>
                        </li>

                        <li>
                            <img src="/dist/img/pages/strong-solutions/splited/icon-knowledge.png" class="numbered-steps__icon" alt="">

                            <div>
                                <div class="numbered-steps__caption">Сгенерируете новые решения</div>
                                <div class="-color-indigo-80">Составите план действий по внедрению новых решений в своем бизнесе</div>
                            </div>
                        </li>
                    </ul>
                </div>

                <img src="/dist/img/pages/strong-solutions/splited/perspectives.svg" class="strong-solutions-splited__perspectives" alt="">
            </div>
        </div>
    </section>

    <section class="strong-solutions-results">
        <div class="container">
            <h2 class="--large -text-center">Результат интенсива - <br>больше сильных решений</h2>

            <div class="strong-solutions-results__grid">
                <div class="strong-solutions-results__tile">
                    <img src="/dist/img/pages/strong-solutions/results/newbie.svg" alt="">

                    <div class="strong-solutions-results__tile-caption">Если вы начинаете</div>

                    <ul>
                        <li>Поймете над чем работать в первую очередь</li>
                        <li>Ускорите свой рост за счет готовых алгоритмов</li>
                        <li>Создадите стратегию развития</li>
                    </ul>
                </div>

                <div class="strong-solutions-results__tile">
                    <img src="/dist/img/pages/strong-solutions/results/experienced.svg" class="--up" alt="">

                    <div class="strong-solutions-results__tile-caption">Если вы давно в бизнесе</div>

                    <ul>
                        <li>Увидите слепые зоны, которые вас тормозят</li>
                        <li>Сделаете бизнес более стабильным и предсказуемым</li>
                        <li>Освободите свое время для главного</li>
                    </ul>
                </div>
            </div>

            <div class="-d-flex">
                <a href="#strong-solutions-register" class="button --blue --shadowed --large -mx-auto">Забронировать место</a>
            </div>
        </div>
    </section>

    <section class="section --wide">
        <div class="container">
            <h2 class="--large">Программа</h2>
            <h3 class="--large">День 1</h3>

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

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Персонал',
                    'subtitle' => 'Ключевые факторы найма, адаптации, мотивации и увольнения персонала',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Для большинства руководителей тема сотрудников – это самая большая боль. Если они плохие, то делают не то и не так, перекладывают ответственность, нарушают сроки, не хотят работать. Если хорошие, то не понятно как мотивировать и что делать, если они внезапно уйдут, где искать новых, как правильно обучать и так далее.</p>

                        <p>Чтобы построить надежную предсказуемую систему, которая позволяет нанимать лучших людей и не зависеть от настроения звезд в команде, необходимо проработать 14 факторов:</p>

                        <ul>
                            <li>Описать все роли в компании</li>
                            <li>Выстроить система HR-отчетности</li>
                            <li>Выстроить воронку найма</li>
                            <li>Внедрить систему автоматизации найма и сопровождения</li>
                            <li>Настроить систему приглашения на собеседование</li>
                            <li>Настроить систему проведения собеседований</li>
                            <li>Сформировать принципы отбора кандидатов</li>
                            <li>Настроить систему вывода кандидатов</li>
                            <li>Выстроить систему мотивации</li>
                            <li>Создать систему обучения</li>
                            <li>Настроить систему обратной связи от сотрудников</li>
                            <li>Настроить систему оценки персонала</li>
                            <li>Внедрить систему учета работы сотрудников</li>
                            <li>Выстроить систему увольнения</li>
                        </ul>
                    @endslot
                @endcomponent

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Продукт',
                    'subtitle' => 'Ключевые факторы в цепочке разработки и совершенствования продукта',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Продукт – это основа бизнеса. Если продукт крутой, то клиенты с радостью отдают за него деньги. Если средний, то приходится убеждать клиента и конкурировать по цене. Если плохой, то ты быстро вылетаешь из бизнеса. Чаще всего продукт “случается” как продолжение сильных сторон собственника. Он в чем-то хорошо разбирается и вокруг его талантов нарастает организация. На начальных этапах этого бывает достаточно, но для стабильного роста продукт нужно проектировать и совершенствовать под вашего клиента.</p>

                        <p>Вот 9 факторов, которые позволяют создать систему разработки и улучшения продукта:</p>

                        <ul>
                            <li>Прописать детально целевую аудиторию</li>
                            <li>Прописать ключевые оферы для клиентов</li>
                            <li>Выстроить продуктовую линейку</li>
                            <li>Настроить систему получения обратной связи</li>
                            <li>Настроить систему анализа конкурентов</li>
                            <li>Внедрить систему показателей и отчетности</li>
                            <li>Внедрить систему контроля качества производства</li>
                            <li>Внедрить систему планирования развития продукта</li>
                            <li>Внедрить автоматизацию создания продукта</li>
                        </ul>
                    @endslot
                @endcomponent
            </div>
        </div>

        <div class="container">
            <h3 class="--large">День 2</h3>

            <div data-accordion-group>
                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Привлечение клиентов',
                    'subtitle' => 'Ключевые факторы бесперебойного потока лидов',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Самая частая проблема бизнеса – недостаточно клиентов. Непонятно как их привлекать, рекламные бюджеты сливаются, а результата нет. Огромная конкуренция, у людей настолько взгляд замылен рекламой, что они ни на что не реагируют. Нет хороших специалистов, а если есть, то непонятно как их контролировать. Все это симптомы, которые явно говорят только об одном – непрофессионализм.</p>

                        <p>У людей были, есть и будут неудовлетворенные потребности. Если вы их понимаете и ваш продукт может их удовлетворить, то привлечение клиентов – это просто вопрос техники. Есть 28 факторов, которые нужно проработать, чтобы иметь стабильный поток заказов в своем бизнесе:</p>

                        <ul>
                            <li>Определить каналы коммуникации с клиентом</li>
                            <li>Выстроить воронку привлечения клиента</li>
                            <li>Описать роли в маркетинге</li>
                            <li>Выстроить систему показателей и отчетности</li>
                            <li>Внедрить автоматизацию маркетинга</li>
                            <li>Разработать продающие истории</li>
                            <li>Разработать продающие материалы</li>
                            <li>Настроить систему производства контента</li>
                            <li>Настроить систему управления репутацией</li>
                            <li>Выстроить работу с агентами влияния</li>
                            <li>Проработать дизайн компании</li>
                            <li>Проработать онлайн-рекламу (8 каналов)</li>
                            <li>Проработать офлайн-рекламу (6 каналов)</li>
                            <li>Настроить работу в своих соцсетях</li>
                            <li>Настроить работу сайта</li>
                            <li>Настроить систему рассылок</li>
                            <li>Настроить систему звонков</li>
                            <li>Настроить работу оффлайн-точек</li>
                        </ul>
                    @endslot
                @endcomponent

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Системные продажи',
                    'subtitle' => 'Ключевые факторы в создании, управлении и автоматизации отдела продаж',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Отдел продаж – это либо машина по зарабатыванию денег, либо дырявое ведро, через которое утекают ресурсы, созданные другими отделами вашей компании. Самое частое заблуждение собственника, что можно просто нанять руководителя продаж и делегировать ему весь процесс. Даже если он и сможет построить отдел продаж, эффективность его будет невысокой и контроль собственника над ключевой зоной своего бизнеса будет минимальный.</p>

                        <p>Чтобы отдел продаж работал надежно собственнику нужно понимать главные звенья системы и вместе с руководителем продаж проработать 30 факторов:</p>

                        <ul>
                            <li>Выстроить этапность работы с клиентами</li>
                            <li>Выстроить работу продавцов через задачи</li>
                            <li>Настроить систему сегментации клиентов</li>
                            <li>Выстроить систему найма продавцов</li>
                            <li>Прописать роли в продажах</li>
                            <li>Выстроить систему мотивация в продажах</li>
                            <li>Разработать систему обучения</li>
                            <li>Выстроить процесс аттестации сотрудников</li>
                            <li>Выстроить систему наставничества</li>
                            <li>Выстроить система отчетности</li>
                            <li>Выстроить систему планирования</li>
                            <li>Выстроить систему анализа план/факт</li>
                            <li>Настроить систему ценообразования</li>
                            <li>Настроить систему обратной связи маркетингу</li>
                            <li>Проработать список возражений</li>
                            <li>Создать скрипты продаж</li>
                            <li>Настроить систему автоматизации продаж</li>
                            <li>Настроить автоматизацию звонков</li>
                            <li>Внедрить сквозную аналитику</li>
                            <li>Настроить интеграцию с рассылками</li>
                            <li>Настроить систему сбора обратной связи с клиентом</li>
                            <li>Настроить система сбора и обработки рекламаций</li>
                            <li>Выстроить систему постпродажного обслуживания</li>
                        </ul>
                    @endslot
                @endcomponent

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Финансы',
                    'subtitle' => 'Главные финансовые показатели и система отчетности для собственника',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Очень часто собственник пускает управление финансами на самотек, считая это направление не таким важным, поскольку оно не генерирует напрямую деньги и требует затрат времени. Но это большое заблуждение, которое приводит к кассовым разрывам, неэффективным расходам и проблемам, которые стоят собственнику очень дорого и в деньгах, и во времени, и в энергии.</p>

                        <p>Налаженная финансовая система позволяет не только защитить от неприятностей, но и очень четко видеть все ключевые аспекты бизнеса, понимать реальную себестоимость продукта, привлечения клиента и эффективность сотрудников. Чтобы создать такую систему необходимо проработать 8 факторов:</p>

                        <ul>
                            <li>Внедрить систему сдачи отчетности госорганам</li>
                            <li>Внедрить систему отчетности по зарплатам для госорганов</li>
                            <li>Внедрить систему автоматизации бухучета</li>
                            <li>Внедрить систему сбора документов в компании</li>
                            <li>Разработать надежную юридическая структура компании</li>
                            <li>Внедрить систему бюджетирования</li>
                            <li>Внедрить систему сбора финансовой отчетности</li>
                            <li>Внедрить систему автоматизации финансов</li>
                            <li>Внедрить систему согласования и учета расходов</li>
                            <li>Внедрить систему расчета зарплат</li>
                        </ul>
                    @endslot
                @endcomponent

                @component('components.accordion', [
                    'collapsed' => true,
                    'title' => 'Безопасность',
                    'subtitle' => 'Юридические регламенты, договоры и отчеты, которые должны быть под контролем, чтобы не было неприятностей',
                    'class' => '--program',
                ])
                    @slot('content')
                        <p>Самый простой способ поставить свой бизнес под угрозу – не уделять внимание юридическим регламентам и защите своей собственности. Как только компания становится хоть чуть-чуть заметной мгновенно появляются люди, которые будут стремиться воспользоваться ресурсами собственника в своих интересах.</p>

                        <p>Чтоб создать надежную систему внешней и внутренней безопасности компании, необходимо проработать 8 факторов:</p>

                        <ul>
                            <li>Выстроить систему юридических отношений с клиентами</li>
                            <li>Выстроить систему  юридических отношений с подрядчиками</li>
                            <li>Выстроить систему  юридических отношений с партнерами</li>
                            <li>Внедрить систему учета доступов и паролей</li>
                            <li>Настроить систему юридических отношений внутри компании</li>
                            <li>Настроить систему юридических отношений с сотрудниками</li>
                            <li>Выстроить систему защиты базы клиентов</li>
                            <li>Защитить свою интеллектуальную собственность</li>
                        </ul>
                    @endslot
                @endcomponent
            </div>
        </div>
    </section>

    <section class="strong-solutions-splited -pt-0">
        <div class="container">
            <div class="strong-solutions-splited__block -lg-mr-100">
                <div class="strong-solutions-splited__av">
                    <img src="/dist/img/pages/strong-solutions/splited/av.png" alt="">

                    <ul class="strong-solutions-splited__av-social">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><svg><use xlink:href="#facebook"></use></svg></span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><svg><use xlink:href="#instagram"></use></svg></span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><svg><use xlink:href="#vk"></use></svg></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="strong-solutions-splited__block-content -sm-ml-auto">
                    <div class="-text-uppercase -font-2mass -font-bold -color-indigo-80 -font-size-12px -mb-10">Ведущий интенсива</div>
                    <h2 class="--large -sm-font-size-30px">Александр Волчек</h2>

                    <ul class="numbered-steps --large">
                        <li class="-sm-mb-40">
                            <div>12 лет реального опыта управления бизнесом</div>
                        </li>

                        <li class="-sm-mb-40">
                            <div>Генеральный директор “Мегаплан”: увеличил базу клиентов в 15 раз</div>
                        </li>

                        <li class="-sm-mb-40">
                            <div>Соучредитель и генеральный директор “Бизнес Молодость”: на момент старта работы оборот - 20 млн руб/год. На момент выхода - 700 млн руб/год</div>
                        </li>

                        <li class="-sm-mb-40">
                            <div>Основатель платформы покупки/продажи продуктов питания оптом АГРО24</div>
                        </li>

                        <li class="-align-items-center">
                            <div>Женат, трое детей</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="strong-solutions-planes">
        <div class="container">
            <h2 class="--large -text-center">Наставничество</h2>
            <div class="strong-solutions-planes__desc">Сразу после интенсива стартует закрытая группа, которую Александр Волчек будет вести в качестве наставника течение 3-х месяцев. Цель наставничества — помочь участникам внедрить новые решения в свой бизнес. За 3 месяца пройдет 4 живые встречи с разборами всех вопросов участников.</div>
        </div>
    </section>

    <section class="strong-solutions-tariffs">
        <div class="container">
            <h2 class="--large -text-center">Варианты участия</h2>

            <div class="strong-solutions-tariffs__oblique">
                <div class="oblique-caption">
                    <div>29 - 30 января <span style="color: #E85B46">2-х дневный интенсив*</span></div>
                </div>
            </div>

            <div class="strong-solutions-tariffs__grid">
                <div class="strong-solutions-tariffs__tile">
                    <div class="strong-solutions-tariffs__tile-head">
                        <span>Интенсив</span>
                    </div>

                    <div class="strong-solutions-tariffs__tile-body">
                        <div class="strong-solutions-tariffs__tile-schedule">
                            <strong>1 день</strong> + <strong>2 день</strong>
                        </div>

                        <ul class="strong-solutions-tariffs__tile-price">
                            <li class="--profitable">
                                <strong>23 000 ₽</strong>
                                <span>до 15 декабря</span>
                            </li>

                            <li>
                                <strong>27 000 ₽</strong>
                                <span>до 10 января</span>
                            </li>

                            <li>
                                <strong>31 000 ₽</strong>
                                <span>до 27 января</span>
                            </li>

                            <li>
                                <strong>34 000 ₽</strong>
                                <span>после 28 января</span>
                            </li>
                        </ul>

                        <a href="#strong-solutions-register" class="button --black --large -width-100ps">Забронировать место</a>
                    </div>
                </div>

                <div class="strong-solutions-tariffs__tile">
                    <div class="strong-solutions-tariffs__tile-head">
                        <span>Интенсив + Разбор</span>
                    </div>

                    <div class="strong-solutions-tariffs__tile-body">
                        <div class="strong-solutions-tariffs__tile-schedule">
                            <strong>1 день</strong> + <strong>2 день</strong><br> + <strong class="--smaller">Разборы кейсов (31 января) <span style="color: #E85B46">**</span></strong>
                        </div>

                        <ul class="strong-solutions-tariffs__tile-price">
                            <li class="--profitable">
                                <strong>51 000 ₽</strong>
                                <span>до 15 декабря</span>
                            </li>

                            <li>
                                <strong>57 000 ₽</strong>
                                <span>до 10 января</span>
                            </li>

                            <li>
                                <strong>63 000 ₽</strong>
                                <span>до 27 января</span>
                            </li>

                            <li>
                                <strong>69 000 ₽</strong>
                                <span>после 28 января</span>
                            </li>
                        </ul>

                        <a href="#strong-solutions-register" class="button --black --large -width-100ps">Забронировать место</a>
                    </div>
                </div>
            </div>

            <ul class="strong-solutions-tariffs__footnotes">
                <li>
                    <span class="strong-solutions-tariffs__footnotes-index">*</span>
                    <span>Только живое участи в Москве 5 и 6 октября</span>
                </li>

                <li>
                    <span class="strong-solutions-tariffs__footnotes-index">**</span>
                    <span>На интенсиве вы составите программу внедрений новых решений в своем бизнесе, группе наставничества Александр Волчек будет помогать внедрять эти решения</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="strong-solutions-register" id="strong-solutions-register">
        <div class="container">
            <h2 class="--large -text-center">Забронируйте место</h2>

            <div class="strong-solutions-register__form">
                <h3 class="--large -text-center -mb-30 -sm-mb-40">Форма регистрации</h3>

                <form action="">
                    <div class="grid --gutters-5">
                        <div class="grid__cell">
                            <div class="select select__field -width-100ps --large" data-select='{ "placeholder": "Выберите тариф" }'>
                                <select name="registerTariff">
                                    <option disabled hidden>Выберите тариф</option>
                                    <option selected>Интенсив (23 000 ₽)</option>
                                    <option>Интенсив + Разбор (51 000 ₽)</option>
                                </select>

                                <div class="select__value" data-select-value></div>

                                <div class="select__arrow">
                                    <span class="icon"><svg><use xlink:href="#arrow-dropdown"></use></svg></span>
                                </div>
                            </div>
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Ваше имя',
                                'id' => 'registerName',
                                'name' => 'registerName',
                                'class' => '-width-100ps',
                                'large' => true,
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Телефон',
                                'id' => 'registerPhone',
                                'name' => 'registerPhone',
                                'class' => '-width-100ps',
                                'large' => true,
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            @component('components.input', [
                                'placeholder' => 'Email',
                                'id' => 'registerEmail',
                                'name' => 'registerEmail',
                                'iconStatus' => true,
                                'errorMessage' => 'Обязательное поле',
                                'class' => '-width-100ps',
                                'large' => true,
                            ])
                            @endcomponent
                        </div>

                        <div class="grid__cell">
                            <label class="checkbox --large --small-text">
                                <input type="checkbox" id="registerTerms" name="registerTerms" checked>

                                <span class="checkbox__view">
                                    <span class="checkbox__marker"></span>
                                    <span class="checkbox__label">Даю согласие на обработку <a href="javascript:void(0);">персональных данных</a> и соглашаюсь с
                                        <a href="javascript:void(0);">политикой конфиденциальности</a></span>
                                </span>
                            </label>
                        </div>
                    </div>

                    <button class="button --blue --large -width-100ps -mt-30">Забронировать</button>
                </form>
            </div>
        </div>
    </section>

    <section class="section --last-wide">
        <div class="container">
            <div class="strong-solutions-faq-block">
                <h2 class="--large -text-center -sm-mb-40">Вопросы и ответы</h2>

                <div data-accordion-group>
                    @component('components.accordion', [
                        'title' => 'Чего мне ожидать от этого интенсива? Что конкретно я получу?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            На интенсиве Александр детально разберет 8 направлений бизнеса - привлечение клиентов, продажи, развитие, управление, продукт, персонал, финансы,  безопасность. По каждому направлению будут даны ключевые факторы успеха - это детали, от которых зависит будет в этом направлении хороший результат или нет. Понимая эти факторы вы сможете оценить, какие пробелы есть в вашем бизнесе и увидеть как их ликвидировать. По окончанию интенсива у вас будет план внедрения новых решений в своем бизнес. Какой конкретный результат вы  благодаря этому получите будет зависеть от того, насколько вы этой информацией сами сможете воспользоваться. Если вам нужна будет помощь во внедрении новых решений, то можете записаться на день разборов.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Что такое день разборов?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            21 ноября пройдет живая встреча с разборами кейсов участников. Цель разборов - помочь с внедрением новых решений в вашем бизнесе. Каждый участник приходит на разбор со списком трудностей, которые не позволяют его бизнесу вырасти и Александр помогает выработать эффективные решения, исходя из своего профессионального опыта.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Как связаны интенсив и день разборов?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Интенсив - это глубокое погружение в теорию. По его окончанию у вас будет план внедрения новых решений в своем бизнесе. Дальше вы можете следовать по этому плану самостоятельно или задать свои вопросы и проговорить трудности на дне разборов 21 ноября.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Что если я не уверен(а), подойдет ли мне этот интенсив?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            После того как вы оставите заявку появится диагностическая анкета. После того, как вы ее заполните с вами свяжется менеджер и сообщит, подойдет интенсив под вашу текущую задачу или нет. Анкеты изучаются очень внимательно, и если мы видим, что это мероприятие не для вас - мы скажем вам об этом прямо.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Могу я прийти на интенсив с партнером/директором?',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Если вы совместно управляете бизнесом и принимаете стратегические решения, то лучше всего проходить интенсив вместе, чтобы у вас было общее понимание. При покупке 3 и более билетов предоставляется скидка 30%.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Какие материалы предоставляются на интенсиве:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            После каждого занятия группа получает доступ к пакету материалов, которые относятся к этому занятию. Это могут быть регламенты, процессы, описания, примеры, правила и другие полезные материалы.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Для кого проводится мероприятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Интенсив в первую очередь для собственников и генеральных директоров компаний. Возможно участие некоторые руководителей, если они приходят вместе с владельцем или при отдельном согласовании с Организатором.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли участвовать онлайн:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Нет, такой возможности не предусмотрено. Возможно только живое участие в городе Москва.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли пропустить занятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, каждый участник может пропустить занятие. При этом он получит доступ, как и другие участники, к стандартному набору материалов по данному занятия. Важно понимать, что ему не предоставят никакие другие материалы или видео-запись.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли вернуть деньги за мероприятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, деньги за мероприятие можно вернуть пропорционально проведенным занятиям.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Предоставляется ли видео-запись мероприятий:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Нет, видео запись не предоставляется.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Определен ли список точных тем:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Основные темы указаны в программе. При этом возможна незначительная корректировка в зависимости от аудитории и спикера.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Будут ли организованы ежемесячные занятия:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            После интенсива стартует группа с наставничеством, где будут проходить регулярные личные встречи. Для участия в группе требуется посещение данного мероприятия.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли оплатить мероприятие от юридического лица:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, конечно оплату можно сделать от юридического лица. Оформите платеж, используя указанные реквизиты для оплаты и счет после оформления заявки.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Какие условия оплаты:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Оплата вносится в размере 100% предоплаты. Не разрешается рассрочка и оплата частями.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли получить счет на оплату:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Счет предоставляется на шаге оплаты после регистрации заявки.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Как можно сделать платеж:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Платеж можно сделать любым электронным способом, включая пластиковые карты. А также оплатить по счету как юридическое лицо.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Могут ли мне отказать в участии:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Да, могут. В случае, если участник не прошел отбор по ряду критериев.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Когда в следующий раз планируется мероприятие:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            У нас нет точных запланированных дат следующего потока.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли купить каждое занятие по отдельности:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Нет, покупка возможно только мероприятия целиком, которое состоит из четырех занятий.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Можно ли встретиться с Александром заранее до участия или задать ему вопросы заранее:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            Встречи заранее не возможны. Также как и ответы заранее на Ваши вопросы. В процессе проведения занятий Вы сможете задать любые интересующие Вас вопросы и Александр примет решение об их рассмотрении.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Есть  ли скидки:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            При покупке 3 и более билетов тарифа "Интенсив + Разбор" от одной компании предоставляется скидка 30%. Обращайтесь к менеджеру за скидкой после регистрации заявки. Скидка распространяется на партнеров и руководителей компании. Скидка действует только для вышеуказанного тарифа.
                        @endslot
                    @endcomponent

                    @component('components.accordion', [
                        'title' => 'Где можно скачать договор:',
                        'collapsed' => true,
                    ])
                        @slot('content')
                            <a href="javascript:void(0);">Договор-оферты</a> на оказание услуг по проведению мероприятий можно скачать по <a href="javascript:void(0);">ссылке</a>
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>
    </section>

    @component('components.footer') @endcomponent
@endsection
