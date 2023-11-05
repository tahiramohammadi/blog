@include('link')
          <div class="end">
      <div class="row">
      <div class="container">
         <div class="col-md-2"></div>
 <div class="col-md-8">
    
    <h2> <label for=""> درست : {{Session::get('correct')}}</label></h2>
    
    <h2> <label for="">ِغلط : {{Session::get('wrong')}}</label></h2>
    
    <h2> <label for="">نتیجه : {{Session::get('correct')}} / {{Session::get('correct')}} + {{Session::get('wrong')}}</label></h2>
    <a  href="{{url('master')}}" class="btn btn-success">تمام</a>
 
 </div>
 <div class="col-md-2"></div>
 </div>
 </div>
 </div>
 <style>
 .end{
   margin-top:200px;
   margin-right:400px;
 }
 </style>