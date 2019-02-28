@extends('layouts.networking')
{{-- the title of the page goes in this section of the code  --}}
@section('title')
Networking
@endsection

{{-- the main part of the web page goes here --}}
@section('content')
<svg viewBox="0 0 100 200" >
    <g fill="#f06" fill-opacity=".8">
      <polygon class="polymorph" points="0,0 0,0 0,0 0,200"></polygon>
  </g>
</svg> 
<div id="overlay"></div>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark navbar-theme">
<a class="navbar-brand" href="#">BRAND</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-md-center" id="main-menu">
<ul class="navbar-nav text-uppercase mt-4">
  <li class="nav-item active">
    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#services">Services</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#products">Products</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#contact">Contact</a>
  </li>
</ul>
</div>
</nav>
    <section data-section-name="home" class="parallax-window" data-parallax="scroll" data-image-src="https://s25.postimg.cc/g4xb2vasf/sky-690293_1920.jpg">
  
<div class="container-fluid">
<div class="row">
<div class="col">
  
              <!-- HOME SLIDES  -->
        <div id="home-slides" class="owl-carousel owl-theme reveal">
            <div class="item">
                <h1 class="display-3 text-uppercase" data-in="fadeInDown">Slide <span class="color-theme">Title1</span></h1> 
                <h2 data-in="fadeInUp">Lorem ipsum dolor sit amet</h2> 
                <p data-in="fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in felis at arcu accumsan aliquet.<br> Sed porttitor egestas lorem a imperdiet. Integer in efficitur risus, et accumsan sapien. <br>Morbi fringilla arcu erat, eu volutpat lorem faucibus commodo.</p>
                <a href="#" class="btn btn-theme" data-in="fadeInDown">Read More</a>			
            </div>
            <div class="item">
                <h1 class="display-3 text-uppercase" data-in="fadeInDown">Slide <span class="color-theme">Title2</span></h1> 
                <h2 data-in="fadeInUp">Lorem ipsum dolor sit amet</h2> 
                <p data-in="fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in felis at arcu accumsan aliquet.<br> Sed porttitor egestas lorem a imperdiet. Integer in efficitur risus, et accumsan sapien. <br>Morbi fringilla arcu erat, eu volutpat lorem faucibus commodo. </p>
                <a href="#" class="btn btn-theme" data-in="fadeInDown">Read More</a>					
            </div>
            <div class="item">
                <h1 class="display-3 text-uppercase" data-in="fadeInDown">Slide <span class="color-theme">Title3</span></h1> 
                <h2 data-in="fadeInUp">Lorem ipsum dolor sit amet</h2> 
                <p data-in="fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in felis at arcu accumsan aliquet.<br> Sed porttitor egestas lorem a imperdiet. Integer in efficitur risus, et accumsan sapien. <br>Morbi fringilla arcu erat, eu volutpat lorem faucibus commodo.</p>
                <a href="#" class="btn btn-theme" data-in="fadeInDown">Read More</a>								
            </div>
        
        </div>
            
            <div class="clearfix"></div>
            <!-- NEXT BUTTON -->
            <div class="btn-next"><i class="fa fa-angle-down bounce"></i></div>
  
</div>
</div>
</div>
</section>
    <section data-section-name="about" class="parallax-window" data-parallax="scroll" data-image-src="https://s25.postimg.cc/6yy9db2bz/image.jpg">	
    
<div class="container-fluid">
<div class="row">

<div class="col reveal">
  <h1 class="display-4 text-center text-uppercase">About </h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in felis at arcu accumsan aliquet vel id purus.<br style="display: block;"> Sed porttitor egestas lorem a imperdiet. Integer in efficitur risus, et accumsan sapien. <br style="display: block;">Morbi fringilla arcu erat, eu volutpat lorem faucibus commodo. Nam vitae lectus nibh.</p>
  
  
            <div class="clearfix"></div>
            <!-- NEXT BUTTON -->
            <div class="btn-next"><i class="fa fa-angle-down bounce"></i></div>
</div>
</div>
</div>
</section>

<section data-section-name="services" class="parallax-window" data-parallax="scroll" data-image-src="https://s25.postimg.cc/hyjgox0gv/image.jpg">	
      
<div class="container-fluid">
<div class="row">
    <div class="col reveal">
  <h1 class="display-4 text-center text-uppercase">Services </h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in felis at arcu accumsan aliquet vel id purus.<br style="display: block;"> Sed porttitor egestas lorem a imperdiet. Integer in efficitur risus, et accumsan sapien. <br style="display: block;">Morbi fringilla arcu erat, eu volutpat lorem faucibus commodo. Nam vitae lectus nibh.</p>
            <div class="clearfix"></div>
            <!-- NEXT BUTTON -->
            <div class="btn-next"><i class="fa fa-angle-down bounce"></i></div>
</div>
</div>
</div>
</section>

    <section data-section-name="products" class="parallax-window" data-parallax="scroll" data-image-src="https://s25.postimg.cc/69fh0yh7z/image.jpg">	
       
<div class="container-fluid">
<div class="row">

<div class="col reveal">
  <h1 class="display-4 text-center text-uppercase">Products </h1>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in felis at arcu accumsan aliquet vel id purus.<br style="display: block;"> Sed porttitor egestas lorem a imperdiet. Integer in efficitur risus, et accumsan sapien. <br style="display: block;">Morbi fringilla arcu erat, eu volutpat lorem faucibus commodo. Nam vitae lectus nibh.</p>
            <div class="clearfix"></div>
            <!-- NEXT BUTTON -->
            <div class="btn-next"><i class="fa fa-angle-down bounce"></i></div>
</div>
</div>
</div>
</section>

    <section data-section-name="contact" class="parallax-window" data-parallax="scroll" data-image-src="https://s25.postimg.cc/x5g7bhy3j/beach-832346_1920.jpg">	
       
<div class="container-fluid">
<div class="row">

<div class="col reveal">
  <h1 class="display-4 text-center text-uppercase">Contact </h1>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in felis at arcu accumsan aliquet vel id purus.<br style="display: block;"> Sed porttitor egestas lorem a imperdiet. Integer in efficitur risus, et accumsan sapien. <br style="display: block;">Morbi fringilla arcu erat, eu volutpat lorem faucibus commodo. Nam vitae lectus nibh.</p>
</div>
</div>
</div>
</section>

@endsection