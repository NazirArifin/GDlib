<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Modul</title>
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.core.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.default.css" />
			<link rel="stylesheet" href="/css/style.css" />
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
				<form class="form-horizontal hide" id="form-tambah" action="" method="POST" enctype="multipart/form-data">
						<a href="#" class="btn btn-info btn-mini pull-right" onClick="return dclose()"><i class="icon-remove icon-white"></i></a>
					<fieldset>
					<legend>Tambah Modul</legend>	
							<input type="hidden" name="kategori_modul" id="kategori-modul" value="modul">
							<div class="control-group">
								<label class="control-label control-label-min" for="judul-Modul">Judul</label>
								<div class="controls controls-min">
									<input id="judul-modul" name="judul_modul" type="text" required="" placeholder="Judul Modul">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="pengarang-modul">Pengarang</label>
								<div class="controls controls-min">	
									<input name="pengarang_modul" id="pengarang-modul" type="text" required="" placeholder="Pengarang Modul">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="prolog-modul">Prolog Modul</label>
								<div class="controls controls-min">	
									<textarea rows="3" name="prolog_modul" id="prolog-modul"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="tahun-penerbitan-modul">Tahun Penerbitan</label>
								<div class="controls controls-min">	
									<input name="tahun_penerbitan_modul" id="tahun-penerbitan-modul" type="text" required="" placeholder="Tahun Penerbitan">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label control-label-min" for="tahun-penerbitan-modul">File Modul</label>
								<div class="controls controls-min">	
									<input name="file_modul" id="file-modul" type="file" required="" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="foto-modul">Foto Modul</label>
								<div class="controls controls-min">	
									<input name="foto_modul" id="foto-modul" type="file" required="" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="kata-kunci-modul">Kata Kunci Modul</label>
								<div class="controls controls-min">	
									<input name="kata_kunci_modul" id="kata-kunci-modul" type="text" required="" placeholder="Kata Kunci Modul">
								</div>
							</div>
							<div class="form-actions">
								<button class="btn btn-info btn-mini" type="button" onClick="return dcancel()"><i class="icon-remove icon-white"></i> Cancel</button>
								<button class="btn btn-info btn-mini" type="submit" value="upload" ><i class="icon-ok icon-white" ></i> Simpan</button>
							</div>	
						</fieldset>
				</form>
			<div class="container-fluid" id="view">
				<div class="row-fluid">
					<div class="navbar navbar-inner">
						<form class="navbar-search pull-left">
							  <input type="text" class="search-query" placeholder="Search">
						</form>
						<button class="btn btn-info pull-right" id="tombol" onClick="return tambahModul()"><i class="icon-plus icon-white"></i></button>
					</div>
				</div>
				<!-- dari controller -->
				<?php
					$dokumenModul=$controller->admin_model->tampil_where_kategori_modul();
					if ($dokumenModul == 0):
						echo '<div class="alert-info" style="text-align:center;">Dokumen Modul Tidak Ada</div>';
					else :
						foreach ($dokumenModul as $row):
				?>
				<div class="row-fluid data-user">
					<div class="span4">
						<a href="#image" class="thumbnail jurnal-image"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" alt=""/></a>
					</div>
					<div class="span8">
								<h2><?php echo $row->PENGARANG_DOKUMEN ?> </h2>
								<h4><?php echo $row->TAHUN_PENERBITAN_DOKUMEN ?> </h4>
						<button class="btn btn-mini btn-info" onClick="editDokumenModul(this, <?php echo $row->ID_DOKUMEN ?>)"><i class="icon-wrench icon-white"></i> Edit</button>
						<button class="btn btn-mini btn-info" onClick="deleteDokumenModul(this, <?php echo $row->ID_DOKUMEN ?>)"><i class="icon-trash icon-white"></i> Delete</button>
						<button class="btn btn-mini btn-info" onClick="detailDokumenModul(this, <?php echo $row->ID_DOKUMEN ?>)"><i class="icon-map-marker icon-white"></i> Detail</button>
					</div>
				</div>
				<hr>
				<?php
					endforeach;
					endif;
				?>
				<div class="pagination" align="center">
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
</body>
</html>