<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function HomeMain(){
        return view('frontend.index');
    }// end mehtod 
}