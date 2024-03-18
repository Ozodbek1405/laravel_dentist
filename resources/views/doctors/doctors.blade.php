@extends('layouts.main')
@section('title')
    DOCTORS
@endsection

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}">
                            <span class="mr-2"><a href="{{route('home.index')}}">Home</a></span> <span>Doctors</span>
                        </p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Well Experienced Doctors</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-1">Meet Our Experience Dentist</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
                </div>
            </div>
        </div>
    </section>


    <section class="section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-img-block">
                        <img src="{{asset('images/person_5.jpg')}}" alt="#" class="img-fluid w-100 rounded">
                        <div class="info-block mt-4">
                            <p>
                                Начало работы: <br>
                                С 2014-2015 Киев <br>
                                С 2018-2019 Старое ТашМИ <br>
                                С 2019 в клинике Dentalis Nur <br>
                                С 2023 в клинике Hollywood smile <br>
                            </p>
                            <ul class="list-inline mt-4 doctor-social-links">
                                <li class="list-inline-item"><a href="#!"><i class="icon-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#!"><i class="icon-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#!"><i class="icon-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#!"><i class="icon-telegram"></i></a></li>
                            </ul>

                            <a href="{{route('appointment.index')}}" class="btn btn-primary btn-round-full mt-3">
                                Make an Appointment
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-lg-0">
                        <h2 class="mb-0">Садыков Айбек Шавкатович </h2>
                        <h5>Врач-терапевт, ортопед.</h5>
                        <div>
                            Национальный Медицинский Университет
                            им. А.А.Богомольца, Украина, г.Киев. <br>
                            Более 8 лет практической работы
                        </div>
                        <div class="divider my-4"></div>
                        <p>
                            Я стоматолог, который творит искусство. Словно скульптор, только в стоматологии)
                            Мой мрамор, это ваши зубы. И я готов воплотить все ваши капризы! В мои обязанности входит лечение кариозных поражений твёрдых тканей зубов и восстановление их анатомии и морфологии, прямой или непрямой реставрацией (композитными материалами или керамическими конструкциями).
                            Работая в Dentalis Nur, я обрел огромный опыт, крутой коллектив и возможность расти и развиваться.
                            Для меня самое важное в работе - это заниматься любимым делом и совершенствоваться!
                        </p>

                        <p>
                            Курсы: <br>
                            -Онлайн мастер-класс «Direct posterior restorations. Simplifying occlusal surface and bonding», Максим Белоград.
                            <br>
                            -Лекционный курс «Методология построения консультативного приема», Виталий Поволоцкий.
                            <br>
                            -Лекционно-практический ZEN курс <br>
                            «Фронтальные реставрации», Виктор Щербаков
                            <br>
                            -Лекционно-демонстрационный курс <br>
                            «Информативная жевательная реставрация», Иван Рузин.
                            <br>
                            -Лекционно-демонстрационный курс <br>
                            «Травмы и посттравматические реставрации. Особенности морфологии и текстуры», Ильдар Саркаров.
                            <br>
                            -Мастер-класс «Реминерализующая терапия в практике врача-стоматолога», Волобуева.Е.В, R.O.C.S.
                            <br>
                            -Онлайн мастер-класс «Реставрация Фронтальной и Жевательной группы зубов», Айк Погосян. <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
