<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Shop Trái Cây</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +0965540620</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> shoptraicay@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
						&nbsp &nbsp &nbsp<a href="{{URL::to('/trang-chu')}}"><img src="{{('public/frontend/images/logo.jpg')}}" alt="" style="heigh:60px; width:60px;" /></a>
							<p><strong>SHOP TRÁI CÂY</strong></p>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li>
									<a href="{{URL::to('/trangcanhan')}}"><i class="fa fa-user"></i>
									@php
        							$kh_ten = Session::get('kh_ten');
               						 if($kh_ten)
               					 	{
                			    		echo $kh_ten;    
                					}
               						 @endphp
									</a>
								</li>
								<li><a href="{{URL::to('/giohang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								@php
                                   $kh_ten = Session::get('kh_ten');
                                   if($kh_ten!=NULL){ 
                                 @endphp
								 <li><a href="{{URL::to('/logout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                @php
                          		  }else{
                                @endphp
								<li><a href="{{URL::to('/login')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                 @php
                             }
                              @endphp
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
								<li class="dropdown"><a href="#">Cửa hàng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/tatcasanpham')}}">Tất cả sản phẩm</a></li>							
                                    </ul>
                                </li>                                   
                                <li><a href="{{URL::to('/tintuc')}}">Tin tức</a></li>                           
								<li><a href="{{URL::to('/lienhe')}}">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
							<div class="col-sm-11">
									<img src="{{URL::to('/public/frontend/images/slide5.jpg')}}" class="girl img-responsive" alt="" />
									</div>
							</div>
							<div class="item">
							<div class="col-sm-11">
									<img src="{{URL::to('/public/frontend/images/slide6.jpg')}}" class="girl img-responsive" alt="" />
									</div>
							</div> 
							</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh mục sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian" style="background-color:#e4e2e2;"><!--category-productsr-->  
							@foreach ($loaiqua as $loai)
                            <div class="panel-heading" >
							 <h3 class="panel-title"><a href="#">{{$loai->ten_loai}}</a></h3>
							 <br>
                            </div>
							@endforeach 
                    </div><!--/category-products-->
                </div>
            </div>
            
            <div class="col-sm-9 padding-right">
				@yield('content')
            </div>
        </div>
    </div>
</section>
<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>MUA HÀNG</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Trái Cây Tươi</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>HỔ TRỢ KHÁCH HÀNG</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Khách Hàng Thân Thiết</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>GIỚI THIỆU</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Địa chỉ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2018 </p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>