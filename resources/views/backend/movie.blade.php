@extends('backend.master')
@section('title', 'Danh sách phim truyện')
@section('main')
<style type="text/css">
	.bg-primary th{
		font-weight: bold;
		text-align: center;
	}
</style>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý danh sách phim truyện</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" style="overflow: auto;">
					<div class="panel-heading">Danh sách phim truyện</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/movie/add')}}" class="btn btn-primary">Thêm phim truyện</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên phim</th>
											<th>Ảnh logo</th>
											<th>Trạng thái</th>
											<th>Movie</th>
											<th>Thông tin tri tiết</th>
											<th>Hạng mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($movies as $movie)
										<tr>
											<td>{{$movie->movie_id}}</td>
											<td>{{$movie->movie_name}}</td>
											<td>
												<img width="150px" height="150px" style="border-radius: 200px;" src="{{asset('storage/avatar/'.$movie->movie_logo)}}" class="thumbnail">
											</td>
											<td>
												<?php
													if($movie->movie_status==0){
														 echo 'Chưa chiếu';
														}
													if($movie->movie_status==1){
														echo 'Đang chiếu';
													}
												?>
											</td>
											<td>
												<iframe poster="{{asset('storage/avatar/'.$movie->movie_logo)}}" width="200" height="200" src="{{$movie->movie_video}}" frameborder="0" allowfullscreen="allowfullscreen">
												</iframe>
											</td>
											<td>{!!str_limit($movie->movie_info, 40, '...')!!}</td>
											<td>{{$movie->cate_name}}</td>
											<td>
												<a href="{{asset('admin/movie/edit/'.$movie->movie_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn chắc chắn muốn xóa chứ!!!')" href="{{asset('admin/movie/delete/'.$movie->movie_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<span style="float: right; margin-right:20px; ">
						{{$movies->links()}}
					</span>
				</div>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop