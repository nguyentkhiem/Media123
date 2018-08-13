@extends('frontend.master')
@section('title', 'Danh sách phim truyện')
@section('main')
<div id="main" class="col-md-9">
	<div id="wrap-inner">
		<div class="products">
			<div id="search">
				<h3 style="padding: 0px; margin: 0px 0px -10px; color:#800000; font-weight: bold;">Tìm kiếm phim truyện</h3>
				<form class="search-bar" role="search" method="get" name="sform" action="{{asset('listMovie/')}}">
					<input style="border: 1px solid black; color: black; margin-left: 0px;" onfocus="searchFocus();" onblur="searchBlur();" type="text" name="result" value="Nhập từ khóa ...">
					<input type="submit" name="submit" value="Tìm Kiếm">
					{{csrf_field()}}
				</form>
			</div>
			<div class="danhmuc">
				<div class="row">
					<div class="muc col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<h3 class="muc-list"><i class="fas fa-list-ul"></i></h3>
						<h3 class="muc-list">Danh sách phim truyện</h3>
					</div> 
					<div style="clear: both;"></div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						 <span class="tru"><i class="fas fa-minus"></i></span>
					</div>
				</div>
			</div>
			@include('flash::message')
			
			<div class="product-list row" rel="noidung">
				@foreach($movies as $movie)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="#"><img src="{{asset('storage/avatar/'.$movie->movie_logo)}}" class="img-thumbnail"></a>
						<p class="price">{{$movie->movie_name}}</p>
						<div class="vietsub"><span>HD - Vietsub - Thuyết minh</span></div>	  
						<div class="marsk">
							<a title="xem phim" href="{{asset('movieDetails/'.$movie->movie_id.'/'.$movie->movie_slug.'.html')}}"><i style="font-size: 50px;" class="fas fa-play-circle"></i></a>
						</div>                                    
					</div>
				@endforeach
			</div>                	                	
		</div>
	</div>
</div>
@stop