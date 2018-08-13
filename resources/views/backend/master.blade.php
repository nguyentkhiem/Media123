<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="{{asset('layout/backend')}}/">
<title>@yield('title') | Media Port</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/stylescheckbox.css" rel="stylesheet">
<script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" style="line-height: 30px;" href="{{asset('admin/home')}}">MediaPort Admin</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img style="margin-top: -5px; margin-right:10px; width: 40px; height: 40px; border-radius: 40px;" src="{{asset('storage/avatar/'.Auth::user()->user_img)}}"> {{Auth::user()->user_name}}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{asset('admin/manager/editAdmin/'.Auth::user()->user_id)}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Cập nhật thông tin</a></li>
              <li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
              
    </div><!-- /.container-fluid -->
  </nav>
    
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
      <li role="presentation" class="divider"></li>
      <li class="active"><a href="{{asset('admin/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>

      <li><a href="{{asset('admin/manager')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Quản trị viên</a></li>

      <li><a href="{{asset('admin/user')}}"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Người dùng</a></li>

       <li><a href="{{asset('admin/category')}}"><svg class="glyph stroked key"><use xlink:href="#stroked-key"></use></svg> Danh Mục</a></li>
      
      <li><a href="{{asset('admin/movie')}}"><svg class="glyph stroked film"><use xlink:href="#stroked-film"></use></svg> Phim Truyện</a></li>
     
      <li><a href="{{asset('admin/music')}}"><svg class="glyph stroked music"><use xlink:href="#stroked-music"></use></svg> Âm Nhạc</a></li>
     
      <li><a href="{{asset('admin/news')}}"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"></use></svg> Tin Tức</a></li>
     
      <li><a href="{{asset('admin/image')}}"><svg class="glyph stroked camera"><use xlink:href="#stroked-camera"></use></svg> Hình Ảnh</a></li>

      <li><a href="{{asset('admin/banner')}}"><svg class="glyph stroked hourglass"><use xlink:href="#stroked-hourglass"></use></svg> Quảng Cáo</a></li>
      <li><a href="{{asset('/')}}"><svg class="glyph stroked eye"><use xlink:href="#stroked-eye"></use></svg> Trang người dùng</a></li>
    
    </ul>
    
  </div><!--/.sidebar-->

  @yield('main')

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/chart.min.js"></script>
  <script src="js/chart-data.js"></script>
  <script src="js/easypiechart.js"></script>
  <script src="js/easypiechart-data.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  {{-- Click ảnh để lựa chọn --}}
  <script type="text/javascript">
            function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
            }
            $(document).ready(function() {
                $('#avatar').click(function(){
                    $('#img').click();
                });
            });
  </script>

  <script>
    $('#calendar').datepicker({
    });

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
  </script>

  <script type="text/javascript">
          $(function(){
            $('[rel="allcheck"]').click(function(){
              if ($(this).is(':checked')) {
                $('[rel="check"]').prop( "checked", true );
              } else {
                $('[rel="check"]').prop( "checked", false );
              }
            });

            // hủy 1 cái thành phần là hủy luôn chọn tất cả //
            $('[rel="check"]').click(function(){
              if ($('[rel="check"]:checked').length === $('[rel="check"]').length) {
                $('[rel="allcheck"]').prop( "checked", true );
              } else {
                $('[rel="allcheck"]').prop( "checked", false );
              }
            });

            /////////////////////////// 

             $('[rel="multidel"]').click(function(e){
              e.preventDefault();
              var check = $('[rel="check"]:checked');
               if (confirm('Bạn chắc chắn muốn xóa chứ!!!') == true) {
                if (check.length) {
                  check.each(function(key, val){
                    var link = $(val).parent().parent().prev().find('[rel="delete"]');
                    $.ajax({
                    url: link.attr('href')
                      }).done(function(data){
                        link.parentsUntil('tbody').remove();
                        
                      });
                  });
                }
              }
              alert('Xóa thành công !');
            });
            
            /////////// Xóa từng user
            $('[rel="delete"]').click(function(e){
              e.preventDefault();
              var delete2 = $(this);
              if (confirm('Bạn chắc chắn muốn xóa chứ!!!') == true) {
                  $.ajax({
                  url: delete2.attr('href')
                }).done(function(data){
                  delete2.parentsUntil('tbody').remove();
                   alert('Xóa thành công !');
                });
              }
              
            });
             
            })
  </script>
</body>

</html>
