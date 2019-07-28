<html>
<head>
    <title>@yield('title')</title>
    {{-- @todo split js to footer--}}
    {!! MaterializeCSS::include_full() !!}
    <link rel="stylesheet" href="{{ asset('css/control_style.css') }}">

    @yield('header_content')
</head>