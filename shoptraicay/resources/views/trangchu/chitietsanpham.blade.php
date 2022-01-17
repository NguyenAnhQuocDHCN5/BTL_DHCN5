@extends('layouthome')
@section('content')
@foreach($sanphamchitiet as $sanpham)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
								<div class="view-product">
									<img src="{{URL::to('/public/uploads/sanpham/'.$sanpham->hinh_anh_qua)}}" style="width:360px;height:295px; alt="" />
								</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{URL::to('/public/uploads/sanpham/'.$sanpham->hinh_anh_qua)}}" style="width:85px;height:84px; alt=""></a>
										  <a href=""><img src="{{URL::to('/public/uploads/sanpham/'.$sanpham->hinh_anh_qua)}}" style="width:85px;height:84px;  alt=""></a>
										  <a href=""><img src="{{URL::to('/public/uploads/sanpham/'.$sanpham->hinh_anh_qua)}}" style="width:85px;height:84px; alt=""></a>
										</div>
										<!-- <div class="item">
										  <a href=""><img src="{{('public/frontend/images/buoi_mien_trung.jpg')}}" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="{{('public/frontend/images/buoi_mien_trung.jpg')}}" alt=""></a>
										</div> -->
									</div>
								  <!-- Controls -->
								  <!-- <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a> -->
							</div>
	
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$sanpham->ten_qua}}</h2>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>{{number_format($sanpham->gia_qua).' '.'VND'}}</span>
								</span>
								<form action="{{URL::to('/chitietgiohang')}}" method="POST">
									{{csrf_field()}}
                                <span>
									<label>Số lượng:</label>
									<input name="soluong" type="number" min="1" value="1"/>
									<input name="sanphamid" type="hidden" value="{{$sanpham->ma_qua}}"/>
                                    <br>
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</span>
								</form>
								<p><b>Tình trạng:</b> còn hàng</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#review" data-toggle="tab">Mô tả sản phẩm</a></li>
								<li><a href="#reviews" data-toggle="tab">Bình luận</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="review" >
								{{$sanpham->mo_ta_qua}}
							</div>
							<div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									<h2>Thêm bình luận</h2>
									<form action="{{URL::to('/binhluan')}}" method="POST">
									{{ csrf_field() }}	
										<span>
											<input type="text" name="ten_binhluan" placeholder="Tên"/>
											<input type="email" name="email_binhluan" placeholder="Email "/>
											<input name="sanphamid1" type="hidden" value="{{$sanpham->ma_qua}}"/>
										</span>
										<textarea name="noidung_binhluan" ></textarea>
										<button type="submit" class="btn btn-default pull-right">
											Gửi
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
@endforeach
@endsection
