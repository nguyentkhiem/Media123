@extends('frontend.master')
@section('title', 'Nghe nhạc')
@section('main')
<div id="main" class="col-md-9 col-sm-12 col-xs-12">
	<div id="music">
		<iframe poster="{{asset('local/storage/app/avatar/'.$music->music_mp3)}}" src="{{$music->music_mp3}}" autoplay frameborder="0" allowfullscreen="allowfullscreen"></iframe>
	</div>
	<div class="detailsMusic col-md-12 col-sm-12 col-xs-12">
		<h2><i class="fas fa-music"></i> {{$music->music_name}}</h2>
		<div id="thongtin">
			<div id="luotxem">
				<p>100.000 lượt nghe</p>
			</div>
			<div id="khac">
				<p class="item"><a href="#"><i class="fas fa-thumbs-up"> 20N</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-thumbs-down"> 400</i></a></p>
				<p class="item"><a href="#"><i class="fas fa-share"></i> CHIA SẺ</a></p>
			</div>
		</div>
		<div style="clear: both;"></div>
		<div id="nguoidang">
			<img src="img/home/12.jpg">
			<h4>Nguyễn Thành Khiêm</h4>
			<p id="xuatban">Xuất bản 6 thg 8, 2018</p>
			<p id="info">{!!$music->music_info!!}</p>
		</div>
	</div>
</div>

@stop