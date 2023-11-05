<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Math_question;
use App\Models\Math_option;
use Validation;
use Illuminate\Support\Facades\Session;
class optioncontroller extends Controller
{
    public function option_math(){
        $math = math_question::all();
    $option=Math_option::with('math_question')->get();
    return view('Test/math-option', ['math_question'=>$math, 'math_options'=>$option]);
    }
    public function add_option(Request $req){
        $option=new Math_option();
        $option->option_a=$req->input('option_a');
        $option->option_b=$req->input('option_b');
        $option->option_c=$req->input('option_c');
        $option->option_d=$req->input('option_d');
        $option->is_correct=$req->input('is_correct');
        $option->question_id=$req->question_id;
        $option->save();
        if($option){
            return back()->with('ذخیره','موفقانه ذخیره شد ');
            return redirect('math-option');
        }else{
            return back()->with('هشدار','ذخیره نشد');
        }
       
      }
      public function delete_option(Request $req, $id){
        $m=Math_option::find($id);
        $m->delete();
        if($m){
            return back()->with('حذف','موفقانه حذف  شد ');
            return redirect('math-option');
        }else{
            return back()->with('هشدار','حذف نشد');
        }
      }
      public function update_option(Request $req,$id){

        $upd=Math_option::find($id);
        $upd->option_a=$req->input('option_a');
        $upd->option_b=$req->input('option_b');
        $upd->option_c=$req->input('option_c');
        $upd->option_d=$req->input('option_d');
        $upd->is_correct=$req->input('is_correct');
        $upd->question_id=$req->question_id;
        $upd->save();
        if($upd){
            return back()->with('ویرایش','موفقانه ویرایش  شد ');
            return redirect('math-option');
        }else{
            return back()->with('هشدار','ویرایش نشد');
        }
}
}
