<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\landingpage;

class PagesController extends Controller
{
    public function landingpage(){
        $landing = landingpage::all();
        return view('Landing')->with('landing',$landing);
    }

    public function index(){
        return view('Fenntech');
    }

    public function unavailable(){
        return view('Maintenance.unavailable');
    }
}
