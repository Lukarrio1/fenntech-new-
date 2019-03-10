<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landingpage(){
      
        return view('Landing');
    }


    public function unavailable(){
        return view('Maintenance.unavailable');
    }

  
}
