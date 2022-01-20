@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê tin tức
    </div>
    @if(Session::has('message'))
    <span class="text-alert">{{Session::get('message')}}</span>
    @endif
   
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tiêu đề</th>
            <th>Hình ảnh</th>
            <th>Nội dung</th>
            <th> Ngày đăng</th>
            
       
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_tintuc as $key => $cate_pro)
        <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->tieu_de }}</td>
            <td><img src="{{URL::to('public/uploads/tintuc/'.$cate_pro->hinh_anh_tin_tuc)}}" height="200" width="200"></td>
            <td>{!!Illuminate\Support\Str::of($cate_pro->noi_dung_tin_tuc)->words(10)!!}</td>
            <td>{{ $cate_pro->ngay_dang_tin_tuc }}</td>
            

            
           
            <td>
              <a href="{{URL::to('/edit-tintuc/'.$cate_pro->ma_tin_tuc)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa tin này ?')" href="{{URL::to('/delete-tintuc/'.$cate_pro->ma_tin_tuc)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
          <tr>
           
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
          @for($i = 1; $i<=$all_tintuc->lastPage(); $i++)
					<li><a href="{{URL::to('/all-tintuc').'?page='.$i}}" class="{{$i==$all_tintuc->currentPage()?'active':''}}"> {{$i}}</a> </li>
					@endfor
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection