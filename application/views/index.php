<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<title>GDLib :: G{edung}D Library</title>
	
	<link rel="stylesheet" type="text/css" href="/third_party/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/third_party/bootstrap/css/bootstrap-responsive.min.css">
	
	<link rel="stylesheet" type="text/css" href="/third_party/bootmetro/css/bootmetro.css">
	<link rel="stylesheet" type="text/css" href="/third_party/bootmetro/css/metro-ui-light.css">
	
	<link href="/third_party/slider/2/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="/third_party/slider/2/slider.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
@font-face {
	font-family: 'Open Sans';
	src: url('/third_party/bootmetro/font/opensans-regular-webfont.eot');
	src: local('Open Sans'), local('Open Sans'), url('/third_party/bootmetro/font/opensans-regular-webfont.ttf') format('truetype');
}
	
body {
	font-family: 'Open Sans', Arial, sans-serif;
	padding-top: 50px;
	
	padding-bottom: 10px;
	background: rgb(255,255,255); /* Old browsers */
	background: -moz-linear-gradient(bottom,  rgba(255,255,255,1) 0%, rgba(243,243,243,1) 50%, rgba(237,237,237,1) 51%, rgba(255,255,255,1) 100%); /* FF3.6+ */
	background: -webkit-linear-gradient(bottom,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(bottom,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(bottom,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* IE10+ */
	background: linear-gradient(to top,  rgba(255,255,255,1) 0%,rgba(243,243,243,1) 50%,rgba(237,237,237,1) 51%,rgba(255,255,255,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}

.slider-frame {
	background-color: #FFF;
	border: 1px solid #e3e3e3;
}

#mcts1 {
	background-color: #FFF;
	box-shadow: 0px 0px 0px #FFF;
	border: 0;
}

#sliderFrame {
	margin-top: 8px;
	margin-bottom: 0;
}

div.mc-caption-bg, div.mc-caption-bg2 {
	top: 240px;
}

div.mc-caption {
	font-family: 'Open Sans', arial, sans-serif;
}

#logo {
	height: 31px;
	margin-top: 2px;
}

footer {
	font-size: 85%;
	line-height: 1.2em;
}

footer img {
	margin-right: 10px;
	width: 27px;
}

@media (min-width: 1000px) { 
	#sliderFrame {
		margin-left: 70px;
	}
}
	</style>
	<!--
       <style type="text/css">
		
			#logo{
			position:absolute;left:10px;top:-9px;
			}
			
			#footer{
			font-familiy:arial;
			font-weigh:bold;
			text-align:right;
			position:absolute;
			top:100%;
			left:0%;
			}
			#image-footer{
			width:30px;
			height:30px;
			align:left;}
			.image-content{
			width:770px;
			height:450px;
			}
			
    </style>
	-->
    
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#"><img src="/images/gd.png" id="logo" /></a>
				<ul class="nav pull-right nav-pills">
					<li><a href="#"><i class="icon-home"></i> Dashboard</a></li>
					<li><a href="#"><i class="icon-user"></i> Profil</a></li>
				  
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="span10 offset1">
				<div class="row-fluid slider-frame">
					<div id="mcts1" class="pull-left">
						<img src="/images/slider-1.jpg" />
						<img src="/images/slider-2.jpg" />
						<img src="/images/slider-3.jpg" />
					</div>
					<div id="sliderFrame" class="pull-left">
						<div id="slider">
							<img src="/images/slider-1.jpg" alt="#slideshow-1" title="Welcome to Menucool jQuery Slideshow" />
							<img src="/images/slider-11.jpg"  alt="#slideshow-2"/>
							<img src="/images/slider-12.jpg"  alt="#slideshow-3"/>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div id="slideshow-1" class="hide">
						<h3>Welcome to Menucool jQuery Slideshow</h3>
						This demo shows how the jQuery slideshow (or Thumbnail Slider if using the pure JavaScript) can work together with the JavaScript Image Slider.
					</div>
					<div id="slideshow-2" class="hide">
						<h3>Enhanced Slideshow Effect</h3>
						The jQuery Slideshow/thumbnail slider works nicely together with the JavaScript Image Slider which greatly enhanced the slideshow with an added aesthetic appeal.
					</div>
					<div id="slideshow-3" class="hide">
						<h3>SEO Friendly</h3>                    
						The markup is valid HTML5 and SEO optimzied, with all content always being available to search engines. 
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="span10 offset1">
				<div class="row-fluid">
				<ul class="thumbnails">
				  <li class="span3">
					<div class="thumbnail">
					  <img src="images/1.jpg" alt="">
					  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-file icon-white"></i> JURNAL</a> </p>
					  
					</div>
				  </li>
				  <li class="span3">
					<div class="thumbnail">
					  <img src="images/2.jpg" alt="">
					  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-book icon-white"></i> MODUL</a> </p>
					  
					</div>
				  </li>
				  <li class="span3">
					<div class="thumbnail">
					  <img src="images/3.jpg" alt="">
					  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-book icon-white"></i> BUKU</a> </p>
					  
					</div>
				  </li>
				  <li class="span3">
					<div class="thumbnail">
					  <img src="images/4.jpg" alt="">
					  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-file icon-white"></i> BULETIN</a> </p>
					  
					</div>
				  </li>
				</ul>
				</div>
			</div>
		</div>
		<footer class="row">
			<div class="span12">
				<img src="/images/favicon.png" class="pull-left" />
				<span>Created by: Lab Crew. <br />Copyright &copy; 2012. All rights reserved</span>
			</div>
		</footer>
	</div>

	<script src="/third_party/jquery/jquery-1.7.2.min.js"></script>
	<script src="/third_party/bootstrap/bootstrap.min.js"></script>
	<script src="/third_party/slider/2/js-image-slider.js" type="text/javascript"></script>
	<script src="/third_party/slider/2/jquery-slider.js" type="text/javascript"></script>
</body>
</html>