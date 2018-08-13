@extends('backend.master')
@section('title', 'Danh mục sản phẩm')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
							<form method="post">
							{{-- @include('errors.note') --}}
								<div class="form-group">
									<label>Tên danh mục:</label>
	    							<input required type="text" name="name" class="form-control" placeholder="Tên danh mục...">
								</div>

								<div class="form-group">
	    							<input style="font-weight: bold;" type="submit" name="submit" class="form-control btn btn-primary" value="Add">
								</div>
								{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>ID</th>
					                  <th style="width:60%">Tên danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                  <th style="width:10%;">
					                  	<div id="check" class="btn btn-danger" >
					                  		<span class="container">
						                  		<input type="checkbox" rel="allcheck" name="check" title="Chọn tất">
						                  		<span class="checkmark"></span>
						                  	</span>
						                  	<a id="del" style="color:white; font-weight: bold;" title="Xóa tất cả" rel="multidel" href="#"></span>Del</a>
						                  	
										</div>
					                  </th>
					                </tr>
				              	</thead>
				              	<tbody>
				              	@foreach($category as $cate)
									<tr>
										<td>{{$cate->cate_id}}</td>
										<td style="width:60%">{{$cate->cate_name}}</td>
										<td style="width:30%" style="text-align: center;">
				                    		<a style=" color:white; font-weight: bold;" href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				                    		<a style=" color:white; font-weight: bold;" href="{{asset('admin/category/delete/'.$cate->cate_id)}}" class="btn btn-danger" rel="delete" onclick="return xoa();" ><span class="glyphicon glyphicon-trash"></span> Del</a>
				                  		</td>
				                  		<td style="width:10%">
				                  			<span style="margin: 7px 0px 7px 30px;" class="container">
					                  			<input id="checkbox" type="checkbox" rel="check" name="check">
					                  			<span class="checkmark"></span>
						                  	</span>
				                  		</td>
				                  		
				                  	</tr>
			                  	@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
@stop
