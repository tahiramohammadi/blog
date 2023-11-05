

 <!DOCTYPE html>
<html lang="en"  dir="rtl" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>create_catagory</title>
 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
 
  
</head>
<body>
  
<div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <a href="" data-target="#exam" data-toggle="modal" class="btn btn-info">ایجاد امتحانها </a>

      <table class="table table-bordered" id="example">
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>نام امتحان</th>
                    <th>مضمون</th>
                    <th>مدت</th>
                    <th>تاریخ</th>
                    <th>عملیه</th>
                </tr>
            </thead>
            <tbody>
                @if(count($exam) > 0 )
                @foreach($exam as $e)
                    <tr>
                        <td>{{$e->id}}</td>
                        <td>{{$e->exam_name}}</td>
                        <td>{{$e->catagory[0]['catagory']}}</td>
                        <td>{{$e->duration}}</td>
                        <td>{{$e->date}}</td>
                        <td><a href="" data-id="{{$e->id}} "id="delete" style="color:darkred; font-size:25px;" data-target="#deleteexam" data-toggle="modal" class="glyphicon glyphicon-trash"></a>
                <a href="" data-id="{{$e->id}}" id="edit" style="color:#1693c3; font-size:25px;" data-target="#editexam" class="glyphicon glyphicon-edit button" data-toggle="modal"></a>
                    </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                <td>امتحان پیدا نشد</td>
               </tr>
 
                @endif
          
            </tbody>
        </table>
         </div>
</div>
</div>

<!-- delete exam modal -->
<div class="modal fade" id="deleteexam">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست حذف امتحانات </h2>
        </div>
          <form id="deleteExam">
            @csrf
        <div class="modal-body">
         
          <h2>می خواهید حذف نمایید ؟؟ّ</h2>
          </div>
        <div class="modal-footer">
          <button type="submit" id="submit"  class="btn btn-success">بلی</button>
          <a href="" class="btn btn-warning" data-dismiss="modal">نخیر</a>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- edit exam modal -->
<div class="modal fade" id="editexam">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست ویرایش امتحانات </h2>
         
        </div>
          <form id="editExam">
            @csrf
        <div class="modal-body">
          <div class="form-group">
          <input type="hidden" name="id" id="id">
            <label for="">نام امتحان</label>
            <input type="text" class="form-control" name="exam_name" id="exam_name">
          </div>
          <div class="form-group">
             <label for="">بخش ها </label>
            <select name="catagory_id" id="catagory_id" >
                <option value="catagory">انتخاب مضمون</option>
                @if(count($catagory) >0 )
                @foreach($catagory as $e)
                <option value="{{$e->id}}">{{$e->catagory}}</option>
                @endforeach
                @endif
            </select>
          
          </div>
          <div class="form-group">
            <label for="">زمان</label>
            <input type="time"  class="form-control" id="duration" name="duration">
          </div>
          <div class="form-group">
            <label for="">تاریخ</label>
            <input type="date"  class="form-control" id="date" name="date">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="submit"  class="btn btn-success">ویرایش</button>
          <a href="" class="btn btn-warning" data-dismiss="modal">انصراف</a>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- add exam modal  -->
<div class="modal fade" id="exam">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست امتحان ها </h2>
          
        </div>
          <form id="addexam" method="post">
            @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">نام امتحان</label>
            <input type="text" class="form-control" name="exam_name" placeholder="لطفا امتحان  مورد نظررا وارد نمایید" required>
          </div>
          <div class="form-group">
             <label for="">بخش ها </label>
            <select name="catagory_id" required>
                <option value="catagory">انتخاب مضمون</option>
                @if(count($catagory) > 0 )
                @foreach($catagory as $cat)
                <option value="{{$cat->id}}">{{$cat->catagory}}</option>
                @endforeach
                @endif
            </select>
          
          </div>
          <div class="form-group">
            <label for="">زمان</label>
            <input type="time" class="form-control" name="duration">
          </div>
          <div class="form-group">
            <label for="">تاریخ</label>
            <input type="date" class="form-control" name="date">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id="submit"  class="btn btn-success">ذخیره</button>
          <a href="" class="btn btn-warning" data-dismiss="modal">انصراف</a>
        </div>
        </form>
      </div>
    </div>
  </div>

<script src="assets/bootstrap/js/jquery.js"></script> 
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 <script src=" https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
 <link rel="stylesheet" href="assets/datatable/datatables.min.css">
    <script src="assets/datatable/datatables.min.js"></script>
       <script src="assets/datatable/script.js"></script>

        <script>
          $(document).ready(function(){
            $.ajaxSetup({
                  headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')

                  }
                });
              $("#addexam").submit(function(e){
                 e.preventDefault();
                 var formData = $(this).serialize();
                 $.ajax({
                        url:"{{route('add-exam')}}",
                        type:"POST",
                        data:formData,
                        success:function(data){
                          console.log();

                                  toastr.success('ذخیره دیتا ','موفقانه ذخیره گردید', {timeOut:4000});
                                },
                                error:function(data){
                                  toastr.error('هشدار','ذخیره نشد', {timeOut:4000});
                                }
                                  
                                
                        });
                 });
              
            
             $("#edit").click(function(){
            var id = $(this).attr('data-id');
            $("#id").val(id);
                
            var url='{{route("show_exam_datail","id")}}';
            url=url.replace('id',id);
              $.ajax({
                   headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                  },
                   url:url,
                   type:"GET",
                   success:function(data){
                    console.log(data);
                    var exam= data.data;
                    $("#exam_name").val(exam[0].exam_name);
                        $("#catagory_id").val(exam[0].catagory_id);
                          $("#duration").val(exam[0].duration);
                        $("#date").val(exam[0].date);
                   }
              });
            });
         
              $("#editExam").submit(function(e){
                 e.preventDefault();
                 var formData = $(this).serialize();
                 $.ajax({
                        url:"{{route('update_exam')}}",
                        type:"POST",
                        data:formData,
                        success:function(data){
                          console.log();
                          toastr.success('ویرایش دیتا','موفقانه ویرایش گردید', {timeOut:4000});
                                },
                                error:function(data){
                                  toastr.error('هشدار','ویرایش  نشد', {timeOut:4000});
                                }   
                        
                 });
              });

              $(document).on('click','#delete', function(){
                var id = $(this).data(id);
                $.ajax({
                  headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')

                  },
                  type:'GET',
                  url:"{{route('delete_exam')}}",
                  data:{
                    id:id
                  },
                  success:function(data){
                    console.log(data);
                    toastr.success('حذف دیتا','موفقانه حذف  گردید', {timeOut:4000});
                  },
                  error:function(data){
                  toastr.error('هشدار','حذف  نشد', {timeOut:4000});
                   } 

                });
              });
          });
        </script>
  </body>
  </html> 
   
 
           