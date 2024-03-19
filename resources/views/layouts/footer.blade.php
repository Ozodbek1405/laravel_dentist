@php
 $most_blogs = App\Models\Blog::query()->orderByDesc('views')->limit('2')->get();
@endphp
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <img class="w-100" src="{{asset('images/footer-logo.png')}}" alt="Logo">
                </div>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                    <li class="">
                        <a href="{{setting('footer.youtube_link')}}"><span class="icon-youtube-play"></span></a>
                    </li>
                    <li class="">
                        <a href="{{setting('footer.facebook_link')}}"><span class="icon-facebook"></span></a>
                    </li>
                    <li class="">
                        <a href="{{setting('footer.telegram_link')}}"><span class="icon-telegram"></span></a>
                    </li>
                    <li class="">
                        <a href="{{setting('footer.instagram_link')}}"><span class="icon-instagram"></span></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">@lang('translation.links')</h2>
                    <ul class="list-unstyled">
                        <li><a href="/about" class="py-2 d-block">@lang('translation.about')</a></li>
                        <li><a href="/about" class="py-2 d-block">@lang('translation.services')</a></li>
                        <li><a href="/doctors" class="py-2 d-block">@lang('translation.doctor')</a></li>
                        <li><a href="/blog" class="py-2 d-block">@lang('translation.blog')</a></li>
                        <li><a href="/appointment" class="py-2 d-block">@lang('translation.appointment')</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 pr-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@lang('translation.news')</h2>
                    @foreach($most_blogs as $most_blog)
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4"
                               style="background-image: url({{asset('storage/'.str_replace("\\","/",$most_blog->image))}});">
                            </a>
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
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@lang('translation.office')</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon icon-map-marker"></span>
                                <span class="text">{{setting('footer.footer_address')}}</span>
                            </li>
                            <li>
                                <span class="icon icon-phone"></span>
                                <span class="text">{{setting('footer.footer_phone')}}</span>
                            </li>
                            <li>
                                <span class="icon icon-envelope"></span>
                                <span class="text">{{setting('footer.email_footer')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    &copy;<script>document.write(new Date().getFullYear());</script>
                    | <i class="icon-heart" aria-hidden="true"></i>
                    <a href="https://unicon.uz" target="_blank">UNICON.UZ</a>
                </p>
            </div>
        </div>
    </div>
</footer>
