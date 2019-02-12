<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\landingpage;

class PagesController extends Controller
{
    public function landingpage(){
      
        return view('Landing');
    }

    public function index(){
        return view('Fenntech');
    }

    public function unavailable(){
        return view('Maintenance.unavailable');
    }
}
