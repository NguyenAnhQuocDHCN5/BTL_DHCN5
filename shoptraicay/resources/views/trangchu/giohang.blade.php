@extends('layoutlogin')
@section('content1')
<div class="shopping-cart section"  style="margin-top: 54px;">
		<div class="container">
			<div class="row">
				
				<div class="col-12">
					<!-- Shopping Summery -->
				@php
				$content = Cart::content();
				@endphp
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class="fa fa-trash-o"></i></th>
							</tr>
						</thead>
						<tbody>
						@foreach($content as $sanpham)
					
							<tr>
								<td class="image" data-title="No"><img src="{{URL::to('/public/uploads/sanpham/'.$sanpham->options->image)}}" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">{{$sanpham->name}}</a></p>
									<p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
								</td>
								<td class="price" data-title="Price"><span>{{number_format($sanpham->price).' '.'VND'}} </span></td>
								<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="{{URL::to('/congsl')}}"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$sanpham->qty}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
								<td class="total-amount" data-title="Total">
									<span>
								@php
								$gia = $sanpham->price * $sanpham->qty;
								echo number_format($gia).' '.'VND';
								@endphp
								</span></td>
								<td class="action" data-title="Remove"><a href="{{URL::to('/xoasanpham/'.$sanpham->rowId)}}"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Tổng giỏ hàng<span>{{Cart::subtotal()}}</span></li>
										<li>Phí vận chuyển<span>Free</span></li>
										<li class="last">Tổng thành tiền<span>{{Cart::total()}}</span></li>
										
									</ul>
									<div class="button5">
										<a href="{{URL::to('/thanhtoan')}}" class="btn1">Thanh toán</a>
										<a href="{{URL::to('/trang-chu')}}" class="btn1">Tiếp tụp mua hàng</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
@endsection