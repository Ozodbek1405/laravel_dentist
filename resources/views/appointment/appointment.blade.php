@extends('layouts.main')
@section('title')
    APPOINTMENT
@endsection

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}">
                            <span class="mr-2"><a href="{{route('home.index')}}">Home</a></span> <span>Appointment</span>
                        </p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Appointment</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">
                        <h2 class="mb-2">DentaCare Procedure &amp; High Quality Services</h2>
                    </div>
                    <div class="ftco-animate">
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. Because there were thousands of bad Commas, wild Question Marks and devious Semikoli</p>
                        <ul class="un-styled my-5">
                            <li><span class="icon-check"></span>Consectetur adipisicing elit</li>
                            <li><span class="icon-check"></span>Adipisci repellat accusamus</li>
                            <li><span class="icon-check"></span>Tempore reprehenderit vitae</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="heading-section mb-5 ftco-animate">
                        <h2 class="mb-2">Get a Free Quote</h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('application.send')}}" class="ftco-animate" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message"></label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            @error('message')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Get a Quote" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
    <script>
        $('#phone').inputmask({
            mask: '+999 99 999-99-99',
            removeMaskOnSubmit: true
        });
    </script>
@endpush
