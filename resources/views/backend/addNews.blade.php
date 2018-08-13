@extends('backend.master')
@section('title', 'Thêm tin tức')
@section('main')
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm tin tức</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm tin tức</div>
					<div class="panel-body">
						{{-- @include('errors.note') --}}
						<form method="post" enctype="multipart/form-data" role="form">
							<div class="row" style="margin-bottom:40px">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Tên tin tức</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh bìa</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1">Tin Mới</option>
											<option value="0">Tin Cũ</option>
					                    </select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Thông tin chi tiết</label>
										<textarea class="ckeditor" required name="details"></textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('details',{
												language:'vi',
												filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach($cates as $cate)
												<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
											@endforeach
					                    </select>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/newx/add')}}" class="btn btn-danger">Hủy bỏ</a>
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