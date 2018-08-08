@extends('backend.master')
@section('title', 'Danh sách người dùng')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Quản lý người dùng</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary" style="overflow: auto;">
					<div class="panel-heading">Danh sách người dùng</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/user/add')}}" class="btn btn-primary">Thêm người dùng</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="30%">Tên người dùng</th>
											<th>Địa chỉ mail</th>
											<th width="20%">Ảnh đại diện</th>
											<th>Cấp độ</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($users as $user)
										<tr>
											<td>{{$user->user_id}}</td>
											<td>{{$user->user_name}}</td>
											<td>{{$user->email}}</td>
											<td>
												<img width="200px" height="200px" style="border-radius: 200px;" src="{{asset('local/storage/app/avatar/'.$user->user_img)}}" class="thumbnail">
											</td>
											<td>
												@if($user->user_level == 2)  User 1   @endif

												@if($user->user_level == 3)  User 2   @endif
											</td>
											<td>
												<a href="{{asset('admin/user/edit/'.$user->user_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn chắc chắn muốn xóa chứ!!!')" href="{{asset('admin/user/delete/'.$user->user_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
						{{ $users->links() }}
					</span>
				</div>
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop