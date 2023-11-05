   @extends('header.header')
   @section('content')
                 <div class="row" dir="rtl" >
                <div class="background">
                    <div class="col-lg-4"></div>
                  <div class="col-lg-4 two">
                       <div class="text-center">
                    <img src="Download/user-image/7.png" style="margin-top:20px;" width="130px" height="130px" alt="">
                    </div>
                    
                     <form action="{{route('login')}}" method="post" enctype="multipart/form-data">>
                     @csrf
                     <div class="card-body form">
                     
                     <div class="input-group" style=" margin-top:10px;">
                  <span class="input-group-addon ">
                      <i class="glyphicon glyphicon-user"></i>
                      </span>
                  <input type="text" class="form-control text-right"  name="name" placeholder="لطفا نام  تان را وارد نمایید" style="border-left:1px solid lightgray; border-radius:5px 0px 0px 5px;">
                  
                </div>
                <span class="text-danger"  style="font-size:12px;">@error('name') {{$message}} @enderror</span> 
                  
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
                
                  <div class="input-group" style=" margin-top:10px;">
                  <input type="file" style=" margin-top:10px;" class="form-control " name="image" >
                     </div>
                     <div class="input-group ">
               <input type="submit" class="btn  success text-center" value="ثبت" />
               <a href="master" class="btn danger text-center" >انصراف</a>
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
      background-image:url('Download/user-image/a.jpg');
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

       @if($errors->any())
           @foreach($errors->all() as $err)
           <script type="text/javascript">
                toastr.error("{{$err}}","هشدار",{timeOut::4000});
           </script>
           @endforeach
           @endif
               @if(Session::has('ذخیره'))
               <script type="text/javascript">
                  toastr.success("{{Session::get('ذخیره')}}","ذخیره",{timeOut::4000});
               </script>
               @endif 