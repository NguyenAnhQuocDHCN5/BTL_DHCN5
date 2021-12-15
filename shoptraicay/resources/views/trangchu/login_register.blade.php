@extends('layoutlogin')
@section('content1')
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						@php
   						 if(Session::has('message_1'))
   						 {
   						     echo Session::get('message_1');
   						 }
   						 @endphp
						<form action="{{route('dangnhapkh')}}" method="post">
						{{csrf_field()}}
						<input type="email" name="email_kh" placeholder="Email">
						<input type="password"  name="mat_khau_kh" placeholder="Mật khẩu" >
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->	
						<h2>Đăng kí</h2>
						@if ($errors->any())
    					<div class="alert alert-danger">
      				  	<ul>
          				@foreach ($errors->all() as $error)
                		<li>{{ $error }}</li>
            			@endforeach
        				</ul>
    				</div>
    				@endif
    				@php
    				if(Session::has('message'))
    				{
      					echo Session::get('message');
    				}
    				@endphp
						<form action="{{route('dangkikh')}}" method="post">
						{{csrf_field()}}
						<input type="email" name="kh_email" placeholder="Email" >
						<input type="text" name="ten_kh" placeholder="Tên" >
            			<input type="number" name="sdt_kh" placeholder="Số điện thoại" >
            			<input type="text" name="diachi_kh" placeholder="Địa chỉ" >
						<input type="password"  name="mat_khau_kh" placeholder="Mật khẩu">
            			<input type="password" name="nhaplaimatkhau_kh" placeholder="Nhập lại mật khẩu" >
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	@endsection