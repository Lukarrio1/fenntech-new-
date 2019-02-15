@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')
<div class="col-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="d-block w-100" src="" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
<div class="col-12">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item text-center active">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas fuga sint velit, facilis asperiores amet!
          </div>
          <div class="carousel-item text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, explicabo? Porro tempora eaque ratione commodi!
          </div>
          <div class="carousel-item text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aliquid ex similique sapiente temporibus iste?
          </div>
        </div>
      </div>
</div>
@endsection
