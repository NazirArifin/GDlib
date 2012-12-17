<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>GDLib :: G{edung}D Library</title>
	
	<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="/css/main.css" />
			
	<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
	<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
	<script src="/third_party/bootstrap/bootstrap.min.js"></script>
	
	<link href="/third_party/slider/2/js-image-slider.css" rel="stylesheet" type="text/css" />
	<link href="/third_party/slider/2/slider.css" rel="stylesheet" type="text/css" />
	
	<link href="/css/home.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a href="/" id="logo" class="pull-left"><img src="/images/gd.png" /></a>
				<ul class="nav pull-right nav-pills">
					<li><a href="#"><i class="icon-dashboard"></i> Dashboard</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal-info"><i class="icon-user"></i> Profil</a></li>
				</ul>
				<div class="input-append pull-right">
					<input class="input-medium" id="search-top" type="text" name="q" />
					<button class="btn btn-medium" type="button"><i class="icon-search"></i></button>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row-fluid">
			<div class="span10 offset1">
				<div class="row-fluid slider-frame">
					<div id="mcts1" class="pull-left">
						<img src="/upload/news/slider-1.jpg" />
						<img src="/upload/news/slider-2.jpg" />
						<img src="/upload/news/slider-3.jpg" />
					</div>
					<div id="sliderFrame" class="pull-left">
						<div id="slider">
							<img src="/upload/news/slider-1.jpg" alt="#slideshow-1" title="Welcome to Menucool jQuery Slideshow" />
							<img src="/upload/news/slider-11.jpg" alt="#slideshow-2"/>
							<img src="/upload/news/slider-12.jpg" alt="#slideshow-3"/>
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
		<div class="row-fluid">
			<div class="span10 offset1">
				<div class="row-fluid">
					<div class="span3 boxes well">
						<a href="#" class="btn btn-info btn-block btn-large"><i class="icon-newspaper"></i> JURNAL</a>
						<ul class="unstyled">
							<li><img src="/images/animal1.png" /> <a href="test" rel="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover on top" data-trigger="hover" class="doc-list">The markup is valid HTML5 and SEO optimzied</a></li>
							<li><img src="/images/animal1.png" /> <a href="test" rel="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover on top" data-trigger="hover" class="doc-list">The jQuery Slideshow/thumbnail slider works nicely</a></li>
							<li><img src="/images/animal1.png" /> <a href="test" rel="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover on top" data-trigger="hover" class="doc-list">This demo shows how the jQuery slideshow (or Thumbnail Slider if using the pure JavaScript)</a></li>
						</ul>
					</div>
					<div class="span3 boxes well">
						<a href="#" class="btn btn-warning btn-block btn-large"><i class="icon-book"></i> MODUL</a>
						
						
					</div>
					<div class="span3 boxes well">
						<a href="#" class="btn btn-block btn-large"><i class="icon-book"></i> BUKU</a>
						
						
					</div>
					<div class="span3 boxes well">
						<a href="#" class="btn btn-success btn-block btn-large"><i class="icon-newspaper"></i> BULETIN</a>
						
						
					</div>
				</div>
			</div>
		</div>
		<footer class="row-fluid">
			<div class="span12 well">
				<img src="/images/favicon.png" class="pull-left" />
				<span>Created by: <a href="/humans.txt" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span>
			</div>
		</footer>
	</div>
	
	<!-- modal info -->
	<div id="modal-info" class="modal message hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h3>Modal Heading</h3>
        </div>
        <div class="modal-body">
            <h4>Text in a modal</h4>
            <p>Do you want to turn on location services so Microsoft can use your location ?</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal">Close</button>
            <button class="btn btn-primary">Save changes</button>
        </div>
    </div>

	<script src="/third_party/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="/third_party/jquery/jquery-plugins.js" type="text/javascript"></script>
	<script src="/third_party/bootstrap/bootstrap.min.js" type="text/javascript"></script>
	<script src="/third_party/slider/2/js-image-slider.js" type="text/javascript"></script>
	<script src="/third_party/slider/2/jquery-slider.js" type="text/javascript"></script>
	
	<script type="text/javascript">
$('a[rel="popover"]').popover();
$('a[rel="tooltip"]').tooltip();
$('.doc-list').readmore({
  substr_len: $('.doc-list').text().substr(0, 25).lastIndexOf(" ")
}).textOverflow();
	</script>
</body>
</html>