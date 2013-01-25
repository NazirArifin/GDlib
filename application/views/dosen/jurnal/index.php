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
					<li><a href="/dosen"><i class="icon-home"></i> Dashboard</a></li>
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
		<div class="well span3">
			<div class="member-box">
				<ul class="thumbnails">
					<li class="span12">
						<a href="#" class="thumbnail"><img src="/images/D_oS.png" alt=""></a>
					</li>
				</ul>
				<span>
					<strong>Administrator</strong><br>
					<a href="#Profil"> Dosen </a><br>
					<a href="#Setting">Settings</a> | <a href="#">Keluar</a>
				</span>
			</div>
			<div class="well condensed">
				<ul class="nav nav-list">
					<div class="alert alert-info">
						<li class="nav-header">Dokumen</li>
						<li><a href="/dosen/jurnal" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Jurnal</a></li>
						<li class="divider"></li>
						<li><a href="/dosen/buku" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buku</a></li>
						<li class="divider"></li>
						<li><a href="/dosen/modul" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Modul</a></li>
						<li class="divider"></li>
						<li><a href="/dosen/buletin" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buletin</a></li>
						<li class="divider"></li>
					</div>
				</ul>
			</div>
		</div>
		<div class="well span9 pull-right">
			<form class="form-horizontal hide" id="form-tambah" action="" method="POST">
					<a href="#" class="btn btn-info btn-mini pull-right" onClick="return tutupJurnal()"><i class="icon-remove icon-white"></i></a>
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
									<input name="id_facebook" id="id-facebook" type="text" required="" placeholder="ID Facebook" value="https://www.facebook.com/">
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
						<form class="navbar-search pull-left">
							<input type="text" class="input-medium search-query"/>
						</form>
						<button class="btn btn-info pull-right" id="tombol" onClick="return tambahJurnal()"><i class="icon-plus icon-white"></i></button>
					</div>
				</div>
			<?php
				$jurnal=$controller->dosen_model->tampilJurnal();
					if ($jurnal==0):
						echo '<div class="alert-info" style="text-align:center;">Jurnal Tidak Ada</div>';
					else: 
					foreach ($jurnal as $row):
				?>
				<div class="row-fluid data-user alert-success">
						<div class="span4">
							<a href="#image" class="thumbnail"><img src="/upload/jurnal/<?php echo $row->FOTO_DOKUMEN ?>" alt=""/></a>
						</div>
						<div class="span8 btn-group">
										<h2><?php echo $row->JUDUL_DOKUMEN ?> </h2>
										<h3><?php echo $row->PENGARANG_DOKUMEN ?> </h3>
										<h3><?php echo $row->PROLOG_DOKUMEN ?> </h3>
										
							<button class="btn btn-mini btn-warning" onClick="editJurnal(this, <?php echo $row->ID_DOKUMEN ?>)"><i class="icon-wrench icon-white"></i> Edit</button>
							<button class="btn btn-mini btn-danger" ><i class="icon-trash icon-white"></i> Delete</button>
							<button class="btn btn-mini btn-info" ><i class="icon-map-marker icon-white"></i> Detail</button>
						</div>
				</div>
				<hr>
					<?php
					endforeach;
					endif;
					?>
				<div class="pagination row-fluid pagination-centered" id="paging">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active"><a href="#">1</a></li>
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
			<script src="/js/dosen.js"></script>
<script type="text/javascript">
	$('#tombol').attr('title', 'Tambah User').tooltip();
</script>
</body>
</html>