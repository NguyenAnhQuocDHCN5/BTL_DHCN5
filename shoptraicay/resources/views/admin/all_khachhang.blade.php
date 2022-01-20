@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê khách hàng
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
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Tên khách hàng</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
             
       
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_khachhang as $key => $cate_pro)
        <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->kh_email }}</td>
            <td>{{ $cate_pro->kh_matkhau }}</td>
            <td>{{ $cate_pro->kh_ten }}</td>
            <td>{{ $cate_pro->kh_sdt }}</td>
            <td>{{ $cate_pro->kh_diachi }}</td>
           

            
           
            <td>
              <a href="{{URL::to('/edit-khachhang/'.$cate_pro->ma_khach_hang)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa khách hàng này không ?')" href="{{URL::to('/delete-khachhang/'.$cate_pro->ma_khach_hang)}}" class="active styling-edit" ui-toggle-class="">
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
          @for($i = 1; $i<=$all_khachhang->lastPage(); $i++)
					<li><a href="{{URL::to('/all-khachhang').'?page='.$i}}" class="{{$i==$all_khachhang->currentPage()?'active':''}}"> {{$i}}</a> </li>
					@endfor
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection