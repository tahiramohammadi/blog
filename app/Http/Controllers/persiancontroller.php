<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persian_question;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class persiancontroller extends Controller
{
    public function create_persian(){
        $catagory = catagory::all();
        $jio= persian_question::with('catagory')->get();
        return view('Test/create_persian',['catagory'=>$catagory, 'persian_question'=> $jio]);
    }
    public function add_persian(Request $req){
          $jio=new persian_question();
          $jio->question=$req->input('question');
          $jio->option_a=$req->input('option_a');
          $jio->option_b=$req->input('option_b');
          $jio->option_c=$req->input('option_c');
          $jio->option_d=$req->input('option_d');
          $jio->is_correct=$req->input('is_correct');
          $jio->catagory_id=$req->catagory_id;
          $jio->save();
        if(  $jio){
            return back()->with('ذخیره','موفقانه ذخیره شد ');
            return redirect('create_persian');
        }else{
            return back()->with('هشدار','ذخیره نشد');
        }
    }
    public function delete_persian(Request $request, $id){
          $jio=persian_question::find($id);
          $jio->delete();
                if(   $jio){
                    return back()->with('حذف','موفقانه حذف  شد ');
                    return redirect('create_persian');
                }else{
                    return back()->with('هشدار','حذف نشد');
                }
         
            }
            public function update_persian(Request $req,$id){
    
                $upd=persian_question::find($id);
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
                    return redirect('create_persian');
                }else{
                    return back()->with('هشدار','ویرایش نشد');
                }
      }
    
       }
