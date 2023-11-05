@include('link')
    

     <div class="background">
     <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 one">
                 <a  href="#start" data-toggle="modal" type="submit" class="submit" name="submit">Student</a>
                </div>
                <div class="col-md-4"></div>
            </div>
         </div>
     </div>


<div class="modal fade" id="start" >
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
     <button type="button" aria-label="close" class="close" data-dismiss="modal">
         <span aria-hidden="true">&times;</span>
            </button>
       <h2 class="text-center">شروع امتحان</h2>
       
     </div>
        
     <div class="modal-body">
     <h2 class="text-center">شما آماده استید برای امتحان آزمایشی؟</h2>
     </div>
     <div class="modal-footer">
       <a href="{{url('ans')}}" type="submit" id="submit"  class="btn btn-info">بلی</a>
       <a href="" class="btn btn-danger" data-dismiss="modal">نخیر</a>
     </div>
   </div>
 </div>
</div>
</div>

<style>
    .background{
        background-image:url('Download/user-image/a.jpg');
        background-size:cover;
    min-height:100vh;
    
    background-position:relative;
    background-repeat:no-repeat;
    opacity:0.9;
  }
  @media(max-width:768px){
    .background{
      min-height:100vh;
      width:100%;
    }
  } 
   .row .submit{
        color:#efeee1;
        background:none;
       font-size:50px;
       text-decoration:none;
       text-align:center;
    }
    .row .one{
        position:absolute;
        margin-top:300px;
        margin-right:400px;
        margin-left:250px;
        font-weight:bold;
        text-align:center;
    }
    .row .submit:hover{
        background:rgba(0,0,0,0.19);
        font-size:60px;
        border:2px solid #efeee1;
        font-weight:bold;
        box-shadow: 14px  14px 14px 14px rgba(0,0,0,0.19); 
    }
</style>