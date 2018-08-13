<!DOCTYPE html>
<html>
<head>
<base href="{{asset('layout/frontend')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
{{-- <link href="css/datepicker3.css" rel="stylesheet"> --}}
{{-- <link href="css/styles.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<style type="text/css">
	#main{
		border:1px solid gray;
		padding: 10px;
		margin-top: 30px;
		background: #E6E6FA;
	}
	.panel-heading{
		text-align: center;
		margin:10px 0px 30px 0px;
		font-weight: bold;
		font-size: 30px;

	}
	.label{
		font-weight: bold;
	}
	#face a{
		width: 45px;
		height: 45px;
		border-radius: 45px;
	}
	#face a i{
		color: white;
		font-size: 20px;
		text-align: center;
		padding-top:5px;
	}
	#face #facebook{
		background: #0000FF;
	}
	#face #google{
		background: #FF0000;
	}
	#dangky input{
		width: 100px;
	}
</style>
<script type="text/javascript">
	
</script>

</head>

<body>
	<div class="container">
	<div class="row">
		<div id="main" class="offset-md-4 col-md-4 ">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng nhập</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
							@include('errors.error')
							@include('flash::message')
							<div class="form-group">
								<label class="label">Tên đăng nhập</label>
								<input class="form-control" placeholder="E-mail" name="email" type="email" value="{{old('user_mail')}}" autofocus="">
							</div>
							<div class="form-group">
								<label class="label">Mật khẩu</label>
								<input class="form-control" placeholder="Password" name="password" type="password">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<div id="face" class="form-group">
								<a id="facebook" href="{{url('redirect/facebook')}}" class="btn btn-default"><i class="fab fa-facebook-f"></i></a>
								<a id="google" href="#" class="btn btn-default"><i class="fab fa-google"></i></a>
							</div>
							<input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
							<a id="dangky" href="{{asset('register')}}"><input value="Đăng ký" class="btn btn-success"></a>
						</fieldset>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	</div>
	
</body>

</html>
