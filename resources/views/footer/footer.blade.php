    
  <!DOCTYPE html>
  <html lang="fa">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/sweetalert/sweetalert.min.css">
   <link rel="stylesheet" href="assets/toastr/toastr.min.css">
      

  </head>
  <body> 
    @yield('footer')
<section class="section-footer bg-light" dir="rtl">
        <div class="container">
<div class="row justify-content-center align-items-center">
<div class="col-md-12 mb-4">
  <h1 class="heading">
     دریافت اخبار &amp; بروز رسانی
  </h1>
</div>
<div class="col-md-12">
    <form action="" method="get">
    @csrf
    <div class="row">
        <div class="col-md-4 mb-4">
            <input type="text" class="form-control" placeholder="نام شما ">
        </div>
        <div class="col-md-4 mb-4">
            <input type="email" class="form-control" placeholder="ایمیل شما">
        </div>
        <div class="col-md-4 mb-4">
            <input type="submit" class="btn btn-secondary w-100" value="اشتراک">
        </div>
        
    </div>
    </form>
</div>
</div>
</div>
</section>
    <footer class="site-footer" dir="rtl">
        <div class="container">
             <div class=" row mb-5">
                <div class="col-md-3 mb-5">
                    <h2>در مورد ما </h2>
                    <p></p>
                    <p><a href="">بیشتر </a></p>
                </div>
                <div class="col-md-3 mb-5">
                <h2>ارتباط سریع</h2>
                <ul class="list-unstyled footer-link">
                    <li><a href="master">صفحه اصلی </a></li>
                    <li><a href="">در مورد ما </a></li>
                    <li><a href="">تماس با ما </a></li>
                    <li><a href="">داشبورد</a></li>
                    <li><a href="register">راجستر/ثبت</a></li>
                    
                </ul>
             </div>
                <div class="col-md-3 mb-5" >
                 <h2>تماس  &amp; آدرس</h2>
                 <ul class="list-unstyled footer-link">
                    <li class="d-flex">
                        <span class="mb-3">آدرس: </span>
                        <span>کابل, دشت برچی , افغانستان </span>
                    </li>
                    <li class="d-flex">
                        <span class="mb-3">تلفن: </span>
                        <span>93748232511+,93744314287+</span>
                    </li>
                    <li class="d-flex">
                        <span class="mb-3">ایمیل: </span>
                        <span>tahiramohammadi2019@gmail.com</span>
                    </li>
                 </ul>
             </div>
            
             <div class="col-md-3">
                <h2>رسانه های اجتماعی </h2>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a href=""><span class="fa fa-facebook"></span></a></li>
                    <li><a href=""><span class="fa fa-twitter"></span></a></li>
                    <li><a href=""><span class="fa fa-instagram"></span></a></li>
                    <li><a href=""><span class="fa fa-youtube"></span></a></li>
                </ul>
             </div> 
                  <div class="col-md-12 text-center" >
                <p>این ویب سایت ساخته شده توسط </p>
                    <p>انجینر طاهره محمدی , انجینر شکریه احمدی <i class="fa fa-heart-o"></i></p>
                </div>
        </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/jquery.js"></script> 
       <script src="assets/bootstrap/js/bootstrap.min.js"></script>
       <script src="assets/bootstrap-5/js/jquery.js"></script> 
       <script src="assets/bootstrap-5/js/bootstrap.min.js"></script>
       <script src="assets/sweetalert/sweetalert.min.js"></script>
         <script src="assets/toastr/toastr.min.js"></script>
      
     <script src="assets/bootstrap-5/js/wow.min.js"></script>
  </body>
  </html>
<style>
.section-footer{
    padding:3em 0;


}
.form-control{
outline:none;
box-shadow:none !important;


}
.form-control:focus{
box-shadow:0 3px 10px -2px rgba(0,0,0,2)!important;
}
.form-control:active{
    outline:none;
}
 .row .btn{
    box-shadow:0 3px 10px -2px rgba(0,0,0,2)!important;  
   margin-top:-25px;
}
.row .btn-secondary{
    color:#d9edf7;
    border-width:2px;
    padding:3px;
    background:#440606;
    font-size:18px;
    border-color:#440606;
}
.row .btn-secondary:hover{
    background:rgba(200, 234, 241, 0.67);
    border-color:rgba(200, 234, 241, 0.67);
}
.site-footer{
    padding:2em 0;
    background:black;
    font-size:18px;
    color:white;
}
.site-footer a{
color:#ffc107;
border-bottom: 1px solid transparent;
text-decoration:none;
}
.site-footer a:hover{
      color:#d9edf7;
      border-bottom:1px solid rgba(255,255,255,0.2);
      text-decoration:none;
}
.site-footer h2{
    font-size:22px;
    margin-bottom:28px;
    color:#d9edf7;
}
.site-footer .footer-link  li{
    margin-bottom:15px;
    line-height:1.5;
   
}

.site-footer .footer-link span{
color:#ffc107;
    
}
.footer-social a{
    line-height:0;
    border-radius:50%;
    margin: 0 5px 5px 0;
    border:1px solid #ffc107; 
    width:35px;
    height:35px;
    text-align:center;
    padding:10px;
    display:inline-block;

}
.footer-social a:hover{
    background:#d9edf7;
}

</style>