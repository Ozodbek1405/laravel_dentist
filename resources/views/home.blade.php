@extends('layouts.main')
@section('title')
    @lang('translation.homepage')
@endsection
@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{asset('images/bg_1.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Dentistry in a Calm and Relaxed Environment</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="{{route('appointment.index')}}" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url({{asset('images/bg_2.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Achieve Your Desired Perfect Smile</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p><a href="{{route('appointment.index')}}" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <a href="{{route('services.index')}}">
                        <h2 class="mb-2">Новая улыбка — новая жизнь</h2>
                    </a>
                    <p>Наш сервис дарит вам улыбку.</p>
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
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-1">@lang('translation.doctor_title')</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section mb-5">
        <div class="container">
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="col-lg-4 col-md-6 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url({{asset('storage/'.str_replace("\\","/",$doctor->image))}});"></div>
                            <div class="info text-center">
                                <a href="{{route('doctor.detail',$doctor->id)}}">
                                    {{$doctor->getTranslatedAttribute('name')}}
                                </a>
                                <span class="position">{{$doctor->getTranslatedAttribute('position')}}</span>
                                <div class="text">
                                    <p>{{$doctor->getTranslatedAttribute('description')}}</p>
                                    <ul class="ftco-social">
                                        <li class="ftco-animate">
                                            <a href="{{$doctor->telegram_link}}"><span class="icon-telegram"></span></a>
                                        </li>
                                        <li class="ftco-animate">
                                            <a href="{{$doctor->instagram_link}}"><span class="icon-instagram"></span></a>
                                        </li>
                                        <li class="ftco-animate">
                                            <a href="{{$doctor->facebook_link}}"><span class="icon-facebook"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 aside-stretch py-5">
                    <div class=" heading-section heading-section-white ftco-animate pr-md-4">
                        <h2 class="mb-3">Achievements</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
                <div class="col-md-9 py-5 pl-md-5">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="14">0</strong>
                                    <span>Years of Experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4500">0</strong>
                                    <span>Qualified Dentist</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="4200">0</strong>
                                    <span>Happy Smiling Customer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="text">
                                    <strong class="number" data-number="320">0</strong>
                                    <span>Patients Per Year</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Latest Blog</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="row">
                @foreach($most_blogs as $most_blog)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{route('blog.single',$most_blog->id)}}" class="block-20"
                           style="background-image: url({{asset('storage/'.str_replace("\\","/",$most_blog->image))}});">
                        </a>
                        <div class="text d-flex py-4">
                            <div class="meta mb-3">
                                <div>{{$most_blog->created_at->format('M d,Y')}}</div>
                                <div>Admin</div>
                            </div>
                            <div class="desc pl-3">
                                <h3 class="heading">
                                    <a href="{{route('blog.single',$most_blog->id)}}">
                                        {{$most_blog->getTranslatedAttribute('title',Session::get('lang') , 'fallbackLocale')}}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
