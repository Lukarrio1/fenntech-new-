<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}|@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
@include('inc.nav')
     @yield('content')
@include("inc.footer")
</div>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="{{ asset('js/fenntech.js') }}"></script>
</body>
</html>
