@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                         Thêm sản phẩm 
                        </header>
              
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-sanpham')}}" method="post">
                                    {{ csrf_field() }}
                                    @php
                             if(Session::has('message'))
                             {
                           echo Session::get('message');
                               }
    @endphp
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại quả </label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="ma_loai"  id="slug" placeholder="mã loại quả" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên quả</label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="ten_qua"  id="slug" placeholder="tên loại quả" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="hinh_anh_qua" class="form-control" id="exampleInputEmail1">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả loại quả</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="mo_ta_qua" id="ckeditor_qua" placeholder="Miêu tả loại quả"required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số lượng</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số lượng" name="so_luong_qua" class="form-control" id="exampleInputEmail1" placeholder="Điền số lượng">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trạng thái quả</label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="trang_thai_qua"  id="slug" placeholder="trạng thái quả" required="">
                                                             
                            </div>
                                     <div class="form-group">
                                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                                    <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="gia_qua" class="form-control" id="" placeholder="Tên danh mục">
                                </div>
                             
                                 
                                     
                                
                                      <button type="submit" name="them_sanpham" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection