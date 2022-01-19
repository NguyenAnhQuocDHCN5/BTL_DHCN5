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
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
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
            <th>Tên danh mục</th>
            
       
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($all_category_product as $key => $cate_pro)
        <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro->ten_loai }}</td>
           
           
            <td>
              <a href="{{URL::to('/edit-category-product/'.$cate_pro->ma_loai)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này không ?')" href="{{URL::to('/delete-category-product/'.$cate_pro->ma_loai)}}" class="active styling-edit" ui-toggle-class="">
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
          @for($i = 1; $i<=$all_category_product->lastPage(); $i++)
					<li><a href="{{URL::to('/all-category-product').'?page='.$i}}" class="{{$i==$all_category_product->currentPage()?'active':''}}"> {{$i}}</a> </li>
					@endfor
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection