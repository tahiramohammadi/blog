<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\physic_question;
use App\Models\catagory;
use App\Models\Math_answer;
use App\Models\Math_option;
use App\Models\Math_question;
use Validation;
use Illuminate\Support\Facades\Session;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class indexcontroller extends Controller
{
    public function user_exam(){
        $catagory = catagory::all();
        $math=physic_question::with('catagory')->get();
        return  view('Test/user_exam',['catagory'=>$catagory, 'physic_question'=>$math]);
    }
    public function add_exam(Request $req){
        $option=new physic_question();
        $option->question=$req->input('question');
        $option->option_a=$req->input('option_a');
        $option->option_b=$req->input('option_b');
        $option->option_c=$req->input('option_c');
        $option->option_d=$req->input('option_d');
        $option->is_correct=$req->input('is_correct');
        $option->catagory_id=$req->catagory_id;
        $option->save();
    }
    public function start(){
          return view('Test/start');
    }
    
    public function end(){
        
        return view('Test/end');
    }

    public function  ans(){
         Session::put('counter',1);
         Session::put('correct',0);
         Session::put('wrong',0);
         $math=Math_option::with('math_question')->first();
        return view('Test/ans',['math_question'=>$math]);
    }

    public function submit(Request $request){
        // counter number
         Session::put('counter', Session::get('counter')+1);
        
        //find next quesiton
        $next_question = Math_option::with('math_question')->where('id', '>', $request->question_id)->orderBy('id')->first();     
       
        // check correct or wrong
        if($request->ans==$request->is_correct){
            Session::put('correct', Session::get('correct')+1);
        
       }
        else{
            Session::put('wrong', Session::get('wrong')+1);
        }

        // check the end of questions...
        if (empty($next_question)) {
          return view('Test/end');
        } 
        else {
        return view('Test/ans',['math_question'=>$next_question]);
        }

    }
   
}

