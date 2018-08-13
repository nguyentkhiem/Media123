@extends('frontend.master')
@section('title', 'Thông tin phim')
@section('main')
<div id="main" class="col-md-9 col-sm-12 col-xs-12">
	<div id="trai" class="col-md-6 col-sm-12 col-xs-12">
		<img id="img" src="{{asset('storage/avatar/'.$movie->movie_logo)}}">
		<a class="btn btn-primary" href="#" role="button">Tải phim</a>
		<a class="btn btn-success" href="#" role="button">Xem phim</a>

	</div>

	<div id="phai" class="col-md-6 col-sm-12 col-xs-12">
		
	</div>

	<div id="noidung" class="col-md-12 col-sm-12 col-xs-12">
		
	</div>
</div>

@stop