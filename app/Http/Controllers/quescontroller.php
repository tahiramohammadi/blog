<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Math_question;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;

class quescontroller extends Controller
{
   public function question_math(){
    $catagory = catagory::all();
    $math=Math_question::with('catagory')->get();
    return view('Test/math', ['catagory'=>$catagory, 'math_question'=>$math]);
  }
   

   public function add_math(Request $req){
    $math=new Math_question();
    $math->question=$req->input('question');
    $math->catagory_id=$req->catagory_id;
    $math->save();
    if($math){
        return back()->with('ذخیره','موفقانه ذخیره شد ');
        return redirect('math');
    }else{
        return back()->with('هشدار','ذخیره نشد');
    }
   
  }
  public function delete_math(Request $request, $id){
    $math=Math_question::find($id);
            $math->delete();
            if($math){
                return back()->with('حذف','موفقانه حذف  شد ');
                return redirect('math');
            }else{
                return back()->with('هشدار','حذف نشد');
            }
     
        }
        public function update_math(Request $req,$id){

            $upd=Math_question::find($id);
            $upd->question=$req->input('question');
            $upd->catagory_id=$req->catagory_id;
            $upd->save();
            if($upd){
                return back()->with('ویرایش','موفقانه ویرایش  شد ');
                return redirect('math');
            }else{
                return back()->with('هشدار','ویرایش نشد');
            }
  }
}

