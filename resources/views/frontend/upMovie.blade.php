@extends('frontend.master')
@section('title', 'Nghe nhạc')
@section('main')
<style type="text/css">
	.sao{
		color:red; 
	}
</style>
<div id="main" class="col-md-9 col-sm-12 col-xs-12">
	@guest
		<p class="alert alert-danger">Bạn cần đăng nhập thì mới có thể đăng tải :)</p>
	@endguest

	@auth
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading" style="text-transform: capitalize; color: black; font-size: 27px;">Thêm phim truyện</div>
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
										<label>Người đăng tải</label>
										<input disabled value="{{Auth::user()->user_name}}" type="text" class="form-control">
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
											@foreach($cates as $cate)
												<option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
											@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Tên movie</label><span class="sao"> *</span>
										<input @if($errors->get('name')) style="border-color: red;" @endif type="text" name="name" class="form-control">
										<span style="color: red;"> @foreach($errors->get('name') as $name) {{$name}} @endforeach </span>
									</div>
									<div class="form-group" >
										<label>Logo Movie</label><span class="sao"> *</span>
										<input @if($errors->get('img')) style="border-color: red;" @endif id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="">
					                    <span style="color: red;"> @foreach($errors->get('name') as $name) {{$name}} @endforeach </span>
									</div>
									<div class="form-group" >
										<label>URL video</label><span class="sao"> *</span>
										<input @if($errors->get('name')) style="border-color: red;" @endif type="text" name="url" class="form-control" value="https://openload.co/f/z2Ohu4BdeAY">
										<span style="color: red;"> @foreach($errors->get('name') as $name) {{$name}} @endforeach </span>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<div class="form-group" >
										<label>Thông tin chi tiết</label><span class="sao"> *</span>
										<textarea class="ckeditor" @if($errors->get('name')) style="border-color: red;" @endif name="details"></textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('details',{
												language:'vi',
												filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
										<span style="color: red;"> @foreach($errors->get('name') as $name) {{$name}} @endforeach </span>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="submit" name="submit" value="Đăng tải" class="btn btn-primary">
									<a href="{{asset('/')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	@endauth
</div>
@stop