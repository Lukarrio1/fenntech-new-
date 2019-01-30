@extends('layouts.landing')

@section('title')
| Welcome
@endsection

@section('content')
<div class="container">
  <div class="one-half left">
    <h1>FennTech Store</h1>
    <a href="{{ route('Fenntech') }}" class="cta">Lets Go</a>
  </div>
  <div class="one-half right">
    <h1>FennTech Corporate</h1>
    <a href="{{ route('unavailable')}}" class="cta">Lets Go</a>
  </div>
</div>
@endsection

