<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Home</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			
			<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/js/bootstrap.min.js"></script>
			<script src="/third_party/jquery.ui/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
   
    <style type="text/css">

			body{
				font-family: Arial, Geneva, SunSans-Regular, sans-serif;
				font-size: 14px;
				color: #333;
				line-height: 22px;
			}
			body h3 {
				font-size: 20px;
				font-weight: bold;
				color: #666;
			}
			
			#wrapper {
				background-color: #fff;
				border: 1px solid #ccc;
				padding: 10px;
				width: 800px;
				height: 400px;
				margin: -210px 0 0 -410px;
				position: absolute;
				top: 50%;
				left: 50%;
				overflow: hidden;
			}
			#images-wrapper {
				width: 500px;
				height: 400px;
				float: left;
			}
			#texts-wrapper {
				width: 300px;
				height: 400px;
				float: right;
			}
			
			#images img {
				display: block;
			}
			
			#texts > div {
				width: 300px;
				height: 400px;
				position: relative;
			}
			#texts > div > div {
				width: 240px;
				position: absolute;
				left: 30px;
				bottom: 125px;
			}
			
			#texts a {
				color: #fff;
				font-size: 18px;
				text-shadow: 0 1px 2px rgba(0,0,0,0.5);
				text-decoration: none;
				text-align: center;
				line-height: 40px;
				outline: none;
				display: block;
				background-color: #888;
				border: 1px solid #666;
				width: 175px;
				height: 40px;
				left: 700px;
				top: 260px;
				
				border-radius: 5px;
				box-shadow: 0 2px 5px rgba(0,0,0,0.5);
				background-image: -moz-linear-gradient(bottom, #666 25%, #888 75%);
				background-image: -webkit-linear-gradient(bottom, #666 25%, #888 75%);
				background-image: -ms-linear-gradient(bottom, #666 25%, #888 75%);
				background-image: linear-gradient(bottom, #666 25%, #888 75%);
			}
			#texts a:hover {
				background-color: #777;
				background-image: -moz-linear-gradient(top, #666 25%, #888 75%);
				background-image: -webkit-linear-gradient(top, #666 25%, #888 75%);
				background-image: -ms-linear-gradient(top, #666 25%, #888 75%);
				background-image: linear-gradient(top, #666 25%, #888 75%);
			}
			#logo{position:absolute;left:10px;top:-9px;}
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
    </style>
	
    
</head>
<body>
 

    <script>
  
       
    </script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner ">
	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
	  </a>
	  <!--button group-->
			<div class="btn-group pull-right">
			  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> 
				
				<span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu">
				<li><a href="#"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="#"><i class="icon-lock"></i> Pengaturan Privasi</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-off"></i> Keluar</a></li>
				
			  </ul>
			</div>
		<!--button group-->
		<a href="#"><img src="images/logo.png" class="brand" width="150" height="70" id="logo"/></a>
			<div class="navbar-search input-append pull-right" >
			  <input class="span2" id="appendedInputButton" type="text" >
			  <button class="btn" type="button"><i class="icon-search"></i></button>
			</div>
		<ul class="nav pull-right nav-pills">
		  <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
		  <li><a href="#"><i class="icon-user"></i> Profile</a></li>
		  
		</ul>
	  </div>
	</div>
 <div id="wrapper">
			<div id="images-wrapper">
				<div id="images">
					<img src="images/jurnal.jpg" width="500" height="400" border="0" />
					<img src="images/modul.jpg" width="500" height="400" border="0" />
					<img src="images/buletin.jpg" width="500" height="400" border="0" />
					<img src="images/ebook.gif" width="500" height="400" border="0" />
				</div>
			</div>
			<div id="texts-wrapper">
				<div id="texts">
					<div>
						<div>
							<h3>JURNAL</h3>
							<p>Advanced cross-browser ellipsis for multiple line content.</p>
							<a href="#" target="_blank">Read More &raquo;</a>
						</div>
					</div>
					<div>
						<div>
							<h3>MODUL</h3>
							<p>Circular, responsive jQuery carousel.</p>
							<a href="#" target="_blank">Read More &raquo;</a>
						</div>
					</div>
					<div>
						<div>
							<h3>BULETIN</h3>
							<p>Highly customizable and feature rich jQuery form validator that embraces the power of HTML5.</p>
							<a href="#" target="_blank">Read More &raquo;</a>
						</div>
					</div>
					<div>
						<div>
							<h3>E-BOOK</h3>
							<p>Highly customizable and feature rich jQuery form validator that embraces the power of HTML5.</p>
							<a href="#" target="_blank">Read More &raquo;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
 <div class="well span12 " id="footer">
	<a href="#"><img src="images/ogo.png" id="image-footer"></a>
	&copy; 2012 Gedung {D} Library All rights reserved
</div>
 
 

 <script type="text/javascript">
 	$(function() {
				 $('#images').carouFredSel({
				 	items: 1,
					direction: 'up',
					auto: {
						duration: 750,
						timeoutDuration: 2000,
						easing: 'quadratic',
						onBefore: function() {
							var index = $(this).triggerHandler( 'currentPosition' );
							if ( index == 0 ) {
								index = $(this).children().length;
							}
							$('#texts').trigger('slideTo', [ index, {
								fx: 'directscroll'
							}, 'prev' ]);
						}
					}
				 });
				 $('#texts').carouFredSel({
					items: 1,
					direction: 'up',
					auto: {
						play: false,
						duration: 750,
						easing: 'quadratic'
					}
				 });
			});
    $(function() {
        $( "#menu" ).menu();
    });
  </script> 
</body>
</html>