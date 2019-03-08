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
<<<<<<< HEAD
=======
  <!-- RS5.0 Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <!-- RS5.0 Layers and Navigation Styles -->
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css">
  <!-- REVOLUTION STYLE SHEETS -->
  
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revo-slider/css/navigation.css">
>>>>>>> 541605fe9ca66401f4ab3a944bfdd9196820a288
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
<<<<<<< HEAD
  {{--  @include('inc.nav')  --}}
=======
 {{--  @include('inc.nav')  --}}
>>>>>>> 541605fe9ca66401f4ab3a944bfdd9196820a288
        <main class="py-4">
          <div class="row">
            @yield('content')
        </div>
        </main>
<<<<<<< HEAD
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

=======
    </div> 
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>


    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    {{-- <script src="{{asset('free/js/script.js')}}"> --}}

    <script src="{{ asset('plugins/google-map/gmap.js') }}"></script>

    <!-- Parallax -->
    <script src="{{asset('plugins/parallax/jquery.parallax-1.1.3.js')}}"></script>
    <!-- lightbox -->
    <script src="{{asset('plugins/lightbox2/dist/js/lightbox.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Portfolio Filtering -->
    <script src="{{asset('plugins/mixitup/dist/mixitup.min.js')}}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{asset('plugins/smooth-scroll/dist/js/smooth-scroll.min.js')}}"></script>

    <!-- Custom js -->
    <script src="{{asset('js/script.js')}}"></script>
>>>>>>> 541605fe9ca66401f4ab3a944bfdd9196820a288

</body>
</html>
