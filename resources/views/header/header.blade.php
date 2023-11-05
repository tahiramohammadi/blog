    
<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>دریچه کانکور</title>
  <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/sweetalert/sweetalert.min.css">
   <link rel="stylesheet" href="assets/toastr/toastr.min.css">
</head>


   <style>
     .navbar{
      width:100%;
      height:75px;
     
    }
    
      #id {
            color:#d9edf7;       
            width:250px;
            font-family: "Times New Roman", Times, serif;
            font-size:40px;
            padding:5px;
            
             font-style:italic;
             font-weight:bold;   
            animation-name:example;
            animation-duration: 4s;
            animation-iteration-count: infinite;
          
           
    }
    @keyframes example{
    0%   {color:red; left:0px; top:0px;}
    25%  {color:yellow; left:200px; top:0px;}
    50%  {color:blue; left:200px; top:200px;}
    75%  {color:green; left:0px; top:200px;}
    100% {color:red; left:0px; top:0px;}
   }
       #id:hover{
         color:#c5b90b;
       text-shadow:3px 3px #075f09;
       background:#4a0d06;
       height:60px;
        text-align:center;
        width: 200px;
        border-style:solid;
        border-width:2px;
        border-color:#075f09;
  }
       #a{
         color:#d9edf7;
         font-size:25px;
         font-style:oblique;
              font-weight:bold;
              font-family: "Times New Roman", Times, serif;
              text-align:center;
            padding:12px;
            margin-right:20px;
            margin-left:10px;
          
       }

         #a:hover{
        color:#c5b90b;
       background:#4a0d06;
       height:60px;
        text-align:center;
        border-style:solid;
        border-width:1px;
        border-color:#c5b90b;
       } 
    </style> 
  <body>   
  @yield('content')
           <div class="row">
        <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-inverse">
        <div class="container-fluid">
           <div class="navbar-header">
           <a href="" class="navbar-brand" id="id"  >دریچه کانکور</a>
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navsupport"  >        
                      <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
                   
             </div>
       <div class="collapse navbar-collapse navbar-left" id="navsupport">
          <ul class="nav navbar-nav me-auto mb-2 mb-lg-0 ">
             <li class="nav-item" ><a  class="active nav-link" id="a" href="master">صفحه اصلی</a></li>
             <li class="nav-item" ><a class="nav-link" id="a"  href="">در مورد ما</a> </li>
             <li class="nav-item" ><a class="nav-link" id="a"  href="">ارتباط با ما </a></li>     
           </ul>
                   <div class="navbar-nav ms-auto navbar-right "  > 
                     <ul class="nav navbar-nav me-auto mb-2 mb-lg-0 "> 
                        <li class="nav-item"  ><a  class="nav-link " id="a" href="login">داشبورد</a></li>
                         <li class="nav-item"><a class="nav-link " id="a" href="register">ثبت \ورود 
                         <span class="glyphicon glyphicon-log-in"></span>
                       </a></li>
                      </ul>
                   </div> 
              </div>
              </div>
           </nav>
           </div>
     <script src="assets/bootstrap/js/jquery.js"></script> 
       <script src="assets/bootstrap/js/bootstrap.min.js"></script>
       <script src="assets/bootstrap-5/js/jquery.js"></script> 
       <script src="assets/bootstrap-5/js/bootstrap.min.js"></script>
       <script src="assets/sweetalert/sweetalert.min.js"></script>
         <script src="assets/toastr/toastr.min.js"></script>
      
     <script src="assets/bootstrap-5/js/wow.min.js"></script>
  </body>
  </html>
   
