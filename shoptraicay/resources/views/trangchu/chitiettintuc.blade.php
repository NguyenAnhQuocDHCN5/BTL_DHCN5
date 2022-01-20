@extends('layoutlogin')
@section('content1')
<div class ="container">
<div class="blog-post-area" style="margin-bottom:1em;">
						<h2 class="title text-center">Tin tức chi tiết</h2>
						@foreach ($chitiettintuc as $chitiettintuc1)
						<div class="single-blog-post">
							<h3>{{$chitiettintuc1->tieu_de}}</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> {{$chitiettintuc1->nguoi_dang}}</li>
									<li><i class="fa fa-calendar"></i> {{date('d-m-Y', strtotime($chitiettintuc1->ngay_dang_tin_tuc))}}</li>
									
								</ul>
							</div>
							<p>
							{!!($chitiettintuc1->noi_dung_tin_tuc)!!}
							</p>
							<!-- <div class="pager-area">
								<ul class="pager pull-right">
									<li><a href="#">Pre</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div> -->
						</div>
						@endforeach
					</div>
					<!-- {{$chitiettintuc1->noi_dung_tin_tuc}} -->
					<!--/blog-post-area-->
</div>
                    @endsection