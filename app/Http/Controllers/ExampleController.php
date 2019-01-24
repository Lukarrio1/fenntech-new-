<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // this is an example of a function returning a view (page)
    public function example(){
        return view('example');
    }
}
