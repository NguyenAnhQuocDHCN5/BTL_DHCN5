@extends('layoutlogin')
@section('content1')
<div class="jumbotron text-center" style="padding-top:119px;padding-bottom:134px; margin-bottom:0px">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>xxxx</strong> Chúng tôi sẽ liên hệ tới bạn trong thời gian sớm nhất</p>
  <hr>
  <p>
    Tiếp tục mua hàng
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{URL::to('/trang-chu')}}" role="button" style="font-size:18px;">Trang chủ</a>
  </p>
</div>
@endsection