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
				{{-- <p class="item"><a href="#"><i class="fas fa-thumbs-up"> 10N</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-thumbs-down"> 40</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-share"></i> CHIA SẺ</a></p> --}}
				<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div style="border-bottom: 1px solid gray; margin-bottom: 20px;" id="nguoidang">
			<img src="img/home/12.jpg">
			<h4>Nguyễn Thành Khiêm</h4>
			<p id="xuatban">Xuất bản 6 thg 8, 2018</p>
			<p id="info">{!!$movie->movie_info!!}</p>
		</div>
		<div><h4 style="color: black; font-weight: bold;">Bình luận facebook</h4></div>
		<div class="fb-comments" data-href="https://developers.facebook.com" data-numposts="1"></div>
	</div>
</div>

@stop