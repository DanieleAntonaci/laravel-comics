<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('head')
</head>

<body>
    @include('components.header')
    @yield('jumbotron')
    @yield('poster')
    @yield('info-comic')
    @yield('current-series')
    @include('components.footer')
</body>

</html>
