@extends('layouts.app')

@section('title')
Messages({{$count}})
@endsection

@section('content')
<div class="col-12">
@include('inc.message')
</div>
@foreach ($messages as $message)
<div class="col-md-8 offset-2">
<div class="card">
    <div class="card-body">
        <div class="" data-toggle="collapse" data-target="#collapse{{$message->id}}" aria-expanded="false" aria-controls="collapseExample">
        <span class="h5 font-weight-bold">{{$message->email}}</span>  <span>{{$message->created_at}}</span>
          </div>
          <div class="collapse" id="collapse{{$message->id}}">
            <div class="">
            {{$message->subject}}<br>
            {{$message->body}}
            </div> 
        <div>
        <a href="/Contact/{{$message->id}}" class="btn btn-success">View</a>
        </div>
    </div>
</div>
</div>
 
    @endforeach
@endsection