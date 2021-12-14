@extends('layouthome')
@section('content')
<div class="blog-post-area">
						<h2 class="title text-center">Tin tức</h2>
						<div class="single-blog-post">
					
							<!-- <div class="post-meta">
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div> -->
							<h3>Công dụng đáng kinh ngạc từ trái ổi.</h3>
						
							<p>Không chỉ là một loại hoa quả
							thông thường mà ổi còn có thể được xem là một loại thuốc để chừa bệnh, một
							nguồn cung cấp chất dinh dưỡng cho cơ thể người. Nhiều bộ phận trên cây ổi đều
							có thể dùng để làm nguyên liệu ngăn ngừa và chữa bệnh: lá, quả chín, quả non,
							hạt,...</p>
							<a  class="btn btn-primary" href="{{URL::to('/chitiettintuc')}}">Read More</a>
						</div>
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
                    @endsection
					