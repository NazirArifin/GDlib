<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Dosen</title>
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
		<div class="well span9 pull-right">
			<form class="form-horizontal hide" id="form-tambah" action="" method="POST">
					<a href="#" class="btn btn-info btn-mini pull-right" onClick="return sclose()"><i class="icon-remove icon-white"></i></a>
				<fieldset>
					<legend>Tambah User Dosen</legend>
				<div class="control-group">
					<label class="control-label control-label-min" for="nama-user">Nama</label>
						<div class="controls controls-min">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-user"></i></span>
									<input id="nama-user" name="nama_user" type="text" required="" placeholder="Your Name">
									<input id="id-user" name="id_user" type="hidden" value="">
							</div>
						</div>
				</div>
				
				<div class="control-group">
					<label class="control-label control-label-min" for="no-induk-user">No. Induk Dosen</label>
						<div class="controls controls-min">	
							<div class="input-prepend">
								<span class="add-on"><i class="icon-tags"></i></span>
									<input name="no_induk_user" id="no-induk-user" type="text" required="" placeholder="No. Induk User">
							</div>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="id-facebook">ID Facebook</label>
						<div class="controls controls-min">	
							<div class="input-prepend">
								<span class="add-on"><i class="icon-globe"></i></span>
									<input name="id_facebook" id="id-facebook" type="text" required="" placeholder="ID Facebook">
							</div>
						</div>
				</div>
				<div class="form-actions btn-group">
					<button href="#" class="btn btn-warning btn-mini" type="button" onClick="return cancel()"><i class="icon-remove icon-white"></i> Cancel</button>
					<button  href="#" class="btn btn-success btn-mini" type="button" onClick="return simpanUSerDosen()"><i class="icon-ok icon-white" ></i> Simpan</button>
				</div>
				<hr>
				</fieldset>
			</form>
			<div class="container-fluid" id="view">
				<div class="row-fluid">
					<div class="navbar navbar-inner">
						<form class="navbar-form pull-left">
							<input id="query" name="query" placeholder="Search" type="text">
							<button class="btn" onclick="return Document.search()"><i class="icon-search"></i></button>
						</form>
						<input id="id-level-user" name="id_level_user" type="hidden" value="2">
						<button class="btn btn-info pull-right" id="tombol" onClick="return tambahDosen()"><i class="icon-plus icon-white"></i></button>
					</div>
				</div>
				<div class="row-fluid data-user">
					<div class="container-fluid" id="document-data">
						<!-- tempat output data -->
					</div>
					<div class="pagination pagination-centered pagination-medium" id="pagination">
						<!-- di sini loh paging nya -->
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
	
			<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/third_party/alertify/alertify.min.js"></script>
			<script src="/js/admin.js"></script>
			<script src="/js/paging.user.js"></script>
<script type="text/javascript">
	$('#tombol').attr('title', 'Tambah User').tooltip();
</script>
</body>
</html>