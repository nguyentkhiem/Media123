@extends('frontend.master')
@section('title', 'Nghe nhạc')
@section('main')
<div id="main" class="col-md-9 col-sm-12 col-xs-12">
	<div class="detailsNews col-md-12 col-sm-12 col-xs-12">
		<h2><i class="fas fa-news"></i> {{$news->news_name}}</h2>
		<div id="content">{!!$news->news_content!!}</div>
		<div id="thongtin">
			<div id="luotxem">
				<p>500.000 lượt đọc</p>
			</div>
			<div id="khac">
				<p class="item"><a href="#"><i class="fas fa-thumbs-up"> 10N</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-thumbs-down"> 40</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-share"></i> CHIA SẺ</a></p>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div id="nguoidang">
			<img src="img/home/14.jpg">
			<h4>Nguyễn Thành Khiêm</h4>
			<p id="xuatban">Xuất bản 6 thg 8, 2018</p>
			{{-- <p id="info">{!!$news->news_content!!}</p> --}}
		</div>
	</div>
</div>

@stop