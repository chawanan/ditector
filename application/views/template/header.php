<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
	
		<!-- Use the .htaccess and remove these lines to avoid edge case issues.
				 More info: h5bp.com/b/378 -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
		<title>Gumby - A Flexible, Responsive CSS Framework - Powered by SASS</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="humans.txt">
	
		<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
	
		<!-- Facebook Metadata /-->
		<meta property="fb:page_id" content="" />
		<meta property="og:image" content="" />
		<meta property="og:description" content=""/>
		<meta property="og:title" content=""/>
	
		<!-- Google+ Metadata /-->
		<meta itemprop="name" content="">
		<meta itemprop="description" content="">
		<meta itemprop="image" content="">
	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
		<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
				 However, there is a blank style.css in the css directory should you prefer -->
		<link rel="stylesheet" href="<?=base_url('css/gumby.css')?>">
		<!-- <link rel="stylesheet" href="css/style.css"> -->
	
		<script src="<?=base_url('js/libs/modernizr-2.6.2.min.js')?>"></script>
	</head>

	<style>
		.btn,.drawer { margin-bottom:10px; }
		.drawer { text-align: center; }
		h1.lead { border-bottom: 1px dotted #ccc; margin-bottom: 30px; }
		h4.lead { margin-bottom:10px; }
		#icon_map ul li { font-size: 16px; }
		.smallify { font-size: 13px; }
		.modal h2, .modal .btn { margin: 5% 0 20px; }
		
		/* Override Gumby CSS */
		.navbar { width: 100%; min-height: 45px; display: block; margin-bottom: 5px; background: #3b5998; }
	</style>

	<body>
		<!-- nav#1 Logo&Social area -->
		<div class="navbar" id="nav1" style="background: #ffffff; min-height: 90px;">
			<div class="row">
				<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
				<h1 class="four columns logo">
					<a href="#">
						<img src="img/user.jpg" gumby-retina />
					</a>
					
				</h1>
				<ul class="push_four one columns">
					<li><a href="#"><img src="img/icon/fb.png" /></a></li>
					<!--<li><a href="#"><img src="img/icon/tw.png" /></a></li>
					<li><a href="#"><img src="img/icon/yt.png" /></a></li>
					<li><a href="#"><img src="img/icon/mail.png" /></a></li>-->
				</ul>
				
			</div>
		</div>		
		
		<!-- nav#2 Menu area -->
		<div class="navbar row" id="nav2">
			<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
				<ul class="twelve columns">
					
					<li><a href="#">หน้าแรก</a></li>
					<li><a href="#">ประวัติผู้สอน</a></li>
					<li><a href="#">หลักสูตรและการสมัคร</a></li>
					<li><a href="#">ข่าวการศึกษา</a></li>
					<li><a href="#">ภาพกิจกรรม</a></li>
					<li><a href="#">บทความ</a></li>
					<li><a href="#">ติดต่อเรา</a></li>
				</ul>
		</div>	
		
 		
	</body>
</html>
