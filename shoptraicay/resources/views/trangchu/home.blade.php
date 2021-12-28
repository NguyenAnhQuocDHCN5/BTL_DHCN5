@extends('layouthome')
@section('content')
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Sản phẩm</h2>
					@foreach ($qua as $qua)
                    <a href="#">
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
									<a href="{{URL::to('/chitietsanpham/'.$qua->ma_qua)}}"> <img src="{{('public/frontend/images/'.$qua->hinh_anh_qua)}}" style="width:250px;height:230px; alt="" /></a> 
                                        <h2>{{$qua->gia_qua}} VND</h2>
                                        <p>{{$qua->ten_qua}}</p>
                                        <input name="sanpham_id" type="hidden" value="{{$qua->ma_qua}}"/>
                                        <a href="{{URL::to('/chitietgiohang')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </a>
                   	@endforeach
                </div><!--features_items-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Sản phẩm liên quan</h2>
                    
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">	
                                <a href="#">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{('public/frontend/images/man_bac.jpg')}}" style="width:250px;height:230 px; alt="" />
                                                <h2>75.000 VND</h2>
                                                <p>Mận Bắc</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="item">	
                                <div class="col-sm-4">
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
                         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>			
                    </div>
@endsection