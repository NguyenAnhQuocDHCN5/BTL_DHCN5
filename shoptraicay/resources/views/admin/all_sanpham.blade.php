@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục sản phẩm
    </div>
    @if(Session::has('message'))
    <span class="text-alert">{{Session::get('message')}}</span>
    @endif
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        
                   
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      <form action="{{URL::to('/tim-kiem-sanpham')}}"method="post">
      {{ csrf_field() }}	
        <div class="input-group">
          <input name="timkiem" type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="submit">Tìm kiếm</button>
          </span>
        </div>
        </form>

      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Loại sản phẩm</th>
            <th>Tên quả</th>
            <th>Giá quả</th>
            <th>Hình ảnh</th>
           
            <th>Trạng thái</th>
            <th>Mô tả</th>
            <th>Chỉnh sửa</th>
       
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_sanpham as $key => $cate_pro)
        <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->ten_loai }}</td>
            <td>{{ $cate_pro->ten_qua }}</td>
            <td>{{ $cate_pro->gia_qua }}</td>
            <td><img src="{{URL::to('public/uploads/sanpham/'.$cate_pro->hinh_anh_qua)}}" height="100" width="100"></td>
            
            <td>{{ $cate_pro->tinh_trang_qua }}</td>
            <td>{!!Illuminate\Support\Str::of($cate_pro->mo_ta_qua)->words(20)!!}</td>


            
           
            <td>
              <a href="{{URL::to('/edit-sanpham/'.$cate_pro->ma_qua)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-sanpham/'.$cate_pro->ma_qua)}}" class="active styling-edit" ui-toggle-class="">
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
          @for($i = 1; $i<=$all_sanpham->lastPage(); $i++)
					<li><a href="{{URL::to('/all-sanpham').'?page='.$i}}" class="{{$i==$all_sanpham->currentPage()?'active':''}}"> {{$i}}</a> </li>
					@endfor
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection