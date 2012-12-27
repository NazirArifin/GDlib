<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Buletin</title>
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.core.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.default.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/main.css" />
     <style type="text/css">
	#logo {
		height: 31px;
		margin-top: 2px;
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
	<br>
	<br>
	<br>
<div class="container-fluid" id="container">
	<div class="row-fluid" id="form">
		<div class="well span3" id="sidebar">
			<ul class="nav nav-list">
				<div class="alert alert-info">
					<li class="nav-header">Pengguna</li>
					<li><a href="/admin/dosen" class="btn btn-block btn-success"><i class="icon-user icon-white"></i> Dosen</a></li>
					<li class="divider"></li>
					<li><a href="/admin/mahasiswa" class="btn btn-block btn-success"><i class="icon-user icon-white"></i> Mahasiswa</a></li>
				</div>
				<div class="alert alert-info">
					<li class="nav-header">Dokumen</li>
					<li><a href="/admin/jurnal" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Jurnal</a></li>
					<li class="divider"></li>
					<li><a href="/admin/buku" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buku</a></li>
					<li class="divider"></li>
					<li><a href="/admin/modul" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Modul</a></li>
					<li class="divider"></li>
					<li><a href="/admin/buletin" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buletin</a></li>
					<li class="divider"></li>
				</div>
				<div class="alert alert-info">
					<li class="nav-header">Lainnya</li>
					<li><a href="/admin/news" class="btn btn-block btn-warning"><i class="icon-warning-sign icon-white"></i> Berita</a></li>
				</div>
			</ul>
		</div>
    <div class="well span9">
		<div class="navbar navbar-inner">
				<form class="navbar-search pull-left">
				  <input type="text" class="search-query" placeholder="Cari buletin">
				</form>
				<button class="btn btn-success pull-right"><i class="icon-plus icon-white"></i></button>
		</div>
		 <div class="media well">
				<a class="pull-left" >
					<img src="/images/doc.jpg" class="media-object jurnal-image thumbnail" >
				</a>
					<div class="media-body">
						<h4 class="media-heading">buku</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus magni explicabo perspiciatis harum distinctio debitis id quos quis aspernatur nemo labore voluptatem magnam totam minus culpa quasi dolor iure quaerat... <a href="#" class="badge badge-info">read more</a></p>
							<div class="btn-group">
								<button class="btn btn-warning"><i class="icon-edit icon-white"></i></button>
								<button class="btn btn-danger"><i class="icon-trash icon-white"></i></button>
							</div>
					</div>
			</div>
			 <div class="media well">
				<a class="pull-left" >
					<img src="/images/doc.jpg" class="media-object jurnal-image thumbnail" >
				</a>
					<div class="media-body">
						<h4 class="media-heading">buku</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus magni explicabo perspiciatis harum distinctio debitis id quos quis aspernatur nemo labore voluptatem magnam totam minus culpa quasi dolor iure quaerat... <a href="#" class="badge badge-info">read more</a></p>
							<div class="btn-group">
								<button class="btn btn-warning"><i class="icon-edit icon-white"></i></button>
								<button class="btn btn-danger"><i class="icon-trash icon-white"></i></button>
							</div>
					</div>
			</div>
	
	<div class="pagination pagination-centered" >
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
	<!--bagian footer-->
	<footer class="row-fluid">
		<div class="span12">
			<hr>
			<img src="/images/favicon.png" class="pull-left" />
			<span>Created by: <a href="/humans.txt" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span>
		</div>
	</footer>
	<script type="text/javascript">
	$('.btn-danger').attr('title' , 'klik untuk menghapus').tooltip();
	$('#tombol').attr('title', 'Tambah Jurnal').tooltip();
	</script>
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/third_party/jquery/tooltip/main-tooltip.js"></script>
			<script src="/js/admin.js"></script>
			
</body>
</html>