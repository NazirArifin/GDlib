<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Mahasiswa</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/static/css/main.css" />
			
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
		<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="/third_party/bootstrap/bootstrap.min.js"></script>
		<style type="text/css">
		body{
		background-image:url('/images/bg.gif') ;
		}
		#logo {
			height: 31px;
			margin-top: 0px;
		}
		.image-list{
			width:105px;
			height:97px;
			float: left;
			margin: 0px 15px 10px 0px;
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
				<a href="/"><img src="/images/gd.png" id="logo" /></a>
				<ul class="nav pull-right nav-pills">
					<li><a href="/admin"><i class="icon-home"></i> Dashboard</a></li>
					<li><a href="#"><i class="icon-user"></i> Profil</a></li>
				  
				</ul>
			</div>
		</div>
</div>
<br />
<br />
<br />
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
					<ul class="nav nav-list">
						<div class="alert alert-info">
							<li class="nav-header">Dokumen</li>
							<li><a href="/mahasiswa/jurnal" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Jurnal</a></li>
							<li class="divider"></li>
							<li><a href="/mahasiswa/buku" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buku</a></li>
							<li class="divider"></li>
							<li><a href="/mahasiswa/modul" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Modul</a></li>
							<li class="divider"></li>
							<li><a href="/mahasiswa/buletin" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buletin</a></li>
							<li class="divider"></li>
						</div>
					</ul>
			</div>
		</div>
<div class="well span9">
	<div class="row-fluid">
			<div class="">
				<div class="navbar navbar-inner navbar-inverse">
					<a class="brand">Dokumen</a>
						<form class="navbar-search pull-right">
							<input type="text" class="search-query" placeholder="Cari Dokumen">
						</form>
				</div>
			<ul class="nav nav-tabs" id="tab-dok">
				<li class="active"><a href="#jurnal">Jurnal</a></li>
				<li><a href="#buku">Buku</a></li>
				<li><a href="#modul">Modul</a></li>
				<li><a href="#buletin">Buletin</a></li>
			</ul>
	 
	<div class="tab-content">
	<!--tab untuk jurnal-->
		<div class="tab-pane active" id="jurnal">
		<div class="divider"></div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/doc.jpg" class="thumbnail image-list"></a>
				<h5>Jurnal</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/doc.jpg" class="thumbnail image-list"></a>
				<h5>Jurnal</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/doc.jpg" class="thumbnail image-list"></a>
				<h5>Jurnal</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/doc.jpg" class="thumbnail image-list"></a>
				<h5>Jurnal</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
		<br>
		<div class="pagination pagination-centered pagination-large">
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
	  <!--tab buku-->
	  <div class="tab-pane" id="buku">
		<div class="divider"></div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/2.jpg" class="thumbnail image-list"></a>
				<h5>Buku </h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/2.jpg" class="thumbnail image-list"></a>
				<h5>Buku</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/2.jpg" class="thumbnail image-list"></a>
				<h5>Buku</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/2.jpg" class="thumbnail image-list"></a>
				<h5>Buku</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
		<br>
		
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
	  <!--tab modul-->
	  <div class="tab-pane" id="modul">
		<div class="divider"></div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/4.jpg" class="thumbnail image-list"></a>
				<h5>Modul </h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/4.jpg" class="thumbnail image-list"></a>
				<h5>Modul</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/4.jpg" class="thumbnail image-list"></a>
				<h5>Modul</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/4.jpg" class="thumbnail image-list"></a>
				<h5>Modul</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
		<br>
		
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
	  <!--tab bulletin-->
	  <div class="tab-pane" id="buletin">
		<div class="divider"></div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin </h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini btn-primary"><i class="icon-download icon-white"></i> Download</button>
					<button class="btn btn-mini btn-warning"><i class="icon-share-alt icon-white"></i> Baca</button>
				</div>
			</div>
		<br>
		
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
		</div>
</div>
</div>
	<footer class="row-fluid">
		<div class="span12">
			<hr>
			<img src="/images/favicon.png" class="pull-left" />
			<span>Created by: <a href="/humans.txt" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span>
		</div>
	</footer>

<script type="text/javascript">
$('#tab-dok a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
$('.btn-primary').attr('title', 'klik untuk mengunduh dokumen').tooltip();
$('.btn-warning').attr('title', 'klik untuk membaca dokumen').tooltip();
$('.btn-success').attr('title', 'klik untuk melihat detail  dokumen').tooltip();
</script>
</body>
	
</html>