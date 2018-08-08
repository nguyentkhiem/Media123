<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<base href="{{asset('public/layout/frontend')}}/">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Media Port - @yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/movie.css">
	<link rel="stylesheet" href="css/music.css">
	<link rel="stylesheet" href="css/image.css">
	<link rel="stylesheet" href="css/news.css">
	
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});


		$(document).ready(function(){
		$(".products .tru").click(function(){
			$(this).parentsUntil('#wrap-inner').find('[rel="noidung"]').slideToggle(800);
			if ($(this).children('i').hasClass('fa-minus')) { 
				$(this).children('i').addClass("fa-plus").removeClass("fa-minus");
			} else {
				$(this).children('i').addClass("fa-minus").removeClass("fa-plus");
			}
			
			
		});

		});
	</script>
	<script>
	    function searchFocus(){
	        if(document.sform.result.value=='Nhập từ khóa ...'){
	            document.sform.result.value='';
	        }
	    }
	    function searchBlur(){
	        if(document.sform.result.value==''){
	            document.sform.result.value='Nhập từ khóa ...';
	        }
	    }
</script>
</head>
</head>
<body>    
	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						{{-- <img width="178px" height="68px" src="img/home/magento.png"> --}}
						{{-- <a id="media" href="#"><h2><i class="fab fa-medium-m"></i>edia <i class="fas fa-american-sign-language-interpreting"></i> <i class="fab fa-paypal"></i>ort</h2></a>						
						<nav><a id="pull" class="btn btn-danger" href="#">
							<i class="fa fa-bars"></i>
						</a></nav>	 --}}	
						<a href="{{asset('/')}}"><img src="img/home/media.png"></a>	
					</h1>
				</div>
				<div id="search" class="col-md-3 col-sm-12 col-xs-12">
					{{-- <form class="search-bar" role="search" method="get" name="sform" action="{{asset('search/')}}">
						<input onfocus="searchFocus();" onblur="searchBlur();" type="text" name="result" value="Nhập từ khóa ...">
						<input type="submit" name="submit" value="Tìm Kiếm">
					</form> --}}
					<img width="200" height="98" src="img/home/magento.png">
				</div>
				<div id="User" class="col-md-4 col-sm-12 col-xs-12">
					@auth<h3><i class="fas fa-hand-peace"> {{Auth::user()->user_name}} </i></h3>@endauth
					
				</div>
				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					@guest
					<a style="padding: 0px; margin: 0px;" href="{{asset('login')}}"><button style="font-size:14px;" type="button" class="btn btn-success">Đăng nhập <i class="fas fa-bell"></i></button></a>
					@endguest
					@auth
					<a style="padding: 0px; margin: 0px;" href="{{asset('logout')}}"><button style="font-size:14px;" type="button" class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Đăng xuất</button></a>
					@endauth

				</div>
			</div>			
		</div>
	</header><!-- /header -->
	<!-- endheader -->

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row" id="content-main">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">danh mục</li>
							<li class="menu-item"><a href="{{asset('listMovie')}}" title="">Phim Truyện</a></li>
							<li class="menu-item"><a href="{{asset('listMusic')}}" title="">Âm Nhạc</a></li>
							<li class="menu-item"><a href="{{asset('listNews')}}" title="">Tin Tức</a></li>
							<li class="menu-item"><a href="{{asset('listImage')}}" title="">Hình Ảnh</a></li>	
							<li class="menu-item"><a href="" title="">Tùy Chọn</a></li>	
						</ul>
						<!-- <a href="#" id="pull">Danh mục</a> -->
					</nav>

					<div id="hottrends">
						<h3>hot trends</h3>
						<ul>
							<li class="menu-item1"><a href="#" title="">Bản tình ca mùa đông</a></li>
							<li class="menu-item1"><a href="#" title="">Phim Vân Tích chuyện</a></li>
							<li class="menu-item1"><a href="#" title="">Hình ảnh thiên nhiên kì thú</a></li>
							<li class="menu-item1"><a href="#" title="">Tin tức bạn không thể bỏ qua</a></li>					
						</ul>
					</div>


					<div id="banner-l" class="text-center">
						<h3>Đối tác</h3>
						@foreach($banners as $banner)
							<div class="banner-l-item">
								<a target="_blank" href="{{$banner->banner_link}}"><img src="{{asset('local/storage/app/avatar/'.$banner->banner_logo)}}" alt="" class="img-thumbnail"></a>
							</div>
						@endforeach
					</div>

					<div id="thongke">
						<h3>Thống kê truy cập</h3>
						<p>Đang có <span>1000 </span>truy cập </p>
					</div>
				</div>



				@yield('main')



			</div>
		</div>
	</section>
	<!-- endmain -->

	<!-- footer -->
	<footer id="footer">			
		<div id="footer-t">
			<div class="container">
				<div class="row">				
					<div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">						
						<a href="{{asset('/')}}"><img src="img/home/media.png"></a>		
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Công ty hoạt động trong lĩnh vực cung cấp giải pháp và tích hợp hệ thống thông tin y tế cho Nhật Bản
						Được thành lập vào ngày 13/01/2012, Ominext là công ty IT hoạt động trong lĩnh vực cung cấp giải pháp và tích hợp hệ thống thông tin y tế cho thị trường Nhật với trụ sở chính tại Việt Nam và 2 chi nhánh tại Nhật Bản. Sau hơn 5 năm không ngừng đổi mới và phát triển, Ominext tự hào là đối tác đáng tin cậy, là người bạn đồng hành cùng các start up và nhiều tập đoàn lớn tại Nhật xây dựng các sản phẩm y tế hướng tới hàng triệu người dùng tại cả thị trường Nhật Bản và Việt Nam.</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone: (+84) 0165 220 1196</p>
						<p>Email: nguyentkhiem96@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>
						<p>Address 1: CTM Building, 139 Đường Cầu Giấy, Quan Hoa, Cầu Giấy, Quan Hoa Cầu Giấy Hà Nội</p>
						<p>Address 2: CTM Building, 139 Đường Cầu Giấy, Quan Hoa, Cầu Giấy, Quan Hoa Cầu Giấy Hà Nội</p>
					</div>
				</div>				
			</div>
			<div id="footer-b">				
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Cổng thông tin và tuyền thông đa phương tiện - www.mediaport.com.vn</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>© 2018 Media Port. All Rights Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow7.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>
<noscript>Not seeing a <a href="https://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>

	<!-- endfooter -->
</body>
</html>