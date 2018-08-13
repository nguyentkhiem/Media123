@extends('backend.master')
@section('title', 'Sửa phim truyện')
@section('main')
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa phim truyện</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa movie</div>
					<div class="panel-body">
						{{-- @include('errors.note') --}}
						<form method="post" enctype="multipart/form-data" role="form">
							<div class="row" style="margin-bottom:40px">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								@foreach($errors->all() as $error)
                                    	<p class="alert alert-danger">{{$error}}</p>
                            		@endforeach
                            	</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Tên movie</label>
										<input required type="text" name="name" class="form-control" value="{{$movie->movie_name}}">
									</div>
									<div class="form-group" >
										<label>Logo Movie</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('storage/avatar/'.$movie->movie_logo)}}">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1" @if($movie->movie_status==1) selected @endif>Đang chiếu</option>
											<option value="0" @if($movie->movie_status==0) selected @endif>Chưa chiếu</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>URL video</label>
										<input required type="text" name="url" class="form-control" value="{{$movie->movie_video}}">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Thông tin chi tiết</label>
										<textarea class="ckeditor" required name="details">{{$movie->movie_info}}</textarea>
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
											@foreach($cate as $cate)
												<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
											@endforeach
					                    </select>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/movie/edit/'.$movie->movie_id)}}" class="btn btn-danger">Hủy bỏ</a>
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