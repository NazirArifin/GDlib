<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>Mahasiswa | Modul</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/css/style.css" />
		<link rel="stylesheet" href="/css/main.css" />
			
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
		<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="/third_party/bootstrap/bootstrap.min.js"></script>
		<style type="text/css">
		#image {
			float: left;
			margin: 0px 15px 10px 0px;
		}
		#query-modul{
			width:120px;
			transition:All 1s ease-in;
			-webkit-transition:All 1s ease-in;
			-moz-transition:All 1s ease-in;
			-o-transition:All 1s ease-in;
			}
		#query-modul:focus{
			width:300px;
			transition:All 0.5s ease-in;
			-webkit-transition:All 0.5s ease-in;
			-moz-transition:All 0.5s ease-in;
			-o-transition:All 0.5s ease-in;
			}
	</style>
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
				<a href="/"><img src="/images/logo-gd.png" id="logo-baru" /></a>
				<ul class="nav pull-right nav-pills">
					<li><a href="/mahasiswa"><i class="icon-dashboard icon-large"></i> Dashboard</a>
					<li><a href="/mahasiswa/profilmahasiswa"><i class="icon-user icon-large"></i> Profil</a>
				  
				</ul>
			</div>
		</div>
	</div>
<br />
<br />
<br />
<div class="span12">
	<h1 style="text-align:center;" class="three">Modul Mahasiswa</h1>
</div>
<div class="container-fluid">
	
	<div class="row-fluid">
		<div class="well span8">
			<ul class="breadcrumb">
				<li><a href="/mahasiswa">Mahasiswa</a> <span class="divider">/</span></li>
				<li class="active">Modul</li>
			</ul>   
			<div class="navbar navbar-inner">
				<a class="brand">Modul</a>
				<form class="navbar-form pull-right" id="form-modul">
					<input class="model" id="query-modul" name="query_modul" placeholder="Search Modul" type="text">
					<button class="btn" onClick="return Modul.search()"><i class="icon-search"></i></button>
				</form>
			</div>
		<br>
			<article id="document-modul" class="post">
			
			</article>
			<div class="pagination pagination-centered pagination-medium" id="pagination-modul">
				<ul>
					<li><a href="">&laquo;</a></li>
					<li><a href="">1</a></li>
					<li><a href="">&raquo;</a></li>
				</ul>
			</div>
		</div>
	
    <div class="well span4">
			<section class="blog-widget">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container"><a class="brand">Post Populer</a></div>
					</div>
				</div>
				<div class='testimonial'>
					<h4>Judul</h4>
					<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit.... </blockquote>
					<p class='testimonial-footer'>
					<img style="width:32px; height:32px;" src="/images/rud.jpg" >
					<b>Rudiec Nuada</b> � designer
					</p>
				</div>
			</section>
		</div>
  	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
</div>
			<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/third_party/jquery/tooltip/main-tooltip.js"></script>
			<script src="/js/paging.mahasiswa.dokumen.js"></script>
</body>
	
</html>