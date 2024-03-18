<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="w-50 h-25" src="{{asset('images/site-logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="home">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item" id="about">
                    <a href="/about" class="nav-link">About</a>
                </li>
                <li class="nav-item" id="services">
                    <a href="/services" class="nav-link">Services</a>
                </li>
                <li class="nav-item" id="doctors">
                    <a href="/doctors" class="nav-link">Doctors</a>
                </li>
                <li class="nav-item" id="blog">
                    <a href="/blog" class="nav-link">Blog</a>
                </li>
                <li class="nav-item" id="appointment">
                    <a href="/appointment" class="nav-link">Appointment</a>
                </li>
                <div class="dropdown mt-2 topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @switch(Session::get('lang'))
                            @case('ru')
                                <img src="{{ URL::asset('/images/flags/ru.svg') }}" class="rounded"
                                     alt="RU" height="20">
                                @break
                            @case('uz')
                                <img src="{{ URL::asset('/images/flags/uz.svg') }}" class="rounded"
                                     alt="UZ" height="20">
                                @break
                            @default
                                <img src="{{ URL::asset('/images/flags/uz.svg') }}" class="rounded"
                                     alt="UZ" height="20">
                        @endswitch
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="{{ url('index/uz') }}" class="dropdown-item notify-item language" data-lang="uz"
                           title="UZ">
                            <img src="{{ URL::asset('images/flags/uz.svg') }}" alt="user-image"
                                 class="me-2 rounded" height="20">
                            <span class="align-middle">UZBEK</span>
                        </a>
                        <!-- item-->
                        <a href="{{ url('index/ru') }}" class="dropdown-item notify-item language py-2" data-lang="ru"
                           title="RUS">
                            <img src="{{ URL::asset('images/flags/ru.svg') }}" alt="user-image"
                                 class="me-2 rounded" height="20">
                            <span class="align-middle">RUSSIAN</span>
                        </a>
                    </div>
                </div>
            </ul>
        </div>


    </div>
</nav>
@push('scripts')
    <script>
        let link = document.location.href.split('/');
        if (link[3] === '') {
            $("#home").addClass("active");
        }
        else if (link[3] === 'about') {
            $("#about").addClass("active");
        }
        else if (link[3] === 'services') {
            $("#services").addClass("active");
        }
        else if (link[3] === 'doctors') {
            $("#doctors").addClass("active");
        }
        else if (link[3] === 'blog') {
            $("#blog").addClass("active");
        }
        else if (link[3] === 'contact') {
            $("#contact").addClass("active");
        }
        else if (link[3] === 'appointment') {
            $("#appointment").addClass("active");
        }
    </script>
@endpush
