@extends('header.header')
         @section('content')
                <div class="row" dir="rtl" >
                <div class="background">
                    <div class="col-lg-4"></div>
                 
                  <div class="col-lg-4 one">
                  
                       <div class="text-center">
                          <h4>تنظیم دوباره  گذرواژه</h4>
                    </div>
                    
                     <form action="{{url('forgetpassword')}}" method="post">
                         @csrf
                         
                     @if(Session::has('success'))
                    <div class="alert alert-success" style="font-size:20px; padding:2px;">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                           <div class="alert alert-danger"  style="font-size:20px; padding:2px;">{{Session::get('fail')}}</div>
                    @endif
                     @csrf
                     <div class="card-body">
               <div class="input-group" style=" margin-top:20px;" >
                  <span class="input-group-addon">
                      <i class="glyphicon glyphicon-envelope" ></i>
                      </span>
                  <input type="email" class="form-control text-right" value="{{old('email')}}" name="email" placeholder="لطفا ایمیل آدرس تان را وارد نمایید" style=" border-radius:5px 0px 0px 5px;">
                  </div>
                  <span class="text-danger" style="font-size:12px;">@error('email') {{$message}} @enderror</span> 
                           <input  type="submit" class="btn" value="ارسال"/>

                         <h6 style="color:black; font-size:16px; font-weight:bold; margin-right:10px; padding:15px;">حساب ندارید؟  <a href="{{url('register')}}" style="color:black; font-size:16px; font-weight:bold; margin-right:5px;">ایجاد حساب جدید</a></h6>
                   </div>
                  </form>
                  </div>
                  <div class="clo-lg-4"></div>
                        </div>
                        </div>
                        </div>
                      
 @endsection
                
  <style>
 
    .background{
      background-image:url('Download/user-image/f.jpg');
    background-size:cover;
    min-height:100vh;
    background-position:relative;
    background-repeat:no-repeat;

    opacity:1;
  }
  @media(max-width:768px){
    .background{
      min-height:30vh;

    }
  } 
  .one h4{
    font-size:30px;
    margin-top:30px;
    font-weight:bold;
    color:black;
    padding:20px;
  } 
    .one{
    position:absolute;
    margin-top:150px;
    font-size:30px;
    font-weight:bold;
    box-shadow: 12px  12px 10px 15px rgba(0,0,0,0.19); 
   }
 
  .card-body input[type="email"]{
  display:block;
  color:black;
  border:2px solid lightgray;
  border-radius:5px 0px 0px 5px;
  border-left:1px solid white;
  transition:0.3s;
  padding:20px;
 

  }
  .card-body input[type="email"]:focus{
     border-right:44px solid white;
  }
  .card-body .btn{
border:2px solid lightgray;
   background:white;
   padding: 10px;
   border-radius:15px;
   width:90px;
   height:50px;
   margin-right:290px;
   font-size:25px;
   text-align:center;
   color:black;
   transition:all 0.35s;
   margin-top:40px;
  }
  .card-body .btn:hover{
    background:lightblue;
    color:black;
    border:2px solid lightblue;
    }
    .card-body a:hover{
        background:lightblue;
        text-decoration:none;
        padding:15px;
        color:black;
        border-radius:15px;
    }
 
  </style>