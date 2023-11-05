<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chemistry_question;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;


class chemistrycontroller extends Controller
{
    //
public function create_chimistray(){
    $catagory = catagory::all();
    $chemistry= chemistry_question::with('catagory')->get();
    return view('Test/create_chimistray',['catagory'=>$catagory,'chemistry_question'=>$chemistry]);
}
   public function add_chemistry(Request $req){
    $option=new chemistry_question();
    $option->question=$req->input('question');
    $option->option_a=$req->input('option_a');
    $option->option_b=$req->input('option_b');
    $option->option_c=$req->input('option_c');
    $option->option_d=$req->input('option_d');
    $option->is_correct=$req->input('is_correct');
    $option->catagory_id=$req->catagory_id;
    $option->save();
    if($option){
        return back()->with('ذخیره','موفقانه ذخیره شد ');
        return redirect('create_chimistray');
    }else{
        return back()->with('هشدار','ذخیره نشد');
    }
}
public function delete_chemistry(Request $request, $id){
    $chemistry=chemistry_question::find($id);
    $chemistry->delete();
            if($chemistry){
                return back()->with('حذف','موفقانه حذف  شد ');
                return redirect('create_chimistray');
            }else{
                return back()->with('هشدار','حذف نشد');
            }
     
        }

        public function update_chemistry(Request $req,$id){

            $upd=chemistry_question::find($id);
            $upd->question=$req->input('question');
            $upd->option_a=$req->input('option_a');
            $upd->option_b=$req->input('option_b');
            $upd->option_c=$req->input('option_c');
            $upd->option_d=$req->input('option_d');
            $upd->is_correct=$req->input('is_correct');
            $upd->catagory_id=$req->catagory_id;
            $upd->save();
            if($upd){
                return back()->with('ویرایش','موفقانه ویرایش  شد ');
                return redirect('create_chimistray');
            }else{
                return back()->with('هشدار','ویرایش نشد');
            }
  }

   }

