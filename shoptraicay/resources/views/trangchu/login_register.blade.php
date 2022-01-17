@extends('layoutlogin')
@section('content1')
		<div class="container" style="margin-top: 54px;margin-bottom: 194px;">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-5" style="margin-bottom:1em;">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						@php
   						 if(Session::has('message_1'))
   						 {
   						     echo Session::get('message_1');
   						 }
   						 @endphp
							@php
    				if(Session::has('message'))
    				{
      					echo Session::get('message');
    				}
    				@endphp
						<form action="{{route('dangnhapkh')}}" method="post">
						{{csrf_field()}}
						<input type="email" name="email_kh" placeholder="Email">
						<input type="password"  name="mat_khau_kh" placeholder="Mật khẩu" >
							Bạn chưa có tài khoản? 
							<a href="{{URL::to('/dangkikh1')}}">Click here</a>
							<button type="submit" class="btn btn-default ">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	@endsection