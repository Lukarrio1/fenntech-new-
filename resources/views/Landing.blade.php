@extends('layouts.landing')

@section('title')
| Welcome
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-2">
    <div class="card shadow rounded">
        <div class="card-body text-center">
                <a href="{{route('Fenntech')}}" class="btn btn-lg btn-success">FennTech Store</a>
        </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-2">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
                    <a href="{{route('unavailable')}}" class="btn btn-primary btn-lg text-white">FennTech Corporate</a>
                    </div>
                </div>
    </div>
    <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-2">
    <div class ="container">
        <div class = "one-half left">
            <h1> FennTech Home User</h1>
            <a href="#" class "cta">Learn More</a>


        </div>

    </div>
</div>
 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
                        <a href="{{route('unavailable')}}" class="btn btn-primary btn-lg text-white">Software Division</a>
                    </div>
                </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
                        <a href="{{route('unavailable')}}" class="btn btn-success btn-lg text-white">IT Services Div</a>
                    </div>
        </div>
    </div>
</div>
@endsection

