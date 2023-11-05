<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class headercontroller extends Controller
{
    function header(){
        return view('header/header');
       }
}
