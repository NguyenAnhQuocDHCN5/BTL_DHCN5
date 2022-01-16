@extends('layoutlogin')
@section('content1')
<div class="container" style="margin-top: 54px;margin-bottom: 40px;">
			<div class="row" style="margin-bottom:1em;">
				
				<div class="col-sm-4 col-sm-offset-5">
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