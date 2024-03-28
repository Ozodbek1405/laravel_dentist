@extends('layouts.main')
@section('title')
    @lang('translation.doctor')
@endsection

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}">
                            <span class="mr-2"><a href="{{route('home.index')}}">@lang('translation.homepage')</a></span> <span>@lang('translation.doctor')</span>
                        </p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">
                            @lang('translation.experience_doctor')
                        </h1>
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
                    <h4 class="mb-0">{{$doctor->getTranslatedAttribute('name')}}</h4>
                    <h5>{{$doctor->getTranslatedAttribute('position')}}</h5>
                </div>
            </div>
        </div>
    </section>


    <section class="section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-img-block">
                        <img src="{{asset('storage/'.str_replace("\\","/",$doctor->image))}}" alt="#" class="img-fluid w-100 rounded">
                        <div class="info-block mt-4">
                            <ul class="list-inline mt-4 doctor-social-links">
                                <li class="list-inline-item">
                                    <a href="{{$doctor->telegram_link}}"><span class="icon-telegram"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$doctor->instagram_link}}"><span class="icon-instagram"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{$doctor->facebook_link}}"><span class="icon-facebook"></span></a>
                                </li>
                            </ul>

                            <a href="{{route('appointment.index')}}" class="btn btn-primary btn-round-full mt-3">
                                Make an Appointment
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-lg-0">
                        @if(session('lang')=='ru')
                            {!! $doctor->text_ru !!}
                        @else
                            {!! $doctor->text_uz !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
