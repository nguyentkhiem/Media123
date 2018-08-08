@extends('frontend.master')
@section('title', 'Xem ảnh')
@section('main')
<div id="main" class="col-md-9 col-sm-12 col-xs-12">
	<div id="image">
		<img src="{{asset('local/storage/app/avatar/'.$image->image_img)}}">
	</div>
	<div class="detailsImage col-md-12 col-sm-12 col-xs-12">
		<h2><i class="fas fa-music"></i> {{$image->image_name}}</h2>
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
			<p id="info">{!!$image->image_info!!}</p>
		</div>
	</div>
</div>

@stop