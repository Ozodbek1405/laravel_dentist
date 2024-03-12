@extends('layouts.main')
@section('title')
    BLOG
@endsection

@section('content')

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container" data-scrollax-parent="true">
                <div class="row slider-text align-items-end">
                    <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                        <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="/">Home</a></span> <span>Blog</span></p>
                        <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Read Our Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            @foreach($blogs as $blog)
                                <div class="blog-entry">
                                    <a href="{{route('blog.single',$blog->id)}}" class="block-20" style="background-image: url({{asset('storage/'.str_replace("\\","/",$blog->image))}});">
                                    </a>
                                    <div class="text d-flex py-4">
                                        <div class="meta mb-3 text-sm-center-center">
                                            <div><span class="icon-calendar"></span> {{$blog->created_at->format('M d,Y')}}</div>
                                            <div><span class="icon-person"></span> Admin</div>
                                        </div>
                                        <div class="desc pl-sm-3 pl-md-5">
                                            <h3 class="heading">
                                                <a href="{{route('blog.single',$blog->id)}}">
                                                    {{$blog->getTranslatedAttribute('title',Session::get('lang') , 'fallbackLocale')}}
                                                </a>
                                            </h3>
                                            <p>
                                                {{$blog->getTranslatedAttribute('description',Session::get('lang') , 'fallbackLocale')}}
                                            </p>
                                            <p><a href="{{route('blog.single',$blog->id)}}" class="btn btn-primary btn-outline-primary">Read more</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <div class="block-27">

                            </div>
                        </div>
                    </div>
                </div> <!-- END: col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3>Most viewed blog</h3>
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
