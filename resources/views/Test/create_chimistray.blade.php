@include('link')

      
<div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <a href="#addchemistry" data-toggle="modal" class="btn btn-info">ایجاد سوالات کیمیا </a>
         
        <!-- select question -->
        
           <table class="table table-bordered" id="example" >
            <thead>
                <tr>
                    <th>آی دی</th>
                    <th>سوال ها </th>
                    <th>الف</th>
                    <th>ب</th>
                    <th>ج</th>
                    <th>د</th>
                    <th>جواب درست</th>
                    <th>مضمون </th>
                    <th>عمل</th>

                </tr>
            </thead>
            <tbody>
            @if(count($chemistry_question) > 0 )
                @foreach($chemistry_question as $chemistry)
              <tr>
                <td>{{$chemistry->id}}</td>
                <td>{{$chemistry->question}}</td>
                <td>{{$chemistry->option_a}}</td>
                <td>{{$chemistry->option_b}}</td>
                <td>{{$chemistry->option_c}}</td>
                <td>{{$chemistry->option_d}}</td>
                <td>{{$chemistry->is_correct}}</td>
                <td>{{$chemistry->catagory[0]['catagory']}}</td>
                 <td><a href="#delete{{$chemistry->id}}" style="color:darkred; font-size:25px;" data-toggle="modal" class="glyphicon glyphicon-trash"></a>
                <a href="#update{{$chemistry->id}}" style="color:#1693c3; font-size:25px;" class="glyphicon glyphicon-edit" data-toggle="modal"></a>
                </td>
                </tr> 
                  <!-- delete question physic -->
  <div class="modal fade" id="delete{{$chemistry->id}}">
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
          <a href="delete_chemistry{{$chemistry->id}}" type="submit" id="submit"  class="btn btn-success">بلی</a>
          <a href="" class="btn btn-warning" data-dismiss="modal">نخیر</a>
        </div>
      </div>
    </div>
  </div>
       
        <!-- physic update  -->
    <div class="modal fade" id="update{{$chemistry->id}}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست ویرایش فهرست ها </h2>
         
        </div>
          <form action="update_chemistry{{$chemistry->id}}" method="post">
            @csrf
           
            <div class="modal-body">
          <div class="form-group">
            <label for="">سوال</label>
            <input type="text" class="form-control" name="question" value="{{$chemistry->question}}" required>
          </div>
          <div class="form-group">
            <label for="">الف</label>
            <input type="text" class="form-control" name="option_a" value="{{$chemistry->option_a}}" required>
          </div>
          <div class="form-group">
            <label for="">ب</label>
            <input type="text" class="form-control" name="option_b" value="{{$chemistry->option_b}}" required>
          </div>
          <div class="form-group">
            <label for="">ج</label>
            <input type="text" class="form-control" name="option_c" value="{{$chemistry->option_c}}" required>
          </div>
          <div class="form-group">
            <label for="">د</label>
            <input type="text" class="form-control" name="option_d" value="{{$chemistry->option_d}}" required>
          </div>
          <div class="form-group">
            <label for="">جواب درست</label>
            <input type="text" class="form-control" name="is_correct" value="{{$chemistry->is_correct}}" required>
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
</div>
</div>



<div class="modal fade" id="addchemistry">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" aria-label="close" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
               </button>
          <h2 class="text-center">لیست سوال ها </h2>
          
        </div>
          <form action="{{route('add_chemistry')}}" method="post">
            @csrf
           
        <div class="modal-body">
        <div class="form-group">
            <label for="">سوالات </label>
            <input type="text" class="form-control" name="question" placeholder="لطفا سوالات را وارد نمایید" required>
          </div>
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