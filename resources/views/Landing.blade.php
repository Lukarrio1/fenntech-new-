@extends('layouts.landing')

@section('title')
| Welcome
@endsection

@section('content')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-2">
    <div class="card shadow rounded">
        <div class="card-body text-center">
                <a href="{{route('Fenntech')}}" class="btn btn-lg btn-success">Fenntech Home</a>
        </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pb-2">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-primary btn-lg text-white">Fenntech Bicycle</a>
                    </div>
                </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-primary btn-lg text-white">Fenntech Wedding</a>
                    </div>
                </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card shadow rounded">
                    <div class="card-body text-center">
                        <a href="#" class="btn btn-success btn-lg text-white">Fenntech Corporate</a>
                    </div>
                </div>
    </div>
</div>
@endsection

@endsection