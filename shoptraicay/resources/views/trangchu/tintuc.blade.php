@extends('layoutlogin')
@section('content1')
<div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Tin tức mới</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->  
                        <div class="panel panel-default">	
						@foreach ($tintuc as $tintuc1)
                            <div class="panel-heading" >
							 <h3 class="panel-title"><a href="#">{{$tintuc1->tieu_de}}</a></h3>
							 <br>
                            </div>
							@endforeach
                        </div>
                    </div>
					
                </div>
            </div>
            <div class="col-sm-9 padding-right">
				
			<h2 class="title text-center">Tin tức</h2>
						@foreach ($tintuc as $tintuc1)
						<div class="col-sm-6">
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
								<img src="{{('public/uploads/tintuc/'.$tintuc1->hinh_anh_tin_tuc)}}" alt="">
							</a>
							<h3>{{$tintuc1->tieu_de}}</h3>
						
							<p>Không chỉ là một loại hoa quả
							thông thường mà ổi còn có thể được xem là một loại thuốc để chừa bệnh, một
							nguồn cung cấp chất dinh dưỡng cho cơ thể người. Nhiều bộ phận trên cây ổi đều
							có thể dùng để làm nguyên liệu ngăn ngừa và chữa bệnh: lá, quả chín, quả non,
							hạt,...</p>
							<a  class="btn btn-primary" href="{{URL::to('/chitiettintuc/'.$tintuc1->ma_tin_tuc)}}">Read More</a>
						</div>
						</div>
						@endforeach
						<div class="pagination-area " >
							<ul class="pagination">
								<li><a href="" class="active">1</a></li>
								<li><a href="">2</a></li>	
								<li><a href="">3</a></li>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
            </div>
        </div>
</div>

<div class="container">

@endsection
					