<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}|@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="/public/css/navigation.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('/public/css/bootstrap.min.css') }}">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  <!-- Colors -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/green.css') }}" title="green">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/red.css') }}" title="light-red">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/blue.css') }}" title="blue">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/light-blue.css') }}" title="light-blue">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/yellow.css') }}" title="yellow">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/colors/light-green.css') }}" title="light-green">

</head>
<body>
    <div id="app">
  {{--  @include('inc.nav')  --}}
        <main class="py-4">
          <div class="row">
            @yield('content')
        </div>
        </main>
    </div>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="{{ asset('/public/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('/public/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('/public/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('/public/plugins/slick-carousel/slick/slick.min.jss') }}"></script>
    <!-- Portfolio Filtering -->
    <script src="{{ asset('/public/plugins/mixitup/dist/mixitup.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="/public/plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>

    <!-- Custom js -->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


</body>
</html>
