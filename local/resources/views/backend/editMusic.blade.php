@extends('backend.master')
@section('title', 'Sửa nhạc')
@section('main')
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sửa âm nhạc</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Sửa âm nhạc</div>
					<div class="panel-body">
						{{-- @include('errors.note') --}}
						<form method="post" enctype="multipart/form-data" role="form">
							<div class="row" style="margin-bottom:40px">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 justify-content-center">
									<iframe class="justify-content-center" src="{{$music->music_mp3}}" width="620" height="350" frameborder="0" {{-- allowfullscreen --}} {{-- allow="autoplay" --}}></iframe>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Tên bản nhạc</label>
										<input required type="text" name="name" class="form-control" value="{{$music->music_name}}">
									</div>
									<div class="form-group" >
										<label>Logo Music</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('local/storage/app/avatar/'.$music->music_logo)}}">
									</div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1" @if($music->music_status==1) selected @endif>Đang phát hành</option>
											<option value="0" @if($music->music_status==0) selected @endif>Chưa phát hành</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>URL music</label>
										<input required type="text" name="url" class="form-control" value="{{$music->music_mp3}}">
									</div>

								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Thông tin chi tiết</label>
										<textarea class="ckeditor" required name="details">{{$music->music_info}}</textarea>
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
								<input type="submit" name="submit" value="Sửa" class="btn btn-primary">
									<a href="{{asset('admin/music/edit/'.$music->movie_id)}}" class="btn btn-danger">Hủy bỏ</a>
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