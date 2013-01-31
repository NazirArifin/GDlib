<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Dosen</title>
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.css" />
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
				<a href="/"><img src="/images/logo-gd.png" id="logo-baru" /></a>
				<ul class="nav pull-right nav-pills">
					<li><a href="/admin"><img src="/images/glyphicons/png/glyphicons_020_home.png" alt=""> Dashboard</a>
					<li><a href="/userprofile"><img src="/images/glyphicons/png/glyphicons_003_user.png" alt=""> Profil</a>
				  
				</ul>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
<h1 class="three" style="text-align:center;">Jurnal Dosen</h1>
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
					<a href="#Setting">Settings</a> | <a href="#">Keluar</a>
				</span>
			</div>
			<div class="well">
				<div class="alert alert-info"><h4>Dokumen</h4></div>	
				<hr>
				<section class="blog-widget">
					<ul class="nav nav-pills nav-stacked">
					  <li><a href="/dosen/jurnal" >Jurnal</a></li>
						<li class="divider"></li>
						<li><a href="/dosen/buku"> Buku</a></li>
						<li class="divider"></li>
						<li><a href="/dosen/modul"> Modul</a></li>
						<li class="divider"></li>
						<li><a href="/dosen/buletin"> Buletin</a></li>
						<li class="divider"></li>
					</ul>
				</section>
			</div>
		</div>
		<div class="well span9 pull-right">
			<form class="form-horizontal hide" id="form-tambah" action="" method="POST">
					<a href="#" class="btn btn-mini pull-right" onClick="return tutupJurnal()"><img src="/images/glyphicons/png/glyphicons_197_remove.png" alt=""></a>
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
					<button href="#" class="btn btn-warning btn-mini" type="button" onClick="return cancel()">Cancel</button>
					<button  href="#" class="btn btn-success btn-mini" type="button" onClick="return simpanUSerDosen()">Simpan</button>
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
						<button class="btn pull-right" id="tombol" onClick="return tambahJurnal()"><img src="/images/glyphicons/png/glyphicons_190_circle_plus.png" alt=""></button>
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
										
							<button class="btn btn-mini btn-warning" onClick="editJurnal(this, <?php echo $row->ID_DOKUMEN ?>)">Edit</button>
							<button class="btn btn-mini btn-danger" >Delete</button>
							<button class="btn btn-mini btn-info" >Detail</button>
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
	<!--BAGIAN FOOTER-->
  	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/humans.txt" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
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