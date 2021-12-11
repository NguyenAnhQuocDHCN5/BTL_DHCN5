@extends('homelayout')
@section('content')
<div class="category-tab"><!--category-tab-->	
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#qua_mien_trung" data-toggle="tab">Quả Miền Trung</a></li>
								<li><a href="#qua_mien_bac" data-toggle="tab">Quả Miền Bắc</a></li>
								<li><a href="#qua_mien_nam" data-toggle="tab">Quả Miền Nam</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="qua_mien_trung" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{('public/frontend/images/buoi_mien_trung.jpg')}}" alt="" />
												<h2>75.000 VND</h2>
												<p>Bưởi da xanh</p>
												<a href="{{URL::to('/chitietsanpham')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng </a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="qua_mien_bac" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{('public/frontend/images/man_bac.jpg')}}" alt="" />
												<h2>75.000 VND</h2>
												<p>Mận Bắc</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>
											
										</div>
									</div>
								</div>			
							</div>
							
							<div class="tab-pane fade" id="qua_mien_nam" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="{{'public/frontend/images/kiwi.jpg'}}" alt="" />
												<h2>80.000 VND</h2>
												<p>KiWi</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
											</div>	
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div><!--/category-tab-->
@endsection