@extends('layouts.landing')

@section('title')
| Welcome
@endsection

@section('content')
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="image d-block w-100" src="/storage/aleksi-tappura-445-unsplash.jpg" alt="First slide">
      <div class="carousel-caption">
      <h3><a href="{{url('Fenntech')}}" class="btn btn-defualt">FennTech Home User</a></h3>
        <p>For the everyday computer user</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class=" image d-block w-100" src="/storage/fenntech-corporate.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h3>FennTech Corporate</h3>
        <p>For corporate and business users</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class=" image d-block w-100" src="/storage/fenntech-software.jpg" alt="Third slide">
      <div class="carousel-caption">
        <h3>FennTech Software Products</h3>
        <p>For all your software and app development needs</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class=" image d-block w-100" src="/storage/fenntech-networking.jpg" alt="Fourth slide">
      <div class="carousel-caption">
        <h3>FennTech Networking Solutions</h3>
        <p>For all your networking needs</p>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@endsection
