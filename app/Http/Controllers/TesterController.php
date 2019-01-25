<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesterController extends Controller
{
    public function tester(){
        $theme = "warning";
        $btn = "danger";
        return view('tester.tester')->with('theme',$theme)->with('btn',$btn);
    }
}
