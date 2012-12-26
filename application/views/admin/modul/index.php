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
		<li class="nav-header">Pengguna</li>
		<li><a href="/admin/dosen"><i class="icon-user"></i> Dosen</a></li>
		<li><a href="/admin/mahasiswa"><i class="icon-user"></i> Mahasiswa</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Dokumen</li>
		<li><a href="/admin/jurnal"><i class="icon-file"></i> Jurnal</a></li>
		<li><a href="/admin/buku"><i class="icon-file"></i> Buku</a></li>
		<li><a href="/admin/modul"><i class="icon-file"></i> Modul</a></li>
		<li><a href="/admin/buletin"><i class="icon-file"></i> Buletin</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Lainnya</li>
		<li><a href="/admin/news"><i class="icon-warning-sign"></i> Berita</a></li>
	</ul>
		</div>
    <div class="well span9 pull-right">
			<input type="text" class="input-medium search-query" >
			<button class="btn btn-mini btn-info pull-right" id="tombol" onClick="return tambahModul()"><i class="icon-plus icon-white"></i></button><br><br><br>
				<div class="row-fluid">
				<form class="form-horizontal hide" id="form-tambah" action="" method="POST" enctype="multipart/form-data">
						<a href="#" class="btn btn-info btn-mini pull-right" onClick="return closeForm()"><i class="icon-remove icon-white"></i></a>
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
								<button class="btn btn-info btn-mini" type="button" onClick="return closeForm()"><i class="icon-remove icon-white"></i> Cancel</button>
								<button class="btn btn-info btn-mini" type="submit" value="upload" ><i class="icon-ok icon-white" ></i> Simpan</button>
							</div>	
						</fieldset>
				</form>	
			</div>
		</div>
  </div>
</div>
<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/third_party/alertify/alertify.min.js"></script>
			<script src="/js/admin.js"></script>
</body>
</html>