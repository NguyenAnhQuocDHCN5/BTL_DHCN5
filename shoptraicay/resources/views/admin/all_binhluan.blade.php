@extends('admin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Chi tiết bình luận
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
            <th>Tên bình luận </th>
            <th>Email bình luận</th>
            <th>Nội dung bình luận</th>
            <th>Tên sản phẩm </th>           
            <th>Ngày bình luận</th>
            
            
            
       
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_binhluan as $key => $cate_pro)
        
        <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->binhluan_ten }}</td>
            <td>{{ $cate_pro->binhluan_email }}</td>
            <td>{{ $cate_pro->binhluan_noidung	 }}</td>
            <td>{{ $cate_pro->ten_qua}}</td>
            <td>{{ $cate_pro->binhluan_ngay }}</td>
         
          
            
           

           
            <td>
              
              <a onclick="return confirm('Bạn có chắc là muốn xóa tin liên hệ này không ?')" href="{{URL::to('/delete-binhluan/'.$cate_pro->ma_binhluan)}}" class="active styling-edit" ui-toggle-class="">
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
          @for($i = 1; $i<=$all_binhluan->lastPage(); $i++)
					<li><a href="{{URL::to('/all-binhluan').'?page='.$i}}" class="{{$i==$all_binhluan->currentPage()?'active':''}}"> {{$i}}</a> </li>
					@endfor
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection