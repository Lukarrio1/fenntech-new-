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
<<<<<<< HEAD
                    <a href="{{route('unavailable')}}" class="btn btn-primary btn-lg text-white">Fenntech Bicycle</a>
=======
                        <a href="#" class="btn btn-primary btn-lg text-white">FennTech Corporate</a>
>>>>>>> 47ff7140aa192ab4d902a0a8bd3057aafd6de7bb
                    </div>
                </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
<<<<<<< HEAD
                        <a href="{{route('unavailable')}}" class="btn btn-primary btn-lg text-white">Fenntech Wedding</a>
=======
                        <a href="#" class="btn btn-primary btn-lg text-white">Software Division</a>
>>>>>>> 47ff7140aa192ab4d902a0a8bd3057aafd6de7bb
                    </div>
                </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
<<<<<<< HEAD
                        <a href="{{route('unavailable')}}" class="btn btn-success btn-lg text-white">Fenntech Corporate</a>
=======
                        <a href="#" class="btn btn-success btn-lg text-white">IT Services Div</a>
>>>>>>> 47ff7140aa192ab4d902a0a8bd3057aafd6de7bb
                    </div>
                </div>
    </div>
</div>
@endsection