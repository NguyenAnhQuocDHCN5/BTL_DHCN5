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
                    <form role="form" class="form-horizontal bucket-form" action="{{URL::to('/capnhapthongtinkhachhang')}}" method="post">
                    {{ csrf_field() }}
                                    @php
                             if(Session::has('message'))
                             {
                           echo Session::get('message');
                               }
                          @endphp
                        <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2">Tên</label>
                        <div class="col-lg-6">
                            <div class="input-group m-bot15">
                                <span class="input-group-addon btn-white"><i class="fa fa-user"></i></span>
                                @php
        							$kh_ten = Session::get('kh_ten');
               					@endphp
                                <input type="text"  class="form-control" value="{{$kh_ten}}">
                            </div>        
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label class="col-sm-1 control-label col-lg-2">Email</label>
                        <div class="col-lg-6">
							<div class="input-group m-bot15">
								<span class="input-group-addon btn-white"><i class="fa fa-envelope"></i></span>
                                @php
        							$kh_email = Session::get('kh_email');
               					@endphp
								<input type="text" class="form-control" value="{{$kh_email}}">
							</div>   
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2">SĐT</label>
                        <div class="col-lg-6">
							<div class="input-group m-bot15">
								<span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                @php
        							$kh_sdt = Session::get('kh_sdt');
               					@endphp
								<input type="text" class="form-control" value="{{$kh_sdt}}">
							</div>   
                        </div>
                    </div>
					<div class="form-group">
                        <label class="col-sm-2 control-label col-lg-2">Địa chỉ</label>
                        <div class="col-lg-6">
							<div class="input-group m-bot17">
								<span class="input-group-addon btn-white"><i class="fa fa-home"></i></span>
                                @php
        							$kh_diachi = Session::get('kh_diachi');
               					@endphp
								<input type="text" class="form-control" value="{{$kh_diachi}}">
                                
							</div>   
                            <br>
                                <button type="submit" class="btn btn-default">Xác nhận </button>
                        </div>
                    </div>
                    
					
				    </form>
				
                    </div>	
                </div><!--features_items-->
            </div>
        </div>
    </div>
</section>
 @endsection