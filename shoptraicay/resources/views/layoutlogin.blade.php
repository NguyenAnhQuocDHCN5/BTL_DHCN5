<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Shop Trái Cây</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/themify-icons.css')}}" rel="stylesheet" >
	<link href="{{asset('public/frontend/css/reset.css')}}" rel="stylesheet" >
	<link href="{{asset('public/frontend/style.css')}}" rel="stylesheet" >

</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +0258130005</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> nguyenanhquoc12a1@gmail.com</a></li>
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
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i>
									@php
        							$kh_ten = Session::get('kh_ten');
               						 if($kh_ten)
               					 	{
                			    		echo $kh_ten;    
                					}
               						 @endphp
								</a></li>
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
    <section ><!--form-->
	@yield('content1')
    </section><!--/form-->
	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>MUA HÀNG</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trái Cây Tươi</a></li>
								</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>HỔ TRỢ KHÁCH HÀNG</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Khách Hàng Thân Thiết</a></li>
								</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-widget">
							<h2>GIỚI THIỆU</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Địa chỉ</a></li>
								</ul>
						</div>
					</div>
							
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 </p>
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
	
    <script src="{{asset('public/frontend/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('public/frontend/js/slicknav.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/nicesellect.js')}}"></script>
	<script src="{{asset('public/frontend/js/active.js')}}"></script>

</body>
</html>