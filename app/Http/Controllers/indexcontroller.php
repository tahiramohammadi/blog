<?php

namespace App\Http\Controllers;

use App\Models\biology_question;
use Illuminate\Http\Request;
use App\Models\physic_question;
use App\Models\catagory;
use App\Models\chemistry_question;
use App\Models\history_question;
use App\Models\jiographic_question;
use App\Models\Math_answer;
use App\Models\Math_option;
use App\Models\Math_question;
use App\Models\religious_question;
use App\Models\islamic_question;
use App\Models\persian_question;
use App\Models\pakhto_question;
use App\Models\gio_question;
use Validation;
use Illuminate\Support\Facades\Session;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class indexcontroller extends Controller
{
  
   
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
             
        // check correct or wrong
        if($request->ans==$request->is_correct){
            Session::put('correct', Session::get('correct')+1);
        
       }
        else{
            Session::put('wrong', Session::get('wrong')+1);
        }



        // new sections
        

        if($request->section=="Math"){
         //find next quesiton
         $next_question = Math_option::with('math_question')->where('id', '>', $request->question_id)->orderBy('id')->first();            
         // check the end of questions...
        if (empty($next_question)) {
        Session::put('counter',1);
        $physic=physic_question::first();     
        return view('Test/ans',['physic_question'=>$physic]);
          }  
          else{
            return view('Test/ans',['math_question'=>$next_question]);
        }
        }




        if($request->section=="Physic"){
            //find next quesiton
            $next_question = physic_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
         // check the end of questions...
            if (empty($next_question)) {
           Session::put('counter',1);
           $chemistry=chemistry_question::first();     
           return view('Test/ans',['chemistry_question'=>$chemistry]);
            }
             else{
            return view('Test/ans',['physic_question'=>$next_question]);
            } 
           }


           


        if($request->section=="Chemistry"){
            //find next quesiton
            $next_question = chemistry_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
         // check the end of questions...
            if (empty($next_question)) {
                Session::put('counter',1);
                $biology=biology_question::first();     
                return view('Test/ans',['biology_question'=>$biology]);
            }
             else{
            return view('Test/ans',['chemistry_question'=>$next_question]);
            } 
           }

           


           if($request->section=="Biology"){
            //find next quesiton
            $next_question = biology_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
           Session::put('counter',1);
           $jiographic=jiographic_question::first();     
           return view('Test/ans',['jiographic_question'=>$jiographic]);
            }
             else{
            return view('Test/ans',['biology_question'=>$next_question]);
            } 
           }



           

           if($request->section=="Jiographic"){
            //find next quesiton
            $next_question = jiographic_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
                Session::put('counter',1);
                $history=history_question::first();     
               return view('Test/ans',['history_question'=>$history]);              
            }
             else{
            return view('Test/ans',['jiographic_question'=>$next_question]);
            } 
           }


           if($request->section=="History"){
            //find next quesiton
            $next_question = history_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
                Session::put('counter',1);
                $history=religious_question::first();     
               return view('Test/ans',['religious_question'=>$history]);              
            }
             else{
            return view('Test/ans',['history_question'=>$next_question]);
            } 
           }


           if($request->section=="Religious"){
            //find next quesiton
            $next_question = religious_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
                Session::put('counter',1);
                $history=islamic_question::first();     
               return view('Test/ans',['islamic_question'=>$history]);              
            }
             else{
            return view('Test/ans',['religious_question'=>$next_question]);
            } 
           }


           if($request->section=="Islamic"){
            //find next quesiton
            $next_question = islamic_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
                Session::put('counter',1);
                $history=persian_question::first();     
               return view('Test/ans',['persian_question'=>$history]);              
            }
             else{
            return view('Test/ans',['islamic_question'=>$next_question]);
            } 
           }


           if($request->section=="Persian"){
            //find next quesiton
            $next_question = persian_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
                Session::put('counter',1);
                $history=pakhto_question::first();     
               return view('Test/ans',['pakhto_question'=>$history]);              
            }
             else{
            return view('Test/ans',['persian_question'=>$next_question]);
            } 
           }

           if($request->section=="Pakhto"){
            //find next quesiton
            $next_question = pakhto_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
                Session::put('counter',1);
                $history=gio_question::first();     
               return view('Test/ans',['gio_question'=>$history]);              
            }
             else{
            return view('Test/ans',['pakhto_question'=>$next_question]);
            } 
           }






           if($request->section=="Giology"){
            //find next quesiton
            $next_question = gio_question::where('id', '>', $request->question_id)->orderBy('id')->first();            
             // check the end of questions...
            if (empty($next_question)) {        
                return view('Test/end');
            }
             else{
            return view('Test/ans',['gio_question'=>$next_question]);
            } 
           }
           




      
        
        
    



    }

}


   


