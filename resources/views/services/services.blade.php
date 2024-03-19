@extends('layouts.main')
@section('title')
    @lang('translation.services')
@endsection

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}">
                            <span class="mr-2">
                                <a href="{{route('home.index')}}">@lang('translation.homepage')</a>
                            </span> <span>@lang('translation.services')</span>
                        </p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">@lang('translation.our_services')</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">@lang('translation.new_service')</h2>
                    <p>@lang('translation.our_services_your')</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Отбеливание зубов</h3>
                            <p>
                                процедура, направленная на изменение цвета зубов. В процессе процедуры происходит разрушение пигмента располагающегося в пространствах между призмами эмали, а не на поверхности зубов.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dental-care"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Профессиональная чистка зубов</h3>
                            <p>
                                это процедура ухода за полостью рта, направленная на профилактику заболеваний зубов и десен. Появляющийся на зубах в недоступных для чистки зубной щеткой местах налет постепенно кристаллизуется в камни, которые располагаются над и под десной.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-with-braces"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Качественные брекеты</h3>
                            <p>"Коррекция зубов никогда не была такой простой! Наши брекеты обеспечивают комфорт и эффективность для вашей улыбки."
                                "Узнайте, как наши инновационные брекеты могут преобразить вашу улыбку. Доверьтесь профессионалам для лучших результатов."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-anesthesia"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Анестезия</h3>
                            <p>В стоматологии анестезия играет важную роль, особенно при проведении более сложных и болезненных процедур, таких как удаление зубов, лечение каналов, имплантация и другие. Анестезия помогает пациентам чувствовать минимум дискомфорта и боли во время лечения.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-bacteria"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Пародонтология</h3>
                            <p>"Здоровые десны — залог крепких зубов. Доверьтесь нашим парадонтологам для сохранения вашей улыбки."
                                "Парадонтологическая забота, которой вы заслуживаете. Наши эксперты помогут вам достичь оптимального здоровья десен."
                                "Восстановите здоровье десен и верните уверенность в своей улыбке. Обратитесь к нашей команде парадонтологов уже сегодня."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dentist"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Дентальные импланты</h3>
                            <p>"Восстановите вашу улыбку с помощью дентальных имплантов. Наша клиника предлагает инновационные решения для замены потерянных зубов."
                                "Верните уверенность в себе с помощью дентальных имплантов. Наши специалисты помогут вам достичь красивой и функциональной улыбки."
                                "Импланты, которые превосходят ожидания. Опытные хирурги нашей клиники гарантируют высококачественное и безопасное лечение."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dental-care"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Ортопедия</h3>
                            <p>Идеальная улыбка начинается с здоровых зубов
                                Мы предлагаем индивидуальный подход и высокотехнологичные методы лечения.
                                Наша команда специалистов поможет вам восстановить функциональность и эстетику вашей улыбки.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
