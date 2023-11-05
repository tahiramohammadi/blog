<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Math_question;
use App\Models\Math_option;
use App\Models\Math_answer;
use Validation;
use Illuminate\Support\Facades\Session;

class usercontroller extends Controller
{
    public function user_index(){
       
       
        return view('Test/index');
    }
  
  
}
