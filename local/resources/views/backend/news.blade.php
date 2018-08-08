@extends('backend.master')
@section('title', 'Danh sách tin tức')
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
				<h1 class="page-header">Quản lý danh sách tin tức</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" style="overflow: auto;">
					<div class="panel-heading">Danh sách tin tức</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/news/add')}}" class="btn btn-primary">Thêm tin tức</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên tin tức</th>
											<th>Ảnh logo</th>
											<th>Trạng thái</th>
											<th>Nội dung</th>
											<th>Hạng mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($newss as $news)
										<tr>
											<td>{{$news->news_id}}</td>
											<td>{{$news->news_name}}</td>
											<td>
												<img width="150px" height="150px" style="border-radius: 200px;" src="{{asset('local/storage/app/avatar/'.$news->news_logo)}}" class="thumbnail">
											</td>
											<td>
												<?php
													if($news->news_status==1){
														 echo 'Tin Mới';
														}
													if($news->news_status==0){
														echo 'Tin Cũ';
													}
												?>
											</td>
											<td>{!!str_limit($news->news_content, 100, '...')!!}</td>
											<td>{{$news->cate_name}}</td>
											<td>
												<a href="{{asset('admin/news/edit/'.$news->news_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn chắc chắn muốn xóa chứ!!!')" href="{{asset('admin/news/delete/'.$news->news_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
						{{$newss->links()}}
					</span>
				</div>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop