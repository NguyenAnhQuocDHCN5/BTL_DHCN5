@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Chỉnh sửa danh mục khách hàng
                        </header>
                        
                        <div class="panel-body">
                            @foreach($edit_khachhhang as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-khachhang/'.$edit_value->ma_khach_hang)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{$edit_value->kh_email}}" onkeyup="ChangeToSlug();" name="kh_email" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật khẩu</label>
                                    <input type="text" value="{{$edit_value->kh_matkhau}}" onkeyup="ChangeToSlug();" name="kh_matkhau" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên khách hàng</label>
                                    <input type="text" value="{{$edit_value->kh_ten}}" onkeyup="ChangeToSlug();" name="kh_ten" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" value="{{$edit_value->kh_sdt}}" onkeyup="ChangeToSlug();" name="kh_sdt" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" value="{{$edit_value->kh_diachi}}" onkeyup="ChangeToSlug();" name="kh_diachi" class="form-control" id="slug" >
                                </div>
                                  
                              
                                
                                <button type="submit" name="update_khachhang" class="btn btn-info">Cập nhật </button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection