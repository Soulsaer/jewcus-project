<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    @yield('meta_tags')
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('/assets/css/main.css?v=112') }}"> --}}
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />

    <link rel="canonical" href="{{ URL::current() }}"/>
    <link rel="alternate" href="{{ URL::current() }}" hreflang="en-gb" />


    @yield('other_tags')


    <meta name="p:domain_verify" content="4113c8cd1b39c521530d37ab5db4109a"/>
    <!--Google Console Code-->

    @yield('style')
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/indexmain.js"></script>
    <script>

    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JR4R7XP3WR');
    </script>
  
</head>
<body>
    <div id="preloader"></div>
    <div id="app">
        
        <!-- <main class="py-4"> -->
            @include('layouts.header')
            @yield('content')
            @include('layouts.footer')
        <!-- </main> -->
    </div>

    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
    @yield('js')
</body>
</html>
