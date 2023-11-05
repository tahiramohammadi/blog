@include('link')
<div class="container">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
         <a href="#addoption" data-toggle="modal" class="btn btn-info">ایجاد سوالات ریاضیات</a>
         <table class="table table-bordered" id="example" >
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>گذینه الف</th>
                    <th>گذینه ب</th>
                    <th>گذینه ج</th>
                    <th>گذینه د</th>
                    <th>گذینه درست </th>
                    <th>سوالات</th>
                    <th>عملیه</th>


                </tr>
            </thead>
            <tbody>
            @if(count($math_options) > 0 )
                @foreach($math_options as $option)
              <tr>
                <td>{{$option->id}}</td>
                <td>{{$option->option_a}}</td>
                <td>{{$option->option_b}}</td>
                <td>{{$option->option_c}}</td>
                <td>{{$option->option_d}}</td>
                <td>{{$option->is_correct}}</td>
                <td>{{$option->math_question[0]['question']}}</td>
                 <td><a href="#delete{{$option->id}}" style="color:darkred; font-size:25px;" data-toggle="modal" class="glyphicon glyphicon-trash"></a>
                <a href="#update{{$option->id}}" style="color:#1693c3; font-size:25px;" class="glyphicon glyphicon-edit" data-toggle="modal"></a>
                </td>
              </tr>

                    <!-- delete modal -->

        <div class="modal fade" id="delete{{$option->id}}">
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
          <a href="delete_option{{$option->id}}" type="submit" id="submit"  class="btn btn-success">بلی</a>
          <a href="" class="btn btn-warning" data-dismiss="modal">نخیر</a>
        </div>
      </div>
    </div>
  </div>


          <!-- update math modal  -->
      <div class="modal fade" id="update{{$option->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست ویرایش فهرست ها </h2>
         
        </div>
          <form action="update_option{{$option->id}}" method="post">
            @csrf
           
            <div class="modal-body">
            <div class="form-group">
            <label for="">گذینه اول </label>
            <input type="text" class="form-control" name="option_a" value="{{$option->option_a}}" required>
          </div>
          <div class="form-group">
            <label for="">گذینه دوم </label>
            <input type="text" class="form-control" name="option_b" value="{{$option->option_b}}" required>
          </div>
          <div class="form-group">
            <label for="">گذینه سوم</label>
            <input type="text" class="form-control" name="option_c" value="{{$option->option_c}}" required>
          </div>
          <div class="form-group">
            <label for="">گذینه چهارم </label>
            <input type="text" class="form-control" name="option_d" value="{{$option->option_d}}" required>
          </div>
          <div class="form-group">
            <label for="">گذینه درست </label>
            <input type="text" class="form-control" name="is_correct" value="{{$option->is_correct}}" required>
          </div>
          <div class="form-group">
              <label for="">سوالات</label>
              <select name="question_id" required>
              <option value="math_question">انتخاب مضمون</option>
              @if(count($math_question) > 0 )
              @foreach($math_question as $question)
                <option value="{{$question->id}}">{{$question->question}}</option>
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

     <!-- add option modal -->
<div class="modal fade" id="addoption">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست سوال ها </h2>
          
        </div>
          <form action="{{route('add_option')}}" method="post">
            @csrf
           
        <div class="modal-body">
          <div class="form-group">
            <label for="">گذینه اول </label>
            <input type="text" class="form-control" name="option_a" placeholder="لطفا گذینه اول را وارد نمایید" required>
          </div>
          <div class="form-group">
            <label for="">گذینه دوم </label>
            <input type="text" class="form-control" name="option_b" placeholder="لطفا گذینه دوم را وارد نمایید" required>
          </div>
          <div class="form-group">
            <label for="">گذینه سوم</label>
            <input type="text" class="form-control" name="option_c" placeholder="لطفا گذینه سوم را وارد نمایید" required>
          </div>
          <div class="form-group">
            <label for="">گذینه چهارم </label>
            <input type="text" class="form-control" name="option_d" placeholder="لطفا گذینه چهارم را وارد نمایید" required>
          </div>
          <div class="form-group">
            <label for="">گذینه درست </label>
            <input type="text" class="form-control" name="is_correct" placeholder="لطفا گذینه درست را وارد نمایید" required>
          </div>
              <div class="form-group">
              <label for="">سوالات</label>
              <select name="question_id" required>
              <option value="math_question">انتخاب مضمون</option>
              @if(count($math_question) > 0 )
              @foreach($math_question as $question)
                <option value="{{$question->id}}">{{$question->question}}</option>
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