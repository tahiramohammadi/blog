<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use Validation;
use Illuminate\Support\Facades\Session;
use App\Models\Exam;
use App\Models\answer;
use App\Models\Question;
use DB;
use Response;

class catagorycontroller extends Controller
{
function createcatagoryform(){
    $catagory = catagory::get();
   
    return view('Test/createcatagory',compact('catagory'));

}
  //  add catagory
 public function add_catagory(Request $req){
  $catagory=new catagory();
  $catagory->catagory=$req->input('catagory');
  $catagory->save();
  if($catagory){
    return back()->with('ذخیره','موفقانه ذخیره شد ');
    return redirect('catagroy');
}else{
    return back()->with('هشدار','ذخیره نشد');
}

 }

//  delete catagory
        public function delete_catagory(Request $request, $id){
          $c=catagory::find($id);
          $c->delete();
          if($c){
            return back()->with('حذف','موفقانه حذف  شد ');
            return redirect('catagory');
        }else{
            return back()->with('هشدار','حذف نشد');
        }
        }

        // update_catagory 
      public function update_catagory(Request $req, $id){
                 $upd=catagory::find($id);
                 $upd->catagory=$req->input('catagory');
                 $upd->save();
                 if($upd){
                  return back()->with('ویرایش','موفقانه ویرایش  شد ');
                  return redirect('catagory');
              }else{
                  return back()->with('هشدار','ویرایش نشد');
              }
      }

        // exam.....
      public function exam(){
        $catagory = catagory::all();
        $exam=Exam::with('catagory')->get();
        return view('Test/exam', ['catagory'=>$catagory, 'exam'=>$exam]);
      }

        //  add_exam...
      public function addexam(Request $req){
        $exam=new Exam();
        $exam->exam_name=$req->input('exam_name');
        $exam->catagory_id=$req->input('catagory_id');
        $exam->duration=$req->input('duration');
        $exam->date=$req->input('date');
        $exam->save();
        return Response::json(array(data=>$exam));
      }

      // get exam
  public function show_exam_datail($id){
   $ex=Exam::where('id', $id)->get();
   return Response::json(array(data=>$ex));
}

  // update exam .....
      public function update_exam(Request $req){
        $up=Exam::find($req->id);
        $up->exam_name=$req->exam_name;
        $up->catagory_id=$req->catagory_id;
        $up->duration=$req->duration;
        $up->date=$req->date;
        $up->save();
        return Response::json(array(data=>$up));
      }

      // delete exam
      public function delete_exam(Request $request){
        $e=Exam::find($request->id);
        $e->delete();
        return Response::json(array(data=>$e));
      }
          // question and answer....
      public function question_answer(){
       $question= Question::with('answers')->get();
        return view('Test/question_answer',compact('question'));
      }

                 //add question.... 
      public function add_question(Request $request){
           $q=Question::insertGetId([
                'question'=>$request->question
           ]);
       foreach($request->answer as $an){
           $is_correct= 0;
           if($request->is_correct == $an){
            $is_correct=1;
           }
            answer::insert([
            'question_id'=>$q,
            'answer'=>$an,
            'is_correct'=>$is_correct
            ]);

       
       }
       return Response::json(array(data=>$q));
      
      }
    
}
