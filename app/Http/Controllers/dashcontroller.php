<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashcontroller extends Controller
{
    function dashboard(){
        return view('Dashboard/dashboard');
       }
}
