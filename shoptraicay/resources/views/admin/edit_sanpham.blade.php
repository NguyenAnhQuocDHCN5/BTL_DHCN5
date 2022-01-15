@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Chỉnh sửa danh mục sản phẩm
                        </header>
                        
                        <div class="panel-body">
                            @foreach($edit_sanpham as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-sanpham/'.$edit_value->ma_qua)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã loại</label>
                                    <input type="text" value="{{$edit_value->ma_loai}}" onkeyup="ChangeToSlug();" name="ma_loai" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên quả</label>
                                    <input type="text" value="{{$edit_value->ten_qua}}" onkeyup="ChangeToSlug();" name="ten_qua" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá quả</label>
                                    <input type="text" value="{{$edit_value->gia_qua}}" onkeyup="ChangeToSlug();" name="gia_qua" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="hinh_anh_qua" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/sanpham/'.$edit_value->hinh_anh_qua)}}" height="200" width="200">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả loại quả</label>
                                     <textarea style="resize: none" rows="8" class="form-control" name="mo_ta_qua" id="ckeditor_qua">{{$edit_value->mo_ta_qua}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng quả</label>
                                    <input type="text" value="{{$edit_value->so_luong_qua}}" onkeyup="ChangeToSlug();" name="so_luong_qua" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trạng thái quả</label>
                                    <input type="text" value="{{$edit_value->trang_thai_qua}}" onkeyup="ChangeToSlug();" name="trang_thai_qua" class="form-control" id="slug" >
                                </div>
                              
                                
                                <button type="submit" name="update_sanpham" class="btn btn-info">Cập nhật </button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection