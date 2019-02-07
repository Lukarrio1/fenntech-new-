<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landingpage(){
        $photo = "damian-patkowski-449653-unsplash.jpg";
        return view('Landing')->with('photo',$photo);
    }

    public function index(){
        return view('Fenntech');
    }

    public function unavailable(){
        return view('Maintenance.unavailable');
    }
}
