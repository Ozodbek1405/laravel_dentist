@extends('layouts.main')
@section('title')
    HOMEPAGE
@endsection
@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/bg_1.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Dentistry in a Calm and Relaxed Environment</h1>
                        <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('images/bg_2.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Achieve Your Desired Perfect Smile</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary px-4 py-3">Make an Appointment</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">Our Service Keeps you Smile</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-1"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Teeth Whitening</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-dental-care"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Teeth Cleaning</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-tooth-with-braces"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Quality Brackets</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-anesthesia"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Modern Anesthetic</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
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
                    <h2 class="mb-3">Meet Our Experience Dentist</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_5.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Tom Smith</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_6.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Mark Wilson</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_7.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
                            <span class="position">Dentist</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_8.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
                            <span class="position">System Analyst</span>
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  mt-5 justify-conten-center">
                <div class="col-md-8 ftco-animate">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi vero accusantium sunt sit aliquam ipsum molestias autem perferendis, incidunt cumque necessitatibus cum amet cupiditate, ut accusamus. Animi, quo. Laboriosam, laborum.</p>
                </div>
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
