@extends('backend.master')
@section('title', 'Danh sách quảng cáo')
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
				<h1 class="page-header">Quản lý danh sách quảng cáo</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" style="overflow: auto;">
					<div class="panel-heading">Danh sách quảng cáo</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/banner/add')}}" class="btn btn-primary">Thêm quảng cáo</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên đối tác</th>
											<th>Địa chỉ đối tác</th>
											<th>Giá / tháng</th>
											<th>Ảnh quảng cáo</th>
											<th>Trạng thái</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($banners as $banner)
										<tr>
											<td>{{$banner->banner_id}}</td>
											<td>{{$banner->banner_name}}</td>
											<td>{{$banner->banner_link}}</td>
											<td>{{number_format($banner->banner_price,0,',','.')}} vnđ</td>
											<td>
												<img width="150px" height="150px" style="border-radius: 200px;" src="{{asset('local/storage/app/avatar/'.$banner->banner_logo)}}" class="thumbnail">
											</td>
											<td>
												<?php
													if($banner->banner_status==1){
														 echo 'Hiển quảng cáo';
														}
													if($banner->banner_status==0){
														echo 'Ẩn quảng cáo';
													}
												?>
											</td>
											<td>
												<a href="{{asset('admin/banner/edit/'.$banner->banner_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn chắc chắn muốn xóa chứ!!!')" href="{{asset('admin/banner/delete/'.$banner->banner_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
						{{$banners->links()}}
					</span>
				</div>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop