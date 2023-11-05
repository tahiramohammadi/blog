         @extends('header.header')
         @section('content')
                <div class="row" dir="rtl" >
                <div class="background">
                    <div class="col-lg-4"></div>
                 
                  <div class="col-lg-4 one">
                  
                       <div class="text-center">
                    <img src="Download/user-image/4.jpg" style="margin-top:20px;" width="130px" height="130px" alt="">
                    </div>
                    
                     <form action="{{url('index')}}" method="post">
                     @if(Session::has('success'))
                    <div class="alert alert-success" style="font-size:20px; padding:2px;">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                           <div class="alert alert-danger"  style="font-size:20px; padding:2px;">{{Session::get('fail')}}</div>
                    @endif
                     @csrf
                     <div class="card-body">
                     
               <div class="input-group" style=" margin-top:10px;" >
              
                  <span class="input-group-addon">
                      <i class="glyphicon glyphicon-envelope" ></i>
                      </span>
                  <input type="email" class="form-control text-right" value="{{old('email')}}" name="email" placeholder="لطفا ایمیل آدرس تان را وارد نمایید" style=" border-radius:5px 0px 0px 5px;">
                  </div>
                  <span class="text-danger" style="font-size:12px;">@error('email') {{$message}} @enderror</span> 
                    <div class="input-group" style=" margin-top:10px;">
                  <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock"></i>
                  </span>
                  <input type="password" class="form-control text-right " value="{{old('password')}}" name="password" placeholder="لطفا گذرواژه تان را وارد نمایید" style=" border-radius:5px 0px 0px 5px;">
                  </div>
                  <span class="text-danger" style="font-size:12px;">@error('password') {{$message}} @enderror</span> 
                  <div class="checkbox text-right" style="color:white; font-size:15px; margin-top:20px;" >
                       <label><input type="checkbox" style="margin-right:100px;" >مرا به خاطر بسپار</label>
                      </div>
                     <h6 class="text-right" ><a href="{{url('forgetpassword')}}"  style="color:white; font-size:12px; font-weight:bold; margin-top:30px; padding:20px;"  > گذرواژه تان را فراموش کرده اید؟؟</a></h6>

                           <input  type="submit" class="btn" value="ورود"/>

                         <h6 style="color:white; font-size:12px; font-weight:bold; margin-right:70px; padding:15px;">حساب ندارید؟  <a href="{{url('register')}}" style="color:white; font-size:12px; font-weight:bold; margin-right:5px;">ایجاد حساب جدید</a></h6>
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
      background-image:url('Download/user-image/d.jpg');
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
    .one{
    background-color:#103a4247;
    position:absolute;
    border-top-left-radius:150px;
    border-bottom-right-radius:150px;
    margin-top:130px;
    height:70%;
    font-size:30px;
    font-weight:bold;
    box-shadow: 12px  12px 10px 15px rgba(0,0,0,0.19); 
   }
 
  .card-body input[type="email"],.card-body input[type="password"]{
  display:block;
  color:black;
  border:2px solid lightgray;
  border-radius:5px 0px 0px 5px;
  border-left:1px solid white;
  transition:0.3s;
  padding:20px;

  }
  .card-body input[type="email"]:focus,.card-body input[type="password"]:focus{
     border-right:44px solid white;
  }
  .card-body .btn{
border:2px solid lightgray;
   background:white;
   padding: 10px ;
   border-radius:15px;
   width:90px;
   height:50px;
   margin-right:290px;
   font-size:25px;
   text-align:center;
   color:black;
   transition:all 0.35s;
  }
  .card-body .btn:hover{
    background:#ce810c;
    color:black;
    border:2px solid #b3680f;
    }
 
  </style>