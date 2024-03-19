@extends('layouts.main')
@section('title')
    @lang('translation.blog')
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
                            </span>
                            <span><a href="{{route('blog.index')}}">@lang('translation.blog')</a></span>
                        </p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">
                            @lang('translation.read_blog')
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3 mt-5">
                        {{$blog->getTranslatedAttribute('title',Session::get('lang') , 'fallbackLocale')}}
                    </h2>
                    <p>
                        {{$blog->getTranslatedAttribute('description',Session::get('lang') , 'fallbackLocale')}}
                    </p>
                    <div >
                        <img style="height: 500px" src="{{asset('storage/'.str_replace("\\","/",$blog->image))}}" alt="#" class="img-fluid">
                    </div>
                    @if(session('lang') == 'ru')
                        <p>{!! $blog->text_en !!}</p>
                    @else
                        <p>{!! $blog->text_uz !!}</p>
                    @endif
                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>@lang('translation.most_blog')</h3>
                        @foreach($most_blogs as $most_blog)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url({{asset('storage/'.str_replace("\\","/",$most_blog->image))}});"></a>
                                <div class="text">
                                    <h3 class="heading">
                                        <a href="{{route('blog.single',$most_blog->id)}}">
                                            {{$most_blog->getTranslatedAttribute('title',Session::get('lang') , 'fallbackLocale')}}
                                        </a>
                                    </h3>
                                    <div class="meta">
                                        <div><span class="icon-calendar"></span> {{$most_blog->created_at->format('M d,Y')}}</div>
                                        <div><span class="icon-person"></span> Admin</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
