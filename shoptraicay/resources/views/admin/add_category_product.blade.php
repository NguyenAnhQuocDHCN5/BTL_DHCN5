@extends('admin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Loại quả
                        </header>
              
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                    {{ csrf_field() }}
                                    @php
                             if(Session::has('message'))
                             {
                           echo Session::get('message');
                               }
    @endphp
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên loại</label>
                                    <input type="text"  class="form-control"  onkeyup="ChangeToSlug();" name="ten_loai"  id="slug" placeholder="tên loại quả" required="">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả loại quả</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="mieu_ta_loai" id="exampleInputPassword1" placeholder="Miêu tả loại quả"required=""></textarea>
                                </div>
                               
                               
                               
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm loại quả</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection