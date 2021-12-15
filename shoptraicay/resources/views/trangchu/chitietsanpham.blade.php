@extends('layouthome')
@section('content')
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{('public/frontend/images/buoi_mien_trung.jpg')}}" alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{('public/frontend/images/buoi_mien_trung.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{('public/frontend/images/buoi_mien_trung.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{('public/frontend/images/buoi_mien_trung.jpg')}}" alt=""></a>
										</div>
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Bưởi da xanh</h2>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>75.000 VND</span>
								</span>
                                <span>
									<label>Số lượng:</label>
									<input type="text" value="3" />
                                    <br>
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</span>
								<p><b>Tình trạng:</b> còn hàng</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Mô tả sản phẩm</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<!-- <ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul> -->
									<p>Bưởi Da Xanh Cắt Tại Vườn size 1kg-1.2kg

Công Ty TNHH Sản Xuất và Thương Mại Big S

Rất hân hạnh phục vụ quý khách.

52 Thạch Ngọc Biên, Khóm 10, Phường 9, Tp Trà Vinh

, tặng 0,5 kg phân dê đã xử lý nấm mốc

Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....

Sản phẩm này là tài sản cá nhân được bán bởi Nhà Bán Hàng Cá Nhân và không thuộc đối tượng phải chịu thuế GTGT. Do đó hoá đơn VAT không được cung cấp trong trường hợp này.
</p>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
@endsection
