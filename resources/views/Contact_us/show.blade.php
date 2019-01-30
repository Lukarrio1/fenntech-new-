@extends('layouts.app')
@section('title')
Message({{$count}})
@endsection

@section('content')
<div class="col-3"><a href="{{url('/Contact_us')}}" class="btn btn-danger">Back</a></div>
    <div class="col-md-8 offset-md-2">
    <div class="card"> 
        <div class="card-body">
                <div class="">
                     <p>From: {{$message->email}}</p>
                      <p>Subject: {{$message->subject}}</p>  
                      <p>Body: {{$message->body}}</p> 
              </div> 
        </div>
        <div class="card-footer">
        <form action="/Contact_us/{{$message->id}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    </div>
@endsection