<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class footercontroller extends Controller
{
    function footer(){
        return view('footer/footer');
    }
}
