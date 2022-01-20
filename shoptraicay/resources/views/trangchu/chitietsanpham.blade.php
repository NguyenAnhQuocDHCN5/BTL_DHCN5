@extends('layouthome')
@section('content')
@foreach($sanphamchitiet as $sanpham)
<div class="product-details"><!--product-details-->
						<div class="col-sm-6">
								<div class="view-product">
									<img src="{{URL::to('/public/uploads/sanpham/'.$sanpham->hinh_anh_qua)}}" style="width:432px;height: 436px;" alt="" />
								</div>
						</div>
						<div class="col-sm-6">
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
									<input name="sanphamid" type="hidden" value="{{$sanpham->ma_qua}}"/><strong>KG</strong>
                                    <br>
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</span>
								</form>
								<p><b>Tình trạng:</b> {{$sanpham->tinh_trang_qua}}</p>
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
								{!!$sanpham->mo_ta_qua!!}
							</div>
							<div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									<div>
									<p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
									</div>
									<div>
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
							
						</div>
					</div><!--/category-tab-->
						
					<div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Sản phẩm liên quan</h2>
                    
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">   
                            @foreach ($sanphamlienquan as $sanpham)
                            <a href="#">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                            <div class="productinfo text-center">
                                            <a href="{{URL::to('/chitietsanpham/'.$sanpham->ma_qua)}}"> <img src="{{URL::to('public/uploads/sanpham/'.$sanpham->hinh_anh_qua)}}" style="width:250px;height:230px; alt="" /></a> 
                                                <h2>{{number_format($sanpham->gia_qua)}} VND</h2>
                                                <p>{{$sanpham->ten_qua}}</p>
                                                <input name="sanpham_id" type="hidden" value="{{$sanpham->ma_qua}}"/>
                                                <a href="{{URL::to('/chitietgiohang1/'.$sanpham->ma_qua)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng </a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach 
                            </div>
						</div>
					</div>
@endforeach
@endsection
