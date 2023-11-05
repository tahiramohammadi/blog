<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gio_question;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class giocontroller extends Controller
{
    public function create_giology(){
        $catagory = catagory::all();
        $history= gio_question::with('catagory')->get();
        return view('Test/create_giology',['catagory'=>$catagory, 'gio_question'=>  $history]);
    }
    public function add_gio(Request $req){
        $history=new gio_question();
           $history->question=$req->input('question');
           $history->option_a=$req->input('option_a');
           $history->option_b=$req->input('option_b');
           $history->option_c=$req->input('option_c');
           $history->option_d=$req->input('option_d');
           $history->is_correct=$req->input('is_correct');
           $history->catagory_id=$req->catagory_id;
           $history->save();
        if( $history){
            return back()->with('ذخیره','موفقانه ذخیره شد ');
            return redirect('create_giology');
        }else{
            return back()->with('هشدار','ذخیره نشد');
        }
    }
    public function delete_gio(Request $request, $id){
        $history=gio_question::find($id);
        $history->delete();
                if(  $history){
                    return back()->with('حذف','موفقانه حذف  شد ');
                    return redirect('create_giology');
                }else{
                    return back()->with('هشدار','حذف نشد');
                }
         
            }
            public function update_gio(Request $req,$id){
    
                $upd=gio_question::find($id);
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
                    return redirect('create_giology');
                }else{
                    return back()->with('هشدار','ویرایش نشد');
                }
      }
    
       }
