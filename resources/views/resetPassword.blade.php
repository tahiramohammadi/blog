@extends('header.header')
@section('content')
<div class="row" dir="rtl" >
                <div class="background">
                    <div class="col-lg-4"></div>
                  <div class="col-lg-4 two">
                       <div class="text-center">
                    <img src="Download/user-image/7.png" style="margin-top:20px;" width="130px" height="130px" alt="">
                    </div>
                    
                     <form action="{{url('resetPassword')}}" method="post">
                     @csrf
                     <div class="card-body form">
                      <input type="hidden" name="token" value="{{$token}}"> 
                       <!-- <input type="hidden" name="id" value="{{$user[0]['id']}}"> -->
               <div class="input-group" style=" margin-top:10px;" >
                  <span class="input-group-addon">
                      <i class="glyphicon glyphicon-envelope" ></i>
                      </span>
                  <input type="email" class="form-control text-right"  name="email" placeholder="لطفا ایمیل آدرس تان را وارد نمایید" style=" border-radius:5px 0px 0px 5px;">
                 
                </div>
                 
                <span class="text-danger" style="font-size:12px;">@error('email') {{$message}} @enderror</span> 
                     
                    <div class="input-group" style=" margin-top:10px;">
                  <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock"></i>
                  </span>
                  <input type="password" class="form-control text-right " name="password" placeholder="لطفا گذرواژه تان را وارد نمایید" style=" border-radius:5px 0px 0px 5px;">
                  
                </div>
               
                <span class="text-danger" style="font-size:12px;">@error('password') {{$message}} @enderror</span> 

                  <div class="input-group" style=" margin-top:10px;">
                  <span class="input-group-addon" >
                  <i class="glyphicon glyphicon-lock"></i>
               
                  </span>
                  <input type="password"  class="form-control text-right"  name="cpassword" placeholder="لطفا گذرواژه تان را دوباره تایپ نمایید" style="border-radius:5px 0px 0px 5px;">
                 
                </div>
                <span class="text-danger " style="font-size:12px;">@error('cpassword') {{$message}} @enderror</span>
                     <div class="input-group ">
               <input type="submit" class="btn  success text-center" value="بروز رسانی" />
                        </div>
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
      background-image:url('Download/user-image/b.jpg');
    background-size:cover;
    min-height:110vh;
    margin-top:40px;
    
    background-position:relative;
    background-repeat:no-repeat;
    opacity:0.9;
  }
  @media(max-width:768px){
    .background{
      min-height:110vh;
      width:100%;
    }
  } 
  .two{
    background-color:#21252975;
    position:absolute;
    margin-top:130px;
    height:80%;
    position:absolute;
    font-size:30px;
    font-weight:bold;
    box-shadow: 14px  14px 14px 14px rgba(0,0,0,0.19); 
   }
   .form .text-right{
      padding:15px;
      border:2px solid lightgray;
   } 
   .form .btn{
     margin-right:220px;
     margin-top:30px;
     padding:10px;
     border-radius:15%;
     font-size:20px;
     
   }
   .form .success{
    background:#56c56ae3;
      width:60px;
     
   }
   .form .danger{
    background:#ce3c2c82;
   
   }
   .form .success:hover{
    background:green;
    border:2px solid green;

   }
   .form .danger:hover{
    background:#b71b0ac7;
    border: 2px solid #b71b0ac7; 
   }

  </style>




@endsection