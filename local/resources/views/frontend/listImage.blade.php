@extends('frontend.master')
@section('title', 'Danh sách hình ảnh')
@section('main')
<div id="main" class="col-md-9">
	<div id="wrap-inner">
		<div class="products">
			<div id="search">
				<h3 style="padding: 0px; margin: 0px 0px -10px; color:#800000; font-weight: bold;">Tìm kiếm hình ảnh</h3>
				<form class="search-bar" role="search" method="get" name="sform" action="{{asset('listImage/')}}">
					<input style="border: 1px solid black; color: black; margin-left: 0px;" onfocus="searchFocus();" onblur="searchBlur();" type="text" name="result" value="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</form>
			</div>
			<div style="background: #008B8B;" class="danhmuc">
				<div class="row">
					<div class="muc col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<h3 class="muc-list"><i class="fas fa-images"></i></h3>
						<h3 class="muc-list">Hình ảnh</h3>
					</div> 
					<div style="clear: both;"></div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						 <span class="tru"><i class="fas fa-minus"></i></span>
					</div>
				</div>
			</div>
			
			<div class="product-list row" rel="noidung">
				@foreach($images as $image)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="#"><img src="{{asset('local/storage/app/avatar/'.$image->image_img)}}" class="img-thumbnail"></a>
						<p style="color: #006400;" class="price"><i style="font-size: 17px;" class="fab fa-angular"></i> {{$image->image_name}}</p>
						<div class="vietsub" style="background: #483D8B;"><span><i class="fas fa-image"></i> HD</span></div>	  
						<div class="marsk">
							<a title="phóng to" href="{{asset('imageDetails/'.$image->image_id.'/'.$image->image_slug.'.html')}}"><i style="font-size: 50px;" class="fas fa-search-plus"></i></a>
						</div>                                    
					</div>
				@endforeach
			</div>                	                	
		</div>       	                	
		</div>
	</div>
</div>
@stop