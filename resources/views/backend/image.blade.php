@extends('backend.master')
@section('title', 'Danh sách hình ảnh')
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
				<h1 class="page-header">Quản lý danh sách hình ảnh</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" style="overflow: auto;">
					<div class="panel-heading">Danh sách hình ảnh</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/image/add')}}" class="btn btn-primary">Thêm hình ảnh</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên hình ảnh</th>
											<th>Hình ảnh</th>
											<th>Trạng thái</th>
											<th>Thông tin chi tiết</th>
											<th>Hạng mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($images as $image)
										<tr>
											<td>{{$image->image_id}}</td>
											<td>{{$image->image_name}}</td>
											<td>
												<img width="150px" height="150px" style="border-radius: 200px;" src="{{asset('storage/avatar/'.$image->image_img)}}" class="thumbnail">
											</td>
											<td>
												<?php
													if($image->image_status==1){
														 echo 'Hiển thị';
														}
													if($image->image_status==0){
														echo 'Không hiển thị';
													}
												?>
											</td>
											<td>{!!str_limit($image->image_info, 100, '...')!!}</td>
											<td>{{$image->cate_name}}</td>
											<td>
												<a href="{{asset('admin/image/edit/'.$image->image_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn chắc chắn muốn xóa chứ!!!')" href="{{asset('admin/image/delete/'.$image->image_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
						{{$images->links()}}
					</span>
				</div>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop