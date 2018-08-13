@extends('frontend.master')
@section('title', 'Trang chủ')
@section('main')
<div id="main" class="col-md-9">
	<!-- main -->
	<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
	<div id="slider">
		<div id="demo" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
				<li data-target="#demo" data-slide-to="4"></li>
				<li data-target="#demo" data-slide-to="5"></li>
			</ul>

			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/home/vantich.jpg" alt="Los Angeles" >
				</div>
				<div class="carousel-item">
					<img src="img/home/locdinhky.jpg" alt="Los Angeles" >
				</div>
				<div class="carousel-item">
					<img src="img/home/thienlongbatbo.jpg" alt="Chicago">
				</div>
				<div class="carousel-item">
					<img src="img/home/anhhungxadieu.jpg" alt="New York" >
				</div>
				<div class="carousel-item">
					<img src="img/home/phudao.jpg" alt="New York" >
				</div>
				<div class="carousel-item">
					<img src="img/home/dongphuongbatbai.jpg" alt="New York" >
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>

	<div id="wrap-inner">
		<div class="products">
			<div class="danhmuc">
				<div class="row">
					<div class="muc col-lg-6 col-md-6 col-xs-12 col-sm-12">
						<h3 class="muc-list"><i class="fas fa-list-ul"></i></h3>
						<h3 class="muc-list">phim truyện</h3>
					</div> 
					<div style="clear: both;"></div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
						 <span class="tru"><i class="fas fa-minus"></i></span>
					</div>
				</div>
			</div>
			
			<div class="product-list row" rel="noidung">
				@foreach($movies as $movie)
					<div class="product-item col-md-3 col-sm-6 col-xs-12">
						<a href="#"><img src="{{asset('storage/avatar/'.$movie->movie_logo)}}" class="img-thumbnail"></a>
						<p class="price">{{$movie->movie_name}}</p>
						<div class="vietsub"><span>HD - Vietsub - Thuyết minh</span></div>	  
						<div class="marsk">
							<a title="xem phim" href="{{asset('movieSelect/'.$movie->movie_id)}}"><i style="font-size: 50px;" class="fas fa-play-circle"></i></a>
						</div>                                    
					</div>
				@endforeach
			</div>                	                	
		</div>
		<div class="products">
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
						<a href="#"><img src="{{asset('storage/avatar/'.$music->music_logo)}}" class="img-thumbnail"></a>
						<p class="price" style="color: black;"><i style="font-size: 20px; margin-right: 5px;" class="fas fa-headphones-alt"></i>{{$music->music_name}}</p>
						<div class="vietsub" style="background: green;"><span>MP3</span></div>	
						<div class="marsk">
							<a class="img" title="nghe nhạc" href="{{asset('musicDetails/'.$music->music_id.'/'.$music->music_slug.'.html')}}"><img src="img/home/iconmp3.png"></a>
						</div>                                    
					</div>
				@endforeach
			</div>                	                	
		</div>
		<div class="products">
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
						<a href="#"><img src="{{asset('storage/avatar/'.$image->image_img)}}" class="img-thumbnail"></a>
						<p style="color: #006400;" class="price"><i style="font-size: 17px;" class="fab fa-angular"></i> {{$image->image_name}}</p>
						<div class="vietsub" style="background: #483D8B;"><span><i class="fas fa-image"></i> HD</span></div>	  
						<div class="marsk">
							<a title="phóng to" href="{{asset('imageDetails/'.$image->image_id.'/'.$image->image_slug.'.html')}}"><i style="font-size: 50px;" class="fas fa-search-plus"></i></a>
						</div>                                    
					</div>
				@endforeach
			</div>                	                	
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
						<img title="Hình ảnh" src="{{asset('storage/avatar/'.$news->news_logo)}}" />
						<h4><a href="{{asset('newsDetails/'.$news->news_id.'/'.$news->news_slug.'.html')}}"><i class="fab fa-magento"></i> {{$news->news_name}}</a></h4>
						<p><i class="fas fa-x-ray"></i> {!!str_limit($news->news_content, 150, '...')!!}
						</p>
					</div>
				@endforeach
			</div>                	                	
		</div>

		
	</div>
	
	<!-- end main -->
</div>
@stop
