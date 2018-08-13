@extends('frontend.master')
@section('title', 'Thông tin phim')
@section('main')
<div id="main" class="col-md-9 col-sm-12 col-xs-12">
	<div class="row">
		<div id="trai" class="col-md-5 col-sm-12 col-xs-12">
			<img id="img" src="{{asset('storage/avatar/'.$movie->movie_logo)}}">
			<a class="btn btn-primary click1" target="_blank" href="{{$movie->movie_video}}" role="button"><i class="fas fa-download"></i> Tải phim</a>
			<a class="btn btn-success click2" href="{{asset('movieDetails/'.$movie->movie_id.'/'.$movie->movie_slug.'.html')}}" role="button"><i class="fas fa-play-circle"></i> Xem phim</a>
		</div>
		<div class="clear-both"></div>
		<div id="phai" class="col-md-7 col-sm-12 col-xs-12">
			<h2>{{$movie->movie_name}}</h2>
			<p>Đang phát: <span class="hightlight">HDRip VietSub + Thuyết Minh</span></p>
			<p>Sắp chiêú: <span class="hightlight">HD VietSub + Thuyết Minh</span></p>
			<p>Đạo diễn: <span class="hight">Rawson Marshall Thurber</span></p>
			<p>Diễn viên: <span class="hight">Dwayne Johnson, Roland Muller</span></p>
			<p>Thể loại: <span class="hight"> Phiêu lưu - Hành động, Khoa Học - Viễn Tưởng, Chiếu Rạp</span></p>
			<p>Quốc gia: <span class="hight"> Âu - Mỹ</span></p>
			<p>Thời lượng: <span class="hight"> 60 phút</span></p>
			<p>Lượt xem: <span class="hight"> 6868</span></p>
			<p>Năm sản xuất: <span class="hight"> 2018</span></p>
			<p>Đăng bởi: <span class="hight"> hehe</span></p>
			<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
		</div>

		<div id="noidung" class="col-md-12 col-sm-12 col-xs-12">
			<h2 id="noidungphim">Nội dung phim</h2>
			<p id="details">{!! $movie->movie_info !!}</p>
			<p><img src="{{asset('storage/avatar/'.$movie->movie_logo)}}"></p>
			<h2 id="noidungphim">TRAILER PHIM {{$movie->movie_name}}</h2>
			<iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
		</div>
	</div>
</div>

@stop