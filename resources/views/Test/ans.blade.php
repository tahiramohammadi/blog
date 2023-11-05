@include('link')
  <style >
 .background{
       background:#c5e9ed;
       width:100%;
       height:650px;
}
     .container .col-md-8 .time{
      text-align:center;
       padding:12px; 
       font-size:20px;
        margin-top:20px; background:#bfe3d9ad;
         width:170px; 
         height:60px; 
      margin-right:270px;
      box-shadow:8px 10px 12px 10px #636c61;
     }
  </style>
  <div class="background">


@isset($math_question) 
    <div class="row">
      
       <div class="col-md-2"></div>
       <div class="container">
  <div class="col-md-8">
      <h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
         <div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>

      

 <!-- <span class="sec">5</span>:
         <span class="min">40</span>:
         <span class="hrs">2</span> -->
   
    <div class="panel panel-default">
        <div class="panel panel-heading">
          <h2>بخش ریاضیات</h2>
        </div> 
        <div class="panel panel-body">
          <form method="post" action="{{route('ans_store')}}">
            @csrf

       @if ($math_question)
       <h3>{{Session::get('counter')}}: {{$math_question->math_question[0]->question}}</h3>
       <input type="hidden" value="Math" name="section">
       <input  name="is_correct" value="{{$math_question->option_a}}" type="radio" required>الف: <small>{{$math_question->option_a}}</small><br>
       <input  name="is_correct" value="{{$math_question->option_b}}" type="radio" required>ب: <small>{{$math_question->option_b}}</small><br>
       <input  name="is_correct"  value="{{$math_question->option_c}}" type="radio" required>ج: <small>{{$math_question->option_c}}</small><br>
       <input  name="is_correct" value="{{$math_question->option_d}}" type="radio" required>د: <small>{{$math_question->option_d}}</small><br>
       <input  type="hidden"  value="{{$math_question->is_correct}}" name="ans" required>
       <input  type="hidden"  value="{{$math_question->id}}" name="question_id" required>
       <div class="col-md-6">
        <button type="submit" class="btn btn-success">سوال بعدی</button>
      </div>    
      @else
      <h3>سوال وجود ندارد</h3>
      @endif 
       
    </form>
  </div>
</div>
</div>  
   </div>
   <div class="col-md-2"></div>
  </div>
  @endisset 





  @isset($physic_question) 
  <div class="row">
    <div class="col-md-2"></div>
    <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
 <div class="panel panel-default">
     <div class="panel panel-heading">
       <h2>بخش فزیک</h2>
     </div> 
     <div class="panel panel-body">
       <form method="post" action="{{route('ans_store')}}">
         @csrf
    @if ($physic_question)
    <h3>{{Session::get('counter')}}: {{$physic_question->question}}</h3>
    <input type="hidden" value="Physic" name="section">
    <input  name="is_correct" value="{{$physic_question->option_a}}" type="radio" required>الف: <small>{{$physic_question->option_a}}</small><br>
    <input  name="is_correct" value="{{$physic_question->option_b}}" type="radio" required>ب: <small>{{$physic_question->option_b}}</small><br>
    <input  name="is_correct"  value="{{$physic_question->option_c}}" type="radio" required>ج: <small>{{$physic_question->option_c}}</small><br>
    <input  name="is_correct" value="{{$physic_question->option_d}}" type="radio" required>د: <small>{{$physic_question->option_d}}</small><br>
    <input  type="hidden"  value="{{$physic_question->is_correct}}" name="ans" required>
    <input  type="hidden"  value="{{$physic_question->id}}" name="question_id" required>
    <div class="col-md-6">
     <button type="submit" class="btn btn-success">سوال بعدی</button>
    </div>     
    @else
    <h3>سوال وجود ندارد</h3>
    @endif 
     
  </form>
</div>
</div>
</div>  
 </div>
 <div class="col-md-2"></div>
</div>
@endisset 

  


@isset($chemistry_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش کیمیا</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($chemistry_question)
  <h3>{{Session::get('counter')}}: {{$chemistry_question->question}}</h3>
  <input type="hidden" value="Chemistry" name="section">
  <input  name="is_correct" value="{{$chemistry_question->option_a}}" type="radio" required>الف: <small>{{$chemistry_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$chemistry_question->option_b}}" type="radio" required>ب: <small>{{$chemistry_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$chemistry_question->option_c}}" type="radio" required>ج: <small>{{$chemistry_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$chemistry_question->option_d}}" type="radio" required>د: <small>{{$chemistry_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$chemistry_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$chemistry_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 



@isset($biology_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش بیولوژی</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($biology_question)
  <h3>{{Session::get('counter')}}: {{$biology_question->question}}</h3>
  <input type="hidden" value="Biology" name="section">
  <input  name="is_correct" value="{{$biology_question->option_a}}" type="radio" required>الف: <small>{{$biology_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$biology_question->option_b}}" type="radio" required>ب: <small>{{$biology_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$biology_question->option_c}}" type="radio" required>ج: <small>{{$biology_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$biology_question->option_d}}" type="radio" required>د: <small>{{$biology_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$biology_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$biology_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 




@isset($jiographic_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش جغرافیه</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($jiographic_question)
  <h3>{{Session::get('counter')}}: {{$jiographic_question->question}}</h3>
  <input type="hidden" value="Jiographic" name="section">
  <input  name="is_correct" value="{{$jiographic_question->option_a}}" type="radio" required>الف: <small>{{$jiographic_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$jiographic_question->option_b}}" type="radio" required>ب: <small>{{$jiographic_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$jiographic_question->option_c}}" type="radio" required>ج: <small>{{$jiographic_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$jiographic_question->option_d}}" type="radio" required>د: <small>{{$jiographic_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$jiographic_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$jiographic_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 





@isset($history_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش تاریخ</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($history_question)
  <h3>{{Session::get('counter')}}: {{$history_question->question}}</h3>
  <input type="hidden" value="History" name="section">
  <input  name="is_correct" value="{{$history_question->option_a}}" type="radio" required>الف: <small>{{$history_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$history_question->option_b}}" type="radio" required>ب: <small>{{$history_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$history_question->option_c}}" type="radio" required>ج: <small>{{$history_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$history_question->option_d}}" type="radio" required>د: <small>{{$history_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$history_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$history_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 



  
@isset($religious_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
     <div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
      </div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش دینی</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($religious_question)
  <h3>{{Session::get('counter')}}: {{$religious_question->question}}</h3>
  <input type="hidden" value="Religious" name="section">
  <input  name="is_correct" value="{{$religious_question->option_a}}" type="radio" required>الف: <small>{{$religious_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$religious_question->option_b}}" type="radio" required>ب: <small>{{$religious_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$religious_question->option_c}}" type="radio" required>ج: <small>{{$religious_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$religious_question->option_d}}" type="radio" required>د: <small>{{$religious_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$religious_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$religious_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 


     
@isset($islamic_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش تفسیر</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($islamic_question)
  <h3>{{Session::get('counter')}}: {{$islamic_question->question}}</h3>
  <input type="hidden" value="Islamic" name="section">
  <input  name="is_correct" value="{{$islamic_question->option_a}}" type="radio" required>الف: <small>{{$islamic_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$islamic_question->option_b}}" type="radio" required>ب: <small>{{$islamic_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$islamic_question->option_c}}" type="radio" required>ج: <small>{{$islamic_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$islamic_question->option_d}}" type="radio" required>د: <small>{{$islamic_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$islamic_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$islamic_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 
  
     

@isset($persian_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش دری </h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($persian_question)
  <h3>{{Session::get('counter')}}: {{$persian_question->question}}</h3>
  <input type="hidden" value="Persian" name="section">
  <input  name="is_correct" value="{{$persian_question->option_a}}" type="radio" required>الف: <small>{{$persian_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$persian_question->option_b}}" type="radio" required>ب: <small>{{$persian_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$persian_question->option_c}}" type="radio" required>ج: <small>{{$persian_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$persian_question->option_d}}" type="radio" required>د: <small>{{$persian_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$persian_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$persian_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 


@isset($pakhto_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
       <div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
      </div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش تفسیر</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($pakhto_question)
  <h3>{{Session::get('counter')}}: {{$pakhto_question->question}}</h3>
  <input type="hidden" value="Pakhto" name="section">
  <input  name="is_correct" value="{{$pakhto_question->option_a}}" type="radio" required>الف: <small>{{$pakhto_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$pakhto_question->option_b}}" type="radio" required>ب: <small>{{$pakhto_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$pakhto_question->option_c}}" type="radio" required>ج: <small>{{$pakhto_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$pakhto_question->option_d}}" type="radio" required>د: <small>{{$pakhto_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$pakhto_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$pakhto_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 




@isset($gio_question) 
<div class="row">
  <div class="col-md-2"></div>
  <div class="container">
<div class="col-md-8">
<h1 style="text-align:center; font-weight:bold; margin-top:40px; ">زمان امتحان آزمایشی آغاز شد.</h1>
<div class="time" >
         <p id="demo" style="padding:15px; font-size:13px;" ></p>
        
</div>
<div class="panel panel-default">
   <div class="panel panel-heading">
     <h2>بخش تفسیر</h2>
   </div> 
   <div class="panel panel-body">
     <form method="post" action="{{route('ans_store')}}">
       @csrf
  @if ($gio_question)
  <h3>{{Session::get('counter')}}: {{$gio_question->question}}</h3>
  <input type="hidden" value="Giology" name="section">
  <input  name="is_correct" value="{{$gio_question->option_a}}" type="radio" required>الف: <small>{{$gio_question->option_a}}</small><br>
  <input  name="is_correct" value="{{$gio_question->option_b}}" type="radio" required>ب: <small>{{$gio_question->option_b}}</small><br>
  <input  name="is_correct"  value="{{$gio_question->option_c}}" type="radio" required>ج: <small>{{$gio_question->option_c}}</small><br>
  <input  name="is_correct" value="{{$gio_question->option_d}}" type="radio" required>د: <small>{{$gio_question->option_d}}</small><br>
  <input  type="hidden"  value="{{$gio_question->is_correct}}" name="ans" required>
  <input  type="hidden"  value="{{$gio_question->id}}" name="question_id" required>
  <div class="col-md-6">
   <button type="submit" class="btn btn-success">سوال بعدی</button>
  </div>     
  @else
  <h3>سوال وجود ندارد</h3>
  @endif 
   
</form>
</div>
</div>
</div>  
</div>
<div class="col-md-2"></div>
</div>
@endisset 
</div>
     <script>
        //    function dec_hrs(){
        //     hrs=parseInt($('.hrs').html());
        //        if(hrs !==0){
        //         $('.hrs').html(hrs - 1);
        //         $('.min').html(59);
        //         $('.sec').html(59);
        //        }
        //        else{
        //                pass;
        //        }
        //    }
           


        //    function dec_min(){
        //        min=parseInt($('.min').html());
        //        if(min !==0){
        //         $('.min').html(min - 1);
        //         $('.sec').html(59);
        //        }
        //        else{
        //         dec_hrs();
        //        }
        //    }
        // $(document).ready(function(){
        //   var Update= function(){
        //     $('.sec').each(function(){
        //        var count =parseInt($(this).html());
        //        if(count !== 0){

               
        //        $(this).html(count -1 );
        //        }
        //        else{
        //             dec_min();
        //        }
        //     });
        //   };
        //   setInterval(Update, 1000) 
        // });
      
         var dest= new Date("Dec 12, 2022  1:51:00").getTime();
         var x = setInterval(function(){
         var now =new Date().getTime();
         var diff= dest-now;
         var days= Math.floor(diff / (1000*60*60*24));
         console.log(days);
         var hours=Math.floor ((diff % (1000*60*60*24)) / (1000*60*60));
         console.log( hours);
         var minutes = Math.floor((diff % (1000*60*60)) / (1000 * 60));
         console.log(minutes);
         var seconds= Math.floor((diff % (1000 * 60)) / 1000);
         console.log(seconds);
         document.getElementById("demo").innerHTML = hours+"hrs, " + minutes + "m: "+ seconds + "s: "
      }, 1000 );
      </script>
   