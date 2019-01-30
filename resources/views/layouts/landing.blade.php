<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">

    <title>FennTech @yield('title')</title>
</head>
<body>
    <div class="row">
<div class="col-12 text-center pt-2 pb-2">
    <img src="{{ url('storage/logo.png') }}" alt="" class="logo">
</div>
</div>
  @yield('content')
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="{{asset('js/landing.js')}}"></script>
</body>
</html>
