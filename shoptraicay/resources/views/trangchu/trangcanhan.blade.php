@extends('layoutlogin')
@section('content1')
<section style="margin-top: 54px;margin-bottom: 90px;">
    <div class="container">
        <div class="row">
		<div class="col-sm-3">
			    <div class="left-sidebar">
					<h2>Danh mục</h2>
				    <div class="panel-group category-products"  id="accordian">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="#"><i class="fa fa-user"></i>&nbsp&nbsp Tài khoản</a></h4>
							</div>
						</div>

						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="#"><i class="fa fa-archive"></i>&nbsp&nbspĐơn hàng</a></h4>
							</div>
						</div>
					</div>
				</div>
			</div> 
            
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Thông tin khách hàng</h2>
					<div class="panel-body">
                    @foreach($thongtinkh as $khachhang)
                    <form role="form" class="form-horizontal bucket-form" action="{{URL::to('/capnhapthongtinkhachhang')}}" method="post">
                    {{ csrf_field() }}
                              
                        <div class="form-group">
                        @php
                             if(Session::has('message1'))
                             {
                           echo Session::get('message1');
                               }
                          @endphp
                        <label class="col-sm-2 control-label col-lg-2">Tên</label>
                        <div class="col-lg-6">
                            <div class="input-group m-bot15">
                                <span class="input-group-addon btn-white"><i class="fa fa-user"></i></span>
                                <input type="text" name="tenkh"  class="form-control" value="{{$khachhang->kh_ten}}">
                            </div>        
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label class="col-sm-1 control-label col-lg-2">Email</label>
                        <div class="col-lg-6">
							<div class="input-group m-bot15">
								<span class="input-group-addon btn-white"><i class="fa fa-envelope"></i></span>
								<input type="email" name="emailkh" class="form-control" value="{{$khachhang->kh_email}}">
							</div>   
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2">SĐT</label>
                        <div class="col-lg-6">
							<div class="input-group m-bot15">
								<span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
								<input type="number" name="sdtkh" class="form-control" value="{{$khachhang->kh_sdt}}">
							</div>   
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2">Địa chỉ</label>
                        <div class="col-lg-6">
							<div class="input-group m-bot17">
								<span class="input-group-addon btn-white"><i class="fa fa-home"></i></span>
                                <input type="hidden" name="idkh" class="form-control" value="{{$khachhang->ma_khach_hang}}">
								<input type="text" name="diachikh" class="form-control" value="{{$khachhang->kh_diachi}}">
							</div>   
                            <br>
                                <button type="submit" class="btn btn-default">Xác nhận </button>
                        </div>
                    </div>
				    </form>
				@endforeach
                    </div>	
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
 @endsection