@extends('backend.master')
@section('title', 'Sửa quảng cáo')
@section('main')
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa quảng cáo</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa quảng cáo</div>
					<div class="panel-body">
						{{-- @include('errors.note') --}}
						<form method="post" enctype="multipart/form-data" role="form">
							<div class="row" style="margin-bottom:40px">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Tên đối tác</label>
										<input required type="text" name="name" class="form-control" value="{{$banner->banner_name}}">
									</div>
									<div class="form-group" >
										<label>Địa chỉ đối tác</label>
										<input required type="text" name="link" class="form-control" value="{{$banner->banner_link}}">
									</div>
									<div class="form-group" >
										<label>Giá / tháng</label>
										<input required type="text" name="price" class="form-control" value="{{$banner->banner_price}}">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Logo quảng cáo</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('local/storage/app/avatar/'.$banner->banner_logo)}}"">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1" @if($banner->banner_status==1) selected @endif>Hiện quảng cáo</option>
											<option value="0" @if($banner->banner_status==0) selected @endif>Ẩn quảng cáo</option>
					                    </select>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/banner/edit/'.$banner->banner_id)}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop