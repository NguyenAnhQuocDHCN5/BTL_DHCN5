@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi tiết liên hệ
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
            <th>Tên người liên hệ </th>
            <th>Số điện thoại</th>
            <th>Email</th>
            <th>Tiêu đề</th>
            <th>Nội dung</th>
            <th>Ngày liên hệ</th>
            <th>Mã khách hàng </th>
            
            
       
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_lienhe as $key => $cate_pro)
        <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->ten_nguoi_lien_he }}</td>
            <td>{{ $cate_pro->sdt_nguoi_lien_he }}</td>
            <td>{{ $cate_pro->email_nguoi_lien_he }}</td>
            <td>{{ $cate_pro->tieude_lien_he}}</td>
            <td>{{ $cate_pro->noi_dung }}</td>
            <td>{{ $cate_pro->ngay_lien_he }}</td>
            <td>{{ $cate_pro->ma_khach_hang }}</td>
            
           

           
            <td>
              
              <a onclick="return confirm('Bạn có chắc là muốn xóa tin liên hệ này không ?')" href="{{URL::to('/delete-lienhe/'.$cate_pro->ma_lien_he)}}" class="active styling-edit" ui-toggle-class="">
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
          @for($i = 1; $i<=$all_lienhe->lastPage(); $i++)
					<li><a href="{{URL::to('/all-lienhe').'?page='.$i}}" class="{{$i==$all_lienhe->currentPage()?'active':''}}"> {{$i}}</a> </li>
					@endfor
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection