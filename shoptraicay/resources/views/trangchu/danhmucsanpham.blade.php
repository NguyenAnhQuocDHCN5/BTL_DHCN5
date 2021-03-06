@extends('layouthome')
@section('content')
            <div class="features_items" ><!--features_items-->
                @foreach ($tenloai as $ten)
                    <h2 class="title text-center">{{$ten->ten_loai}}</h2>
                @endforeach
					@foreach ($listsanpham as $sanpham)
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
                </div><!--features_items-->
                <div style=" text-align: right;">
                    <a class="btn btn-primary" style="margin-top: 0px; " href="{{URL::to('/sanphamtheoloai/'.$ma_loai_qua)}}">Xem thêm</a>
                    </div>
</div>
@endsection