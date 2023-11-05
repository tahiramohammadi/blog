

<!DOCTYPE html>
<html lang="en"  dir="rtl" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
      <a href="#reg" data-toggle="modal" class="btn btn-info">ایجاد بخش ها </a>
        <table class="table table-bordered" id="example">
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>بخش ها </th>
                    <th>عمل</th>

                </tr>
            </thead>
            <tbody>
              @foreach($catagory as $cat)
              <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->catagory}}</td>
                <!-- <<td>{{$cat->action}}</td>  -->
                <td><a href="#delete{{$cat->id}}" style="color:darkred; font-size:25px;" data-toggle="modal" class="glyphicon glyphicon-trash"></a>
                <a href="#update{{$cat->id}}" style="color:#1693c3; font-size:25px;" class="glyphicon glyphicon-edit" data-toggle="modal"></a>
                </td>
              </tr> 
               
             <div class="modal fade" id="delete{{$cat->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">حذف</h2>
          
        </div>
           
        <div class="modal-body">
             <h2>آیا از حذف ریکارد مطمین استید ؟</h2>
        </div>
        <div class="modal-footer">
          <a href="delete_catagory{{$cat->id}}" type="submit" id="submit"  class="btn btn-success">بلی</a>
          <a href="" class="btn btn-warning" data-dismiss="modal">نخیر</a>
        </div>
      </div>
    </div>
  </div>  
              
  <div class="modal fade" id="update{{$cat->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست ویرایش فهرست ها </h2>
         
        </div>
          <form action="update_catagory{{$cat->id}}" method="post">
            @csrf
           
        <div class="modal-body">
          <div class="form-group">
            <label for="">فهرست</label>
            <input type="text" class="form-control" name="catagory" value="{{$cat->catagory}}" />
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
   @endforeach
       </tbody>
    </table>
    </div>
    <div class="col-md-2"></div>
  </div>
  </div>
  <div class="modal fade" id="reg">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست فهرست ها </h2>
          
        </div>
          <form action="{{route('add_catagory')}}" method="post">
            @csrf
           
        <div class="modal-body">
          <div class="form-group">
            <label for="">فهرست</label>
            <input type="text" class="form-control" name="catagory" placeholder="لطفا بخش مورد نظررا وارد نمایید">
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


   </body>
  </html>

  <script>
        $(document).ready(function(){
            toastr.options.timeOut =4000;
            @if(Session::has('هشدار'))
            toastr.error('{{ Session::get('هشدار')}}');
            @elseif(Session::has('ذخیره'))
            toastr.success('{{Session::get('ذخیره')}}');
            @endif
        });
       </script> 
        <script>
        $(document).ready(function(){
            toastr.options.timeOut =4000;
            @if(Session::has('هشدار'))
            toastr.error('{{ Session::get('هشدار')}}');
            @elseif(Session::has('حذف'))
            toastr.success('{{Session::get('حذف')}}');
            @endif
        });
       </script> 
        <script>
        $(document).ready(function(){
            toastr.options.timeOut =4000;
            @if(Session::has('ویرایش'))
            toastr.success('{{Session::get('ویرایش')}}');
            @endif
        });
       </script> 

