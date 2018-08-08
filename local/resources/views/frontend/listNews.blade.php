@extends('frontend.master')
@section('title', 'Danh sách tin tức')
@section('main')
<div id="main" class="col-md-9">
	<div id="wrap-inner">
		<div class="products">
			<div id="search">
				<h3 style="padding: 0px; margin: 0px 0px -10px; color:#800000; font-weight: bold;">Tìm kiếm nhạc</h3>
				<form class="search-bar" role="search" method="get" name="sform" action="{{asset('listNews/')}}">
					<input style="border: 1px solid black; color: black; margin-left: 0px;" onfocus="searchFocus();" onblur="searchBlur();" type="text" name="result" value="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</form>
			</div>
			<div class="products">
			<div style="background: #808000;" class="danhmuc">
				<div class="row">
					<div class="muc col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<h3 class="muc-list"><i class="fab fa-neos"></i></h3>
						<h3 class="muc-list">tin tức</h3>
					</div> 
					<div style="clear: both;"></div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						 <span class="tru"><i class="fas fa-minus"></i></span>
					</div>
				</div>
			</div>
			
			<div class="product-list row" rel="noidung">
				@foreach($newss as $news)
					<div class=" news col-md-6 col-sm-12 col-xs-12">
						<img title="Hình ảnh" src="{{asset('local/storage/app/avatar/'.$news->news_logo)}}" />
						<h4><a href="{{asset('newsDetails/'.$news->news_id.'/'.$news->news_slug.'.html')}}"><i class="fab fa-magento"></i> {{$news->news_name}}</a></h4>
						<p><i class="fas fa-x-ray"></i> {!!str_limit($news->news_content, 150, '...')!!}
						</p>
					</div>
				@endforeach
			</div>                	                	
		</div>

		</div>       	                	
		</div>
	</div>
</div>
@stop