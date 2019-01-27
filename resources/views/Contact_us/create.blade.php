@extends('layouts.app')

@section('title')
    
@endsection

@section('content')

    <div class="col-12 ">
        <div class="card bg-success">
            <div class="card-body">
                <span class="h1 text-white">
                    Contact Us
                </span>
            </div>
        </div>
    </div>
    @include('inc.message')
    <div class="col-8 pt-3 offset-1">
        <div class="card ">
            <form action="/Contact_us" method="POST">
                @csrf
                <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                      </div>
                <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="subject" name="subject">
                      </div>
                <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" rows="3" name="body"></textarea>
                      </div>
                      <button class="btn btn-succcess" type="submit">Send message</button>
            </form>
    </div>
    </div>

    
@endsection