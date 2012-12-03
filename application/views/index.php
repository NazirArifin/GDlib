<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Home</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="third_party/bootstrap/css/bootstrap-responsive.min.css" />
			
			<script src="third_party/jquery/jquery-1.8.2.min.js"></script>
			<script src="third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="third_party/bootstrap/bootstrap.min.js"></script>
			
   
   
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
	<br>
	<br>
	<br>
	<br>
<div class="container-fluid">
	<div class=" span12" id="wrapper">
			<!--slider-->
			<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="images/animal1.png" alt="" class="image-content">
                    <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit....<a class="label label-warning">Read More</a></p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="images/animal2.png" alt="" class="image-content">
                    <div class="carousel-caption">
                      <h4>Second Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit...<a class="label label-warning">Read More</a></p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="images/animal3.png" alt="" class="image-content">
                    <div class="carousel-caption">
                      <h4>Third Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit...<a class="label label-warning">Read More</a></p>
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>
            </div>
          </div>
		  <!--end slider-->
		
	<!--thumbnail-->	
	<div class="container-fluid">
		<div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img src="http://placehold.it/300x200" alt="">
				  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-file icon-white"></i> JURNAL</a> </p>
                  
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="http://placehold.it/300x200" alt="">
				  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-book icon-white"></i> MODUL</a> </p>
                  
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="http://placehold.it/300x200" alt="">
				  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-book icon-white"></i> BUKU</a> </p>
                  
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img src="http://placehold.it/300x200" alt="">
				  <p><a href="#" class="btn btn-primary btn-block btn-large"><i class="icon-file icon-white"></i> BULETIN</a> </p>
                  
                </div>
              </li>
            </ul>
          </div>
         </div>
	<!--end thumbnail-->
	
	<!--footer-->
<div class="well span12 fixed-bottom">
	<a href="#"><img src="images/ogo.png" id="image-footer"></a>
	&copy; 2012 Gedung {D} Library All rights reserved
</div>
 
 

 <script type="text/javascript">
 
	$('#myCarousel').carousel({ interval: 2000})
  </script> 
</body>
</html>