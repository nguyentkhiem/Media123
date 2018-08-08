@extends('frontend.master')
@section('title', 'Danh sách phim truyện')
@section('main')
<div id="main" class="col-md-9">
	<div id="wrap-inner">
		<div class="products">
			<div id="search">
				<h3 style="padding: 0px; margin: 0px 0px -10px; color:#800000; font-weight: bold;">Tìm kiếm nhạc</h3>
				<form class="search-bar" role="search" method="get" name="sform" action="{{asset('listMusic/')}}">
					<input style="border: 1px solid black; color: black; margin-left: 0px;" onfocus="searchFocus();" onblur="searchBlur();" type="text" name="result" value="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
				</form>
			</div>
			<div style="background:	#008000;" class="danhmuc">
				<div class="row">
					<div class="muc col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<h3 class="muc-list"><i class="fas fa-music"></i></h3>
						<h3 class="muc-list">Chuyên mục nhạc</h3>
					</div> 
					<div style="clear: both;"></div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						 <span class="tru"><i class="fas fa-minus"></i></span>
					</div>
				</div>
			</div>
			
			<div class="product-list row" rel="noidung">
				@foreach($musics as $music)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="#"><img src="{{asset('local/storage/app/avatar/'.$music->music_logo)}}" class="img-thumbnail"></a>
						<p class="price" style="color: black;"><i style="font-size: 20px; margin-right: 5px;" class="fas fa-headphones-alt"></i>{{$music->music_name}}</p>
						<div class="vietsub" style="background: green;"><span>MP3</span></div>	
						<div class="marsk">
							<a class="img" title="nghe nhạc" href="{{asset('musicDetails/'.$music->music_id.'/'.$music->music_slug.'.html')}}"><img src="img/home/iconmp3.png"></a>
						</div>                                    
					</div>
				@endforeach
			</div>                	                	
		</div>       	                	
		</div>
	</div>
</div>
@stop