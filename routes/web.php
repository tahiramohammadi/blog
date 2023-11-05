<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\masterController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\headercontroller;
use App\Http\Controllers\dashcontroller;
use App\Http\Controllers\footercontroller;
use App\Http\Controllers\catagorycontroller;
use App\Http\Controllers\quescontroller;
use App\Http\Controllers\optioncontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\physiccontroller;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\chemistrycontroller;
use App\Http\Controllers\biologycontroller;
use App\Http\Controllers\jiogcontroller;
use App\Http\Controllers\historycontroller;
use App\Http\Controllers\relicontroller;
use App\Http\Controllers\islamiccontroller;
use App\Http\Controllers\persiancontroller;
use App\Http\Controllers\pakhtocontroller;
use App\Http\Controllers\giocontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('header',[headercontroller::class,'header']);
route::get('master',[masterController::class,'home']);
route::get('link',[linkcontroller::class, 'link']);
//register route.. 
route::post('dashboard',[logincontroller::class,'loginUser'])->name('dashboard');

route::get('dashboard',[dashcontroller::class,'dashboard']);
route::get('login',[logincontroller::class,'login']);
route::get('register',[logincontroller::class,'register'])->name('register');
route::post('/login',[logincontroller::class,'registerUser'])->name('login');
route::get('/footer',[footercontroller::class,'footer']);
// forgot password and reset password.....
route::get('forgetpassword',[logincontroller::class,'showforgetpasswordform']);
route::post('forgetpassword',[logincontroller::class,'submitforgetpasswordform']);                                                                                             
 route::get('reset-password/{token}',[logincontroller::class, 'showresetpasswordform']);
  route::post('reset-password', [logincontroller::class,'submitresetpasswordform'])->name('resetPassword');
//examination route catagory......
route::get('createcatagory',[catagorycontroller::class,'createcatagoryform']);
route::post('/add_catagory',[catagorycontroller::class,'add_catagory'])->name('add_catagory');
//delete_catagory
route::get('delete_catagory{id}',[catagorycontroller::class, 'delete_catagory' ]);
route::post('update_catagory{id}',[catagorycontroller::class, 'update_catagory' ]);
// add exam .....

route::get('exam',[catagorycontroller::class, 'exam']);
route::post('add-exam',[catagorycontroller::class, 'addexam'])->name('add-exam');
route::get('delete_exam',[catagorycontroller::class,'delete_exam'])->name('delete_exam');
route::get('show_exam_datail/{id}',[catagorycontroller::class,'show_exam_datail'])->name('show_exam_datail');
route::post('update_exam',[catagorycontroller::class,'update_exam'])->name('update_exam');
// create questions and answer......
// route::get('question_answer',[catagorycontroller::class,'question_answer']);
// route::post('add_question',[catagorycontroller::class,'add_question'])->name('add_question');


// math question ......
 route::get('math',[quescontroller::class,'question_math']);
route::post('add_math',[quescontroller::class, 'add_math'])->name('add_math');
route::get('delete_math{id}',[quescontroller::class,'delete_math']);
route::post('update_math{id}',[quescontroller::class,'update_math']);
// math option......
route::get('math-option',[optioncontroller::class,'option_math']);
route::post('add_option',[optioncontroller::class, 'add_option'])->name('add_option');
route::get('delete_option{id}',[optioncontroller::class,'delete_option']);
route::post('update_option{id}',[optioncontroller::class,'update_option']);
// physic question.......
route::get('create_physic',[physiccontroller::class,'create_physic']);
route::post('add_physic',[physiccontroller::class,'add_physic'])->name('add_physic');
route::get('delete_physic{id}',[physiccontroller::class,'delete_physic']);
route::post('update_physic{id}',[physiccontroller::class,'update_physic']);
      //chemistray question....
   route::get('create_chimistray',[chemistrycontroller::class,'create_chimistray']);
   route::post('add_chemistry',[chemistrycontroller::class,'add_chemistry'])->name('add_chemistry');
   route::get('delete_chemistry{id}',[chemistrycontroller::class,'delete_chemistry']);
    route::post('update_chemistry{id}',[chemistrycontroller::class,'update_chemistry']);

    //biology question..
    route::get('create_biology',[biologycontroller::class,'create_biology']);
    route::post('add_biology',[biologycontroller::class,'add_biology'])->name('add_biology');
    route::get('delete_biology{id}',[biologycontroller::class,'delete_biology']);
     route::post('update_biology{id}',[biologycontroller::class,'update_biology']);
     //jioquestion...
     route::get('create_jiographic',[jiogcontroller::class,'create_jiographic']);
     route::post('add_jio',[jiogcontroller::class,'add_jio'])->name('add_jio');
     route::get('delete_jio{id}',[jiogcontroller::class,'delete_jio']);
      route::post('update_jio{id}',[jiogcontroller::class,'update_jio']);
      //history question
      route::get('create_history',[historycontroller::class,'create_history']);
      route::post('add_history',[historycontroller::class,'add_history'])->name('add_history');
      route::get('delete_history{id}',[historycontroller::class,'delete_history']);
       route::post('update_history{id}',[historycontroller::class,'update_history']);
       //religious question 
       route::get('create_religious',[relicontroller::class,'create_religious']);
       route::post('add_religious',[relicontroller::class,'add_religious'])->name('add_religious');
       route::get('delete_religious{id}',[relicontroller::class,'delete_religious']);
        route::post('update_religious{id}',[relicontroller::class,'update_religious']);

        //islamic question route....

        route::get('create_islamic',[islamiccontroller::class,'create_islamic']);
        route::post('add_islamic',[islamiccontroller::class,'add_islamic'])->name('add_islamic');
        route::get('delete_islamic{id}',[islamiccontroller::class,'delete_islamic']);
         route::post('update_islamic{id}',[islamiccontroller::class,'update_islamic']);

         //persian question route
         route::get('create_persian',[persiancontroller::class,'create_persian']);
         route::post('add_persian',[persiancontroller::class,'add_persian'])->name('add_persian');
         route::get('delete_persian{id}',[persiancontroller::class,'delete_persian']);
          route::post('update_persian{id}',[persiancontroller::class,'update_persian']);
          
     //route pakhto 
     route::get('create_pakhto',[pakhtocontroller::class,'create_pakhto']);
          route::post('add_pakhto',[pakhtocontroller::class,'add_pakhto'])->name('add_pakhto');
          route::get('delete_pakhto{id}',[pakhtocontroller::class,'delete_pakhto']);
           route::post('update_pakhto{id}',[pakhtocontroller::class,'update_pakhto']);

           //route giology

           route::get('create_giology',[giocontroller::class,'create_giology']);
           route::post('add_gio',[giocontroller::class,'add_gio'])->name('add_gio');
           route::get('delete_gio{id}',[giocontroller::class,'delete_gio']);
            route::post('update_gio{id}',[giocontroller::class,'update_gio']);

// user route....
route::post('index',[usercontroller::class,'user_index'])->name('index');
route::get('end',[indexcontroller::class,'end']);
route::get('ans',[indexcontroller::class,'ans'])->name('ans');
route::post('ans',[indexcontroller::class,'submit'])->name('ans_store');
