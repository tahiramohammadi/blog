<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\religious_question;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class relicontroller extends Controller
{
  
        public function create_religious(){
            $catagory = catagory::all();
            $religious= religious_question::with('catagory')->get();
            return view('Test/create_religious',['catagory'=>$catagory, 'religious_question'=>  $religious]);
        }
        public function add_religious(Request $req){
            $religious=new religious_question();
               $religious->question=$req->input('question');
               $religious->option_a=$req->input('option_a');
               $religious->option_b=$req->input('option_b');
               $religious->option_c=$req->input('option_c');
               $religious->option_d=$req->input('option_d');
               $religious->is_correct=$req->input('is_correct');
               $religious->catagory_id=$req->catagory_id;
               $religious->save();
            if( $religious){
                return back()->with('ذخیره','موفقانه ذخیره شد ');
                return redirect('create_religious');
            }else{
                return back()->with('هشدار','ذخیره نشد');
            }
        }
        public function delete_religious(Request $request, $id){
            $religious=religious_question::find($id);
            $religious->delete();
                    if($religious){
                        return back()->with('حذف','موفقانه حذف  شد ');
                        return redirect('create_religious');
                    }else{
                        return back()->with('هشدار','حذف نشد');
                    }
             
                }
                public function update_religious(Request $req,$id){
        
                    $upd=religious_question::find($id);
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
                        return redirect('create_religious');
                    }else{
                        return back()->with('هشدار','ویرایش نشد');
                    }
          }
        
           }
      
