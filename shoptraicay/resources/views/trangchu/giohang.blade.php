@extends('layoutlogin')
@section('content1')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/trang-chu')}}">Trang Chủ</a></li>
				  <li class="active">Giỏ Hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				@php
				$content = Cart::content();
				@endphp
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $sanpham)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('/public/frontend/images/'.$sanpham->options->image)}}" style="width:80px;height:80px; alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$sanpham->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p>{{number_format($sanpham->price).' '.'VND'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="{{URL::to('/congsl')}}"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$sanpham->qty}}" autocomplete="off" size="2">

									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
								@php
								$gia = $sanpham->price * $sanpham->qty;
								echo $gia;
								@endphp
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/xoasanpham/'.$sanpham->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> 
    <section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng giỏ hàng<span>{{Cart::subtotal()}}</span></li>
							<li>Phí vận chuyển <span>{{Cart::tax()}}</span></li>
							<li>Thành tiền <span>{{Cart::total()}}</span></li>
						</ul>
							<a class="btn btn-default update" href="">Cập nhật</a>
							<a class="btn btn-default check_out" href="">Tiếp tục</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection