<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\physic_question;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class physiccontroller extends Controller
{
public function create_physic(){
     $catagory = catagory::all();
     $physic=physic_question::with('catagory')->get();
     return view('Test/create_physic', ['catagory'=>$catagory, 'physic_question'=> $physic]);
}
public function add_physic(Request $req){
     $physic=new physic_question();
     $physic->question=$req->input('question');
     $physic->option_a=$req->input('option_a');
     $physic->option_b=$req->input('option_b');
     $physic->option_c=$req->input('option_c');
     $physic->option_d=$req->input('option_d');
     $physic->is_correct=$req->input('is_correct');
     $physic->catagory_id=$req->catagory_id;
     $physic->save();
 }
 public function delete_physic(Request $request, $id){
     $physic=physic_question::find($id);
     $physic->delete();
             if($physic){
                 return back()->with('حذف','موفقانه حذف  شد ');
                 return redirect('create_physic');
             }else{
                 return back()->with('هشدار','حذف نشد');
             }
      
         }
         public function update_physic(Request $req,$id){
 
             $upd=physic_question::find($id);
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
                 return redirect('create_physic');
             }else{
                 return back()->with('هشدار','ویرایش نشد');
             }
   }
}




