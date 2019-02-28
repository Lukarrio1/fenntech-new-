<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landingpage(){
      
        return view('Landing');
    }

    public function Home(){
        return view('Fenntech');
    }

    public function unavailable(){
        return view('Maintenance.unavailable');
    }

    public function Corporate(){
        return view('Corporate.index');    
    }

    public function networking(){
        return view('Networking.Networking');
    }
}
