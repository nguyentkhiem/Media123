@extends('frontend.master')
@section('title', 'Xem phim')
@section('main')
<div id="main" class="col-md-9 col-sm-12 col-xs-12">
	<div id="video">
		<iframe poster="{{asset('local/storage/app/avatar/'.$movie->movie_video)}}" src="https://www.youtube.com/embed/{{$movie->movie_video}}" allow="autoplay" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>
	<div class="detailsMovie col-md-12 col-sm-12 col-xs-12">
		<h2><i class="fas fa-film"></i> {{$movie->movie_name}}</h2>
		<div id="thongtin">
			<div id="luotxem">
				<p>500.000 lượt xem</p>
			</div>
			<div id="khac">
				<p class="item"><a href="#"><i class="fas fa-thumbs-up"> 10N</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-thumbs-down"> 40</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-share"></i> CHIA SẺ</a></p>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div id="nguoidang">
			<img src="img/home/12.jpg">
			<h4>Nguyễn Thành Khiêm</h4>
			<p id="xuatban">Xuất bản 6 thg 8, 2018</p>
			<p id="info">{!!$movie->movie_info!!}</p>
		</div>
	</div>
</div>

@stop