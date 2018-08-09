<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" >
<base href="{{asset('public/layout/frontend')}}/">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
    #main{
        border:1px solid gray;
        margin-top: 50px;
        background: #E6E6FA;
    }
    #sao{
        color: red;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-sm-12 col-xs-12">
            <div id="main" class="panel panel-default">
                <div class="panel-heading" style="font-weight: bold; text-align: center; color: #8B0000; margin-bottom: 30px; "><h2>Đăng ký thành viên</h2></div>
                <div class="panel-body">
                    <div  class="col-md-12">
                        <form method="post" enctype="multipart/form-data" role="form">
                            @if(Session::has('error'))
                                <p class="alert alert-danger">{{Session::get('error')}}</p>
                            @endif
                            @foreach($errors->all() as $error)
                                    <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                            @include('flash::message')
                           
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label><span id="sao"> *</span>
                                        <input type="text" name="name" class="form-control" placeholder="Fullname"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label><span id="sao"> *</span>
                                        <input type="email" name="email" class="form-control" placeholder="Email"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label><span id="sao"> *</span>
                                        <input type="password" name="password1" class="form-control" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu</label><span id="sao"> *</span>
                                        <input type="password" name="password2" class="form-control" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Ảnh đại diện</label>                  
                                        <input type="file" name="img" src="img/home/12.jpg">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="submit" value="Đăng ký" class="btn btn-success" />
                                    <a style="background: blue; color: white;" class="btn btn-default" href="{{asset('register')}}">Làm mới</a>
                                </div>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>
</body>
</html>
