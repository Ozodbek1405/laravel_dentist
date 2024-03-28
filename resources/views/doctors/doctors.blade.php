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

@endsection
