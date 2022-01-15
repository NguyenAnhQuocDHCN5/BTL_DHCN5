@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Chỉnh sửa tin tức
                        </header>
                        
                        <div class="panel-body">
                            @foreach($edit_tintuc as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-tintuc/'.$edit_value->ma_tin_tuc)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input type="text" value="{{$edit_value->tieu_de}}" onkeyup="ChangeToSlug();" name="tieu_de" class="form-control" id="slug" >
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="hinh_anh_tin_tuc" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/tintuc/'.$edit_value->hinh_anh_tin_tuc)}}" height="200" width="200">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung tin</label>
                                     <textarea style="resize: none" rows="8" class="form-control" name="noi_dung_tin_tuc" id="ckeditor_tintuc">{{$edit_value->noi_dung_tin_tuc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày đăng</label>
                                    <input type="text" value="{{$edit_value->ngay_dang_tin_tuc}}" onkeyup="ChangeToSlug();" name="ngay_dang_tin_tuc" class="form-control" id="slug" >
                                </div>
                                
                              
                                
                                <button type="submit" name="update_sanpham" class="btn btn-info">Cập nhật </button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection