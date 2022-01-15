@extends('layoutlogin')
@section('content1')
<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
					@php
				$content = Cart::content();
				@endphp
						<div class="checkout-form">
							<h2>Thông tin thanh toán</h2>
							<p></p>
							<form class="form" method="POST" action="{{route('xacnhan1')}}">
							{{ csrf_field() }}	
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Họ và tên<span>*</span></label>
											<input type="text" name="ten_nguoinhan" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email <span>*</span></label>
											<input type="email" name="email_nguoinhan" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">	
										<div class="form-group">
											<label>Số điện thoại<span>*</span></label>
											<input type="number" name="sdt_nguoinhan" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Địa chỉ<span>*</span></label>
											<input type="text" name="diachi_nguoinhan" placeholder="" required="required">
										</div>
									</div>
                                    <div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Ghi chú<span>*</span></label>
                                            <textarea rows="9" style="background:#F6F7FB" type="text" name="ghichu_nguoinhan">  
                                        	</textarea>  
										</div>
									</div>
								</div>
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>CART  TOTALS</h2>
								<div class="content">
									<ul>
										<li>Tổng giỏ hàng<span>{{Cart::subtotal()}}</span></li>
										<li>Shipping<span>Free</span></li>
										<li class="last">Tổng thành tiền<span>{{Cart::total()}}</span></li>
									</ul>
								</div>
							</div>
							<div class="single-widget">
								<h2>Hình thức thanh toán</h2>
								<div class="content">
									<div class="checkbox" >
										<label class="checkbox-inline" for="1"><input name="payment_option" id="1" type="checkbox"> Thanh toán khi giao hàng</label>
										<label class="checkbox-inline" style="margin-left: 0px" for="2"><input name="payment_option" id="2" type="checkbox"> Chuyển khoản qua ngân hàng</label>
										<label class="checkbox-inline" style="margin-left: 0px" for="3"><input name="payment_option" id="3" type="checkbox"> Chuyển khoản qua momo</label>
									</div>
								</div>
							</div>
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
									<input type="submit" value="Xác nhận thanh toán" name="send_order_place" class="btn" style="background:#333">
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection