<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesterController extends Controller
{
    public function tester(){
        return view('tester.tester');
    }
}
