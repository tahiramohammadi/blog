
@include('link')    

<div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <a href="#addmath" data-toggle="modal" class="btn btn-info">ایجاد سوالات ریاضیات</a>
         
        <!-- select question -->
        
           <table class="table table-bordered" id="example" >
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>سوال ها </th>
                    <th>مضمون</th>
                    <th>عمل</th>

                </tr>
            </thead>
            <tbody>
            @if(count($math_question) > 0 )
                @foreach($math_question as $math)
              <tr>
                <td>{{$math->id}}</td>
                <td>{{$math->question}}</td>
                <td>{{$math->catagory[0]['catagory']}}</td>
                 <td><a href="#delete{{$math->id}}" style="color:darkred; font-size:25px;" data-toggle="modal" class="glyphicon glyphicon-trash"></a>
                <a href="#update{{$math->id}}" style="color:#1693c3; font-size:25px;" class="glyphicon glyphicon-edit" data-toggle="modal"></a>
                </td>
              </tr> 
                
              <!-- delete modal -->

        <div class="modal fade" id="delete{{$math->id}}">
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
          <a href="delete_math{{$math->id}}" type="submit" id="submit"  class="btn btn-success">بلی</a>
          <a href="" class="btn btn-warning" data-dismiss="modal">نخیر</a>
        </div>
      </div>
    </div>
  </div>

      <!-- update math modal  -->
      <div class="modal fade" id="update{{$math->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست ویرایش فهرست ها </h2>
         
        </div>
          <form action="update_math{{$math->id}}" method="post">
            @csrf
           
            <div class="modal-body">
          <div class="form-group">
            <label for="">فهرست</label>
            <input type="text" class="form-control" name="question" value="{{$math->question}}" required>
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
 @endif 
 </tbody>
    </table> 
    </div>
    <div class="col-md-2"></div>
  </div>
  </div>


  <!-- add question modal -->
  <div class="modal fade" id="addmath">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست سوال ها </h2>
          
        </div>
          <form action="{{route('add_math')}}" method="post">
            @csrf
           
        <div class="modal-body">
          <div class="form-group">
            <label for="">فهرست</label>
            <input type="text" class="form-control" name="question" placeholder="لطفا سوال مورد نظررا وارد نمایید" required>
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
        </div>
        <div class="modal-footer">
          <button type="submit" id="submit"  class="btn btn-success">ذخیره</button>
          <a href="" class="btn btn-warning" data-dismiss="modal">انصراف</a>
        </div>
        </form>
      </div>
    </div>
  </div>
  
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

          
        
     