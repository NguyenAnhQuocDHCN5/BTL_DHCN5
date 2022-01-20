@extends('layoutlogin')
@section('content1')
<div class="container" style="margin-bottom:1em;">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Tin tức mới</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->  
                	<div class="panel panel-default">	
					@foreach ($tieudetintuc as $tintuc2)
                    	<div class="panel-heading" >
						<h3 class="panel-title"><a href="{{URL::to('/chitiettintuc/'.$tintuc2->ma_tin_tuc)}}">{{$tintuc2->tieu_de}}</a></h3>
						<br>
                    	</div>
					@endforeach
					</div>
            	</div>		
        	</div>
    	</div>
        <div class="col-sm-9" >
			<h2 class="title text-center">Tin tức</h2>
			@foreach ($tintuc as $tintuc1)
				<div class="col-sm-5">
					<div class="single-blog-post" style="margin-bottom:1em;">
							<a href="{{URL::to('/chitiettintuc/'.$tintuc1->ma_tin_tuc)}}"> <img src="{{('public/uploads/tintuc/'.$tintuc1->hinh_anh_tin_tuc)}}" alt=""></a>
							<h4 style="margin-top: 15px;">{{$tintuc1->tieu_de}}</h4>
							<a  class="btn btn-primary" href="{{URL::to('/chitiettintuc/'.$tintuc1->ma_tin_tuc)}}">Xem thêm</a>
					</div>
				</div>
				@endforeach
        </div>
    </div>
	<div class="pagination-area" style="margin-left: 700px;">
					<ul class="pagination">
					@for($i = 1; $i<=$tintuc->lastPage(); $i++)
					<li><a href="{{URL::to('/tintuc').'?page='.$i}}" class="{{$i==$tintuc->currentPage()?'active':''}}"> {{$i}}</a> </li>
					@endfor
					</ul>
	</div>
</div>
@endsection
					