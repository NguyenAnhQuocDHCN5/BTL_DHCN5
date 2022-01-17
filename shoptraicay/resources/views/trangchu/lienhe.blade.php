@extends('layoutlogin')
@section('content1')
<div id="contact-page" class="container" style="margin-top: 36px; margin-bottom	: 14px;">
    	<div class="bg">
	    	<!-- <div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>    	 -->
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Liên hệ</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" action="{{URL::to('/guilienhe')}}" method="post">
						{{ csrf_field() }}	
				            <div class="form-group col-md-6">
				                <input type="text" name="ten_lienhe" class="form-control" required="required" placeholder="Tên">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email_lienhe" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="tieude_lienhe" class="form-control" required="required" placeholder="Tiêu đề">
				            </div>
							<div class="form-group col-md-6">
				                <input type="number" name="sdt_lienhe" class="form-control" required="required" placeholder="Số điện thoại">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="noidung_lienhe" id="message" required="required" class="form-control" rows="8" placeholder="Nội dung"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Thông tin liên hệ</h2>
	    				<address>
	    					<p>SHOP TRÁI CÂY</p>
							<p>Địa chỉ: 1 Phạm Ngọc Thạch</p>
							<p>Nha Trang</p>
							<p>Số điện thoại: 0965540620</p>
							<p>Email: shoptraicay@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    @endsection