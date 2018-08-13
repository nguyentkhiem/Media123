@extends('backend.master')
@section('title', 'Danh sách nhạc')
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
				<h1 class="page-header">Quản lý danh sách nhạc</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" style="overflow: auto;">
					<div class="panel-heading">Danh sách nhạc</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/music/add')}}" class="btn btn-primary">Thêm nhạc</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên bản nhạc</th>
											<th>Ảnh logo</th>
											<th>Trạng thái</th>
											<th>Music</th>
											<th>Thông tin tri tiết</th>
											<th>Hạng mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($musics as $music)
										<tr>
											<td>{{$music->music_id}}</td>
											<td>{{$music->music_name}}</td>
											<td>
												<img width="150px" height="150px" style="border-radius: 200px;" src="{{asset('storage/avatar/'.$music->music_logo)}}" class="thumbnail">
											</td>
											<td>
												<?php
													if($music->music_status==0){
														 echo 'Chưa phát hành';
														}
													if($music->music_status==1){
														echo 'Đã phát hành';
													}
												?>
											</td>
											<td>
												<iframe src="{{$music->music_mp3}}" width="300" height="200" frameborder="0" {{-- allowfullscreen --}} {{-- allow="autoplay" --}}></iframe>
											</td>
											<td>{!!str_limit($music->music_info, 40, '...')!!}</td>
											<td>{{$music->cate_name}}</td>
											<td>
												<a href="{{asset('admin/music/edit/'.$music->music_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn chắc chắn muốn xóa chứ!!!')" href="{{asset('admin/music/delete/'.$music->music_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
						{{$musics->links()}}
					</span>
				</div>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop