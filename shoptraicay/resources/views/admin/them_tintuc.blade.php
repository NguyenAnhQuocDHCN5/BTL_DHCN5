@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                         Thêm tin tức
                        </header>
              
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-tintuc')}}" method="post">
                                    {{ csrf_field() }}
                                    @php
                             if(Session::has('message'))
                             {
                           echo Session::get('message');
                               }
                             @endphp
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề </label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="tieu_de"  id="slug" placeholder="Tiêu đề" required="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh tin tức</label>
                                    <input type="file" name="hinh_anh_tin_tuc" class="form-control" id="exampleInputEmail1">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="noi_dung_tin_tuc" id="ckeditor_tintuc" placeholder="Nội dung tin tức"required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày đăng</label>
                                    <input type="date" data-validation="number" data-validation-error-msg="Làm ơn điền ngày đăng" name="ngay_dang_tin_tuc" class="form-control" id="exampleInputEmail1" placeholder="Điền ngày đăng">
                                </div>
                                
                                      <button type="submit" name="them_tintuc" class="btn btn-info">Thêm tin tức</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection