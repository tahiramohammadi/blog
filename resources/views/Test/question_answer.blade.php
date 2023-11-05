
<!DOCTYPE html>
<html lang="en"  dir="rtl" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>create_catagory</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   
 

  
</head>
<body>
  
<div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <a href="" data-target="#ques_ans" data-toggle="modal" class="btn btn-info">ایجاد سوالات</a>
      </div>
      </div>
      </div>


<div class="modal fade" id="ques_ans">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست سوالات ها </h2>
        
               <button id="addanswer" class="btn btn-info"  data-toggle="modal">جوابات</button>
        </div>
          <form  id="addQN">
            @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">سوال</label>
            <input type="text" class="form-control" name="question" placeholder="لطفا سوال وارد نمایید" Required>
          </div>
        </div>
        <div class="modal-footer">
        
          <button type="submit" id="submit" name="submit"  class="btn btn-success">ذخیره</button>
          <a href="" class="btn btn-warning" data-dismiss="modal">انصراف</a>
          <span class="error" style="color:red;"></span>
        </div>
        </form>
      </div>
    </div>
  </div>

    
       

   

  
 
  <script src="assets/bootstrap/js/jquery.js"></script> 
       <script src="assets/bootstrap/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="assets/datatable/datatables.min.css">
    <script src="assets/datatable/datatables.min.js"></script>
       <script src="assets/datatable/script.js"></script>

  </body>
  </html>



 <!-- script add exam  -->
 <script>
      $(document).ready(function(){
        $.ajaxSetup({
                  headers:{
                      'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    }
               });
            $("#addQN").submit(function(e){
                  e.preventDefault();

                  if($(".answer").length < 4 ){
              $(".error").text("لطفا حداقل چهار جواب  بنویسید")
              setTimeout(function() {
                $(".error").text("");
              }, 2000);

            }
             else{
                 var checkIsCorrect = false;
               for( let i=0; i< $(".is_correct").length; i++){
                 if($(".is_correct:eq("+i+")").prop('checked') == true ){
                   checkIsCorrect = true;
                   $(".is_correct:eq("+i+")").val( $(".is_correct:eq("+i+")").next().find('input').val() );
               }
               }
           
                 
                 if(checkIsCorrect){
                  var formData=$(this).serialize();
                  $.ajax({
                           url:"{{route('add_question')}}",
                       type:"POST",
                       data:formData,
                         success:function(data){
                       console.log();
                       toastr.success('ذخیره  دیتا','موفقانه ذخیره گردید', {timeOut:4000});
                         },
                         error:function(data){
                                  toastr.error('هشدار','ذخیره   نشد', {timeOut:4000});
                                } 
                               
                        });
                      } else{
                  $(".error").text("لطفا حداقل حداقل یک گزینه راانتخاب نمایید")
                      setTimeout(function() {
                    $(".error").text("");
                   }, 2000);
                 }
               }

});

            $("#addanswer").click(function(){
          
              if($(".answer").length >=4 ){
              $(".error").text("لطفا حدااکثر چهار جواب  بنویسید")
              setTimeout(function() {
                $(".error").text("");
              }, 2000);

            } else{
                var html='<div class="form-group answer" >\
                  <input type="radio" name="is_correct" class="is_correct">\
            <label for="">جواب</label>\
            <input type="text" class="w-100" style="width:70%; height:40px;" name="answer[]" placeholder="لطفا جواب وارد نمایید">\
                <button class="btn btn-danger remove">حذف</button></div>';
                
            $(".modal-body").append(html);

              }
          
            });
            $(document).on("click",".remove",function(){

              $(this).parent().remove();
            });
          
      });
  
      </script>