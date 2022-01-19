@extends('layoutlogin')
@section('content1')
<div class="container">
<div class="features_items"><!--features_items-->
<h2 class="title text-center">TẤT CẢ SẢN PHẨM</h2>
					@foreach ($qua as $qua)
                    <a href="#">
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
									<a href="{{URL::to('/chitietsanpham/'.$qua->ma_qua)}}"> <img src="{{('public/uploads/sanpham/'.$qua->hinh_anh_qua)}}" style="width:250px;height:230px; alt="" /></a> 
                                        <h2>{{number_format($qua->gia_qua)}} VND</h2>
                                        <p>{{$qua->ten_qua}}</p>
                                        <input name="sanpham_id" type="hidden" value="{{$qua->ma_qua}}"/>
                                        <a href="{{URL::to('/chitietgiohang1/'.$qua->ma_qua)}}" class="btn btn-default add-to-cart" style="padding: 6px;12px;"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng </a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </a>
                   	@endforeach
                </div><!--features_items-->

</div>
@endsection