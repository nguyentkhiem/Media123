@extends('backend.master')
@section('title', 'Câp nhật thông tin quản trị viên')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thông tin quản trị viên</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-6 col-xs-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Cập nhật thông tin 
						</div>
						<div class="panel-body">
							<form method="post" enctype="multipart/form-data" role="form">
								{{-- @include('errors/note') --}}
								<div class="form-group">
									<label>Name</label> 
	    							<input required type="text" name="name" class="form-control" value="{{$update->user_name}}" >
								</div>
								<div class="form-group">
									<label>Email</label> 
	    							<input required type="text" name="email" class="form-control" value="{{$update->email}}">
								</div>
								<div class="form-group">
									<label>Password</label> 
	    							<input required type="password" name="password" class="form-control" value="{{$update->password}}" >
								</div>
								<div class="form-group" >
										<label>Ảnh đại diện</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('local/storage/app/avatar/'.$update->user_img)}}">
									</div>
								<div class="form-group">
	    							<input type="submit" name="submit" class="form-control btn btn-primary" value="Update">
								</div>
								<div class="form-group">
	    							<a href="{{asset('admin/manager/editAdmin/'.$update->user_id)}}" class="form-control btn btn-danger">Reset</a>
								</div>
								{{-- <div class="form-group">
	    							<a href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="form-control btn btn-danger">Reset</a>
								</div> --}}
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop