@extends('layoutlogin')
@section('content1')
<div class="shopping-cart section">
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
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
						@foreach($content as $sanpham)
							<tr>
								<td class="image" data-title="No"><img src="{{URL::to('/public/frontend/images/'.$sanpham->options->image)}}" alt="#"></td>
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
								echo $gia;
								@endphp
								</span></td>
								<td class="action" data-title="Remove"><a href="{{URL::to('/xoasanpham/'.$sanpham->rowId)}}"><i class="ti-trash remove-icon"></i></a></td>
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
										<li>Cart Subtotal<span>{{Cart::subtotal()}}</span></li>
										<li>Shipping<span>{{Cart::tax()}}</span></li>
										<li class="last">You Pay<span>{{Cart::total()}}</span></li>
									</ul>
									<div class="button5">
										<a href="{{URL::to('/thanhtoan')}}" class="btn">Checkout</a>
										<a href="#" class="btn">Continue shopping</a>
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