<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biology_question;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;

class biologycontroller extends Controller
{
    //
    public function create_biology(){
        $catagory = catagory::all();
        $biology= biology_question::with('catagory')->get();
        return view('Test/create_biology',['catagory'=>$catagory,'biology_question'=>$biology]);
    }
    public function add_biology(Request $req){
        $biology=new biology_question();
        $biology->question=$req->input('question');
        $biology->option_a=$req->input('option_a');
        $biology->option_b=$req->input('option_b');
        $biology->option_c=$req->input('option_c');
        $biology->option_d=$req->input('option_d');
        $biology->is_correct=$req->input('is_correct');
        $biology->catagory_id=$req->catagory_id;
        $biology->save();
        if($biology){
            return back()->with('ذخیره','موفقانه ذخیره شد ');
            return redirect('create_biology');
        }else{
            return back()->with('هشدار','ذخیره نشد');
        }
    }
    public function delete_biology(Request $request, $id){
        $biology=biology_question::find($id);
        $biology->delete();
                if( $biology){
                    return back()->with('حذف','موفقانه حذف  شد ');
                    return redirect('create_biology');
                }else{
                    return back()->with('هشدار','حذف نشد');
                }
         
            }
            public function update_biology(Request $req,$id){
    
                $upd=biology_question::find($id);
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
                    return redirect('create_biology');
                }else{
                    return back()->with('هشدار','ویرایش نشد');
                }
      }
    
       }

