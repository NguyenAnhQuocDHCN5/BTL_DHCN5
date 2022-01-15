@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Chỉnh sửa danh mục Admin
                        </header>
                        
                        <div class="panel-body">
                            @foreach($edit_admin  as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-admin/'.$edit_value->ma_adm)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên đăng nhập</label>
                                    <input type="text" value="{{$edit_value->ten_dn}}" onkeyup="ChangeToSlug();" name="ten_dn" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật khẩu</label>
                                    <input type="text" value="{{$edit_value->mat_khau}}" onkeyup="ChangeToSlug();" name="mat_khau" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Admin</label>
                                    <input type="text" value="{{$edit_value->ten_adm}}" onkeyup="ChangeToSlug();" name="ten_adm" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" value="{{$edit_value->sdt}}" onkeyup="ChangeToSlug();" name="sdt" class="form-control" id="slug" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" value="{{$edit_value->dia_chi}}" onkeyup="ChangeToSlug();" name="dia_chi" class="form-control" id="slug" >
                                </div>
                                  
                              
                                
                                <button type="submit" name="update_admin" class="btn btn-info">Cập nhật </button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection