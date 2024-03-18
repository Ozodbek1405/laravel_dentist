<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images/logo-icon.png')}}">
    <title>DENTIST | @yield('title')</title>
    @include('layouts.css')
    @stack('styles')
</head>
<body>
@include('layouts.navbar')
@yield('content')
@include('layouts.footer')
@include('layouts.modal')
@include('layouts.script')
@stack('scripts')
</body>
</html>
