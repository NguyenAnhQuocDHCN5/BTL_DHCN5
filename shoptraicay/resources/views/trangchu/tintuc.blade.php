@extends('layoutlogin')
@section('content1')
<div class="container">
<div class="blog-post-area">
						<h2 class="title text-center">Tin tức</h2>
						@foreach ($tintuc as $tintuc1)
						<div class="single-blog-post " style="margin-bottom:1em;">
							<!-- <div class="post-meta">
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div> -->

							<a href="">
								<img src="{{('public/frontend/images/'.$tintuc1->hinh_anh_tin_tuc)}}"  style="height: 400px;" alt="">
							</a>
							<h3>{{$tintuc1->tieu_de}}</h3>
						
							<p>Không chỉ là một loại hoa quả
							thông thường mà ổi còn có thể được xem là một loại thuốc để chừa bệnh, một
							nguồn cung cấp chất dinh dưỡng cho cơ thể người. Nhiều bộ phận trên cây ổi đều
							có thể dùng để làm nguyên liệu ngăn ngừa và chữa bệnh: lá, quả chín, quả non,
							hạt,...</p>
							<a  class="btn btn-primary" href="{{URL::to('/chitiettintuc/'.$tintuc1->ma_tin_tuc)}}">Read More</a>
						</div>
						@endforeach
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
</div>
@endsection
					