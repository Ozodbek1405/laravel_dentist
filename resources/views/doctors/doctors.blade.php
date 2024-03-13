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
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Meet Our Experience Dentist</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
                </div>
            </div>
            <div class="row">
                @foreach($doctors as $doctor)
                    <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url({{asset('storage/'.str_replace("\\","/",$doctor->image))}});"></div>
                            <div class="info text-center">
                                <h3>{{$doctor->name}}</h3>
                                <span class="position">{{$doctor->position}}</span>
                                <div class="text">
                                    <p>{{$doctor->description}}</p>
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


    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
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
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-3">Our Best Pricing</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Basic</h3>
                            <p><span class="price">$24.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Diagnostic Services</li>
                            <li>Professional Consultation</li>
                            <li>Tooth Implants</li>
                            <li>Surgical Extractions</li>
                            <li>Teeth Whitening</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price">$34.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Diagnostic Services</li>
                            <li>Professional Consultation</li>
                            <li>Tooth Implants</li>
                            <li>Surgical Extractions</li>
                            <li>Teeth Whitening</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Premium</h3>
                            <p><span class="price">$54.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Diagnostic Services</li>
                            <li>Professional Consultation</li>
                            <li>Tooth Implants</li>
                            <li>Surgical Extractions</li>
                            <li>Teeth Whitening</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Platinum</h3>
                            <p><span class="price">$89.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Diagnostic Services</li>
                            <li>Professional Consultation</li>
                            <li>Tooth Implants</li>
                            <li>Surgical Extractions</li>
                            <li>Teeth Whitening</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Order now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
