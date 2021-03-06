<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>Dosen | Buletin</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/static/css/main.css" />
		<link rel="stylesheet" href="/static/css/style.css" />
			
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
		<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="/third_party/bootstrap/bootstrap.min.js"></script>
		<style type="text/css">
		body{
		background-image:url('/images/bg-1.jpg') ;
		}
		#cari{
			width:100px;
			transition:All 1s ease-in;
			-webkit-transition:All 1s ease-in;
			-moz-transition:All 1s ease-in;
			-o-transition:All 1s ease-in;
			}
		#cari:focus{
			width:400px;
			transition:All 0.5s ease-in;
			-webkit-transition:All 0.5s ease-in;
			-moz-transition:All 0.5s ease-in;
			-o-transition:All 0.5s ease-in;
			}
		#logo-baru {
			position:absolute;
			height: 50px;
			width:255px;
			margin-top: 15px;
		}
		.image-list{
			width:100px;
			height:100px;
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
					<li><a href="/dosen"><i class="icon-dashboard icon-large"></i> Dashboard</a>
					<li><a href="/dosen/profil"><i class="icon-user icon-large"></i> Profil</a>
				  
				</ul>
			</div>
		</div>
	</div>
<br>
<br>
<br>
<br>
<div class="container-fluid">
	<div class="row-fluid">
		<div class=" well span3">
			<div class="well">
				<ul class="thumbnails">
					<li class="span12">
						<a href="#" class="thumbnail"><img src="/images/rud.jpg" alt=""></a>
					</li>
				</ul>
				<span class="label label-inverse">			
				Username | 0955201554
				</span>
			</div>
			<div class="sidebar-nav">
			<div class="well">
				<div class="alert alert-info"><h4>Dokumen</h4></div>
					
				<hr>
				<section class="blog-widget">
					<ul class="nav nav-pills nav-stacked">
					  <li><a href="/dosen/jurnal">Jurnal</a></li>
							<li class="divider"></li>
							<li><a href="/dosen/buku"> Buku</a></li>
							<li class="divider"></li>
							<li><a href="/dosen/modul"> Modul</a></li>
							<li class="divider"></li>
							<li><a href="/dosen/buletin"> Buletin</a></li>
					</ul>
				</section>
			</div>
			</div>
		</div>
<div class="well span9">
	<div class="row-fluid">
		<ul class="breadcrumb">
			<li class="active"><a href="/dosen">Dosen</a> / Buletin  </li>
		</ul>   
			<div class="navbar navbar-inner">
				<a class="brand">Buletin</a>
					<form class="navbar-form pull-right" id="form-buku">
						<input class="model" id="cari" name="query_buku" placeholder="Cari buletin" type="text">
						<button class="btn" onClick="return Buku.search()"><i class="icon-search"></i></button>
					</form>
			</div>
			<div class="well span5">
				<a href="#"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin </h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-primary btn-mini download-dosen"><i class="icon-download "></i> Download</button>
					<button class="btn btn-primary btn-mini baca-dosen"><i class="icon-file"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-dosen"><i class="icon-download"></i> Download</button>
					<button class="btn btn-mini  baca-dosen"><i class="icon-play"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-dosen"><i class="icon-download"></i> Download</button>
					<button class="btn btn-mini  baca-dosen"><i class="icon-play"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<ul class="thumbnails">
				  <li class="thumbnail">
					<img src="/images/3.jpg" class="image-list">
					<a href="#" class="ribbon ribbon-left">New Item</a>
				  </li>
				</ul>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
				<div class="btn-group">
					<button class="btn btn-mini  download-dosen"><i class="icon-download"></i> Download</button>
					<button class="btn btn-mini  baca-dosen"><i class="icon-play"></i> Baca</button>
				</div>
			</div>
		<br>
		<div class="span12">
			<div class="pagination pagination-centered">
			<ul>
				<li><a href="#">Prev</a></li>
				<li class="active">
				<a href="#">1</a>
				</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">Next</a></li>
				</ul>
			</div>
		</div>
	</div>			
</div>
	 <!--BAGIAN FOOTER-->
  	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>

<script type="text/javascript">
$('#tab-dok a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
</script>
</body>
	
</html>