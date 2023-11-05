
   @extends('header.header')
   @section('content')

   @extends('footer.footer')
@section('footer')
  
<style>

   #img1{
     width:100%;
     height:600px;
    
   }
   #img2{
      width:100%;
      height:600px;
   }
   #img3{
    width:100%;
      height:600px;
   }
   #img4{
    width:100%;
      height:600px;
     
   }
   .carousel-caption{
     
     margin-bottom:250px!important;
    animation-name:example1;
    animation-duration: 4s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    width:100%;
    height: 80px;
    
   
   }
   @keyframes example1{
    0%   {color:#e6e348; left:0px; right:0px;}
    25%  {color:#74b5d6; left:100px; right:0px;}
    50%  {color:#7de04c; left:100px; right:250px;}
    75%  {color:#080808; left:0px; right:250px;}
    100% {color:red; left:0px; right:0px;}
   }
 
  

.heading{
  position:relative;
  padding:15px;
  background:rgba(217, 237, 247, 0.38);
}
.heading h4{
  font-size:30px;
  font-weight:bold;
  text-transform:uppercase;
  color:black; 
}
.heading h4::before,
.heading h4::after{
  content:"";
  background:#4FD1C5;
  display:inline-block;
  width:50px;
  height:3px;
}
.heading h4::before{
margin: 0  15px 10px 0;
}
.heading h4::after{
  margin: 0 0 10px 15px; 
}
.row .icon_box{
  position:relative;
  padding:40px;
  background:#fff;
  border-radius:8px;
  height:385px;
  width:100%;
  box-shadow: 0 0 30px 0 rgba(68,88, 144, 0.5);
  z-index:1;
  margin-top:30px;
  cursor: pointer;
  overflow:hidden;
  
}
.row  .four .icon_box{
  position:relative;
  padding:40px;
  background:#fff;
  border-radius:8px;
  height:335px;
  width:140%;
  margin-right:300px;
  box-shadow: 0 0 30px 0 rgba(68,88, 144, 0.5);
  z-index:1;
  cursor: pointer;
  overflow:hidden;
  
}

.row .icon_box::before{
  content:"";
  position:absolute;
  top:-40px;
  left:-60px;
  width:100px;
  height:100px;
  border-radius:50px;
  background:
  z-index:-1;
  background:darkred;
  transition: all 0.4s;

}
.row .one::before{
  background:rgba(200, 234, 241, 0.67);
}
.row .two::before{
  background:rgba(90, 340, 190, 0.34);
}
.row .three::before{
  background:rgba(210, 27, 35, 0.20);
}
.row .four::before{
  background:rgba(220, 215, 415, 0.6);

}
.row .icon_box:hover::before{
  top:0;
  left:0;
  width:500px;
  height:400px;
  border-radius:0;
}
.row .one .icon{
  padding:20px;
  display:inline-block;
  border-radius:50%;
  background:rgba(200, 234, 241, 0.67);
  width:60px;
  height:60px;
  color:black;
  transition: all 0.4 ease-in-out;
}
.row .two .icon{
  padding:20px;
  display:inline-block;
  border-radius:50%;
  background:rgba(90, 340, 190, 0.34);
  width:60px;
  height:60px;
  color:black;
  transition: all 0.4 ease-in-out;
}
.row .three .icon{
  padding:20px;
  display:inline-block;
  border-radius:50%;
  background:rgba(210, 27, 35, 0.20);
  width:60px;
  height:60px;
  color:black;
  transition: all 0.4 ease-in-out;
}
.row .four .icon{
  padding:20px;
  display:inline-block;
  border-radius:50%;
  background:rgba(220, 215, 415, 0.6);
  width:60px;
  height:60px;
  color:black;
  transition: all 0.4 ease-in-out;
}

.row .icon i{
  font-size:30px;
  line-height:1.1;
color:black;

}
.row .icon_box:hover .icon {
  background:white;
}
.row .icon_box:hover .icon i{
  color:black;
  
}
.row .title{
  font-size:25px;
   font-weight:700;
   margin-bottom:15px;
   transition:0.5s ease-in-out;
}
.row .description{
  font-size:20px;
line-height:28px;
margin-bottom:0;
transition:0.5s ease-in-out;
    position: relative;
    animation: example2 6s  ease-in-out 2s infinite;
}
 .row .description1{
  font-size:17px;
 }
@keyframes example2 {
    0%   {color:black; right:0px; left:0px;}
    25%  {color:#4FD1C5; right:150px; left:0px;}
    50%  {color:black; right:150px; left:100px;}
    75%  {color:#4FD1C5; right:0px; left:150px;}
    90% {color:black; right:0px; left:0px;}

}
.row .icon_box:hover .title,
.row .icon_box:hover .description{
  color:black;
  animation-play-state:paused;

}

.row .btn{
  display: flex;
  justify-content:center;
  align-items:center;
   font-weight:700;letter-spacing:1.2px;
  font-size: 20px;
  text-decoration:none;
  color:black;
  min-height:50px;
  min-width:60px;
  background:#4FD1C5;
  top:20px;
  background:linear-gradient(90deg, rgba(129,230,217,1) 0%,
  rgba(79,209,197,1) 100%);
  border:none;
  border-radius:1000px;
  box-shadow:10px 10px 20px rgba(79,209,197,0.64);
  transition: all 0.3s ease-in-out 0s;
 padding:8px;
 cursor:pointer;
 outline:none;
 position:relative;
}
  .btn::before{ 
  content: '';
  border-radius:1000px;
   min-width:calc(300px + 14px);
   min-height:calc(50px + 14px);
   border:2px solid #00FFCB;
   box-shadow: 0 0 60px rgba(0,255,203,0.64);
   position:absolute;
   transform:translate(-50%, -50%);
   opacity:0;
   top:50%;
   left:50%;
   transition: all 0.3s ease-in-out 0s;
}  
.btn:hover, .btn:focus{
  color:#313133;
  transform: translateY(-6px);
}
.btn:hover::before,
.btn:focus::before{
  opacity:1;
}
.btn::after{
  content:'';
  width:30px; height:30px;
  border-radius:100%;
  border:6px solid #00FFCB;
  position:absolute;
  z-index: -1;
  top:50%;
   left:50%;
  transform:translate(-50px, -50px);
  animation: ring 1.5s infinite;
}
.btn:hover::after,
.btn:focus::after{
  animation:none;
  display:none;
}
@keyframes ring{
  0%{
    width:30px;
    top:50px;
   
    height:30px;
    opacity:1;
  }
  100%{
    width:300px;
    height:300px;
    opacity:0;
  }
}


   
</style>
       
   <div id="my" class="carousel slide" data-ride="carousel">
     
        <ol class="carousel-indicators">
           <li data-target="#my" data-slide-to="0" class="active"></li>
           <li data-target="#my" data-slide-to="1"></li>
           <li data-target="#my" data-slide-to="2"></li>
           <li data-target="#my" data-slide-to="3"></li>
        </ol>  
  <div class="carousel-inner"  role="listbox">
    <div class="item active"  >
       <img id="img1"  src="Download/user-image/i.jpg"  class="img-responsive" alt="" >
       <div class="carousel-caption">
       <div  class="caption animated wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
           <h1>دریچه کانکور کانون علم و گذرگاه مطمعین در جهت رسیدن به رویاهای شما </h1>
            </div>
  </div>
    </div>

    <div class="item">
       <img id="img2" src="Download/user-image/h.jpg" class="img-responsive" alt="">
       <div class="carousel-caption">
       <div  class="caption animated wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
           <h1>دریچه کانکور کانون علم و گذرگاه مطمعین در جهت رسیدن به رویاهای شما </h1>
            </div>
  </div>
    </div>

    <div class="item">
      <img  id="img3" src="Download/riazi-dar-keshvarhaye-pishrafte-4.jpg"   class="img-responsive" alt="">
      <div class="carousel-caption">
       <div  class="caption animated wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
           <h1>دریچه کانکور کانون علم و گذرگاه مطمعین در جهت رسیدن به رویاهای شما </h1>
            </div>
  </div>
    </div>

    <div class="item">
      <img  id="img4" src="Download/user-image/g.jpg"   class="img-responsive" alt="">
      <div class="carousel-caption">
       <div  class="caption animated wow fadeInRight" data-wow-offset="0" data-wow-delay="0.6s">
           <h1>دریچه کانکور کانون علم و گذرگاه مطمعین در جهت رسیدن به رویاهای شما </h1>
            </div>
  </div>
    </div>
    </div>

  <a class="left carousel-control" href="#my" role="button" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     <span class="sr-only">قبلی</span>
  </a>
  <a class="right carousel-control" href="#my" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">بعدی</span>
  </a>
</div>


<!-- our services -->

  
 
      <section class="service" >   
   
    <div class="heading">
    <h4 class="text-center">خدمات ما </h4>
    </div>
       <div class="container">
    <div class="row" data-toggle="tooltip" title="" dir="rtl">
      <div class="col-md-8 col-lg-4 d-flex align-item-center mb-5">
        <div class="icon_box one " >
           <div class="icon"><i class="fa fa-calculator"></i></div>
           <h2 class="title">ریاضیات</h2>
           <p class="description1">شما می توانید از جدید ترین و بروز ترین ویدیو ها , کتاب ها, حل فارم های کانکور سال قبل , حل تمرینات کتاب های مکتب با استادان ماهر استفاده نموده و خودتان را برای امتحان کانکور سرتاسری آماده نمایید!ا ‍</p>
           <p class="description" > صفر تا صد رایگان</p>
         
             <a href="" class="btn" data-toggle="tooltip" data-placement="bottom" title="لطفا ثبت نام نمایید "> بیشتر بدانید </a>
         
          </div>
     </div>‍‍
 
     
     <div class="col-md-6 col-lg-4 d-flex align-item-center mb-5">
        <div class="icon_box two " >
           <div class="icon"><i class="fa fa-fighter-jet"></i></div>
           <h2 class="title">فزیک</h2>
           <p class="description1"> شما می توانید از جدید ترین و بروز ترین ویدیو ها , کتاب ها , حل فارم های کانکور سال قبل , حل تمرینات کتاب های مکتب با استادان ماهر استفاده نموده و خودتان را برای امتحان کانکور سرتاسری آماده نمایید !!</p>
           <p class="description" > صفر تا صد رایگان</p>
     
           <a href="" class="btn"  data-toggle="tooltip" data-placement="bottom" title="لطفا ثبت نام نمایید "> بیشتر بدانید </a>
          
          </div>
     </div>
     <div class="col-md-6 col-lg-4 d-flex align-item-center mb-5">
        <div class="icon_box three " >
           <div class="icon"><i class="fa fa-flask"></i></div>
           <h2 class="title">کیمیا</h2>
            <p class="description1">شما می توانید از جدید ترین و بروز ترین ویدیو ها , کتاب ها , حل فارم های کانکور سال قبل , حل تمرینات کتاب های مکتب با استادان ماهر استفاده نموده و خودتان را برای امتحان کانکور سرتاسری آماده نمایید!!</p>
             <p class="description"> صفر تا صد رایگان</p>
              
             <a href="" class="btn"  data-toggle="tooltip" data-placement="bottom" title="لطفا ثبت نام نمایید "> بیشتر بدانید </a>
           
          </div>
         </div>
</div>
         <div class='row ' dir="rtl">
         <div class=" four col-lg-4 align-item-center mb-5">
        <div class="icon_box four " >
           <div class="icon"><i class="fa fa-book"></i></div>
           <h2 class="title">اجتماعیات</h2>
           <p class="description1"> شما می توانید از تمام کتاب های مکتب , سوالات مختلف از فورم های مختلف سال های قبل استفاده نمودا خودتان را برای امتحان کانکور سرتاسری آماده نمایید!! </p>
           <p class="description" > صفر تا صد رایگان</p>
          
           <a href="" class="btn"  data-toggle="tooltip" data-placement="bottom" title="لطفا ثبت نام نمایید "> بیشتر بدانید </a>
        
          </div>
         </div>
         </div>
     </div>
     </div>
    </section >  
@endsection

@endsection