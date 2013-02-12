<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Buku</title>
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.core.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.default.css" />
			<link rel="stylesheet" href="/css/main.css" />
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
	<div class="row-fluid">
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
					<legend>Tambah Buku</legend>	
							<input type="hidden" name="kategori_buku" id="kategori-buku" value="buku">
							<input type="hidden" id="id-dokumen" name="id_dokumen" value="">
							<div class="control-group">
								<label class="control-label control-label-min" for="judul-buku">Judul</label>
								<div class="controls controls-min">
									<input id="judul-buku" name="judul_buku" type="text" required="" placeholder="Judul Buku">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="pengarang-buku">Pengarang</label>
								<div class="controls controls-min">	
									<input name="pengarang_buku" id="pengarang-buku" type="text" required="" placeholder="Pengarang Buku">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="prolog-buku">Prolog Buku</label>
								<div class="controls controls-min">	
									<textarea rows="3" name="prolog_buku" id="prolog-buku"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="tahun-penerbitan-buku">Tahun Penerbitan</label>
								<div class="controls controls-min">	
									<input name="tahun_penerbitan_buku" id="tahun-penerbitan-buku" type="text" required="" placeholder="Tahun Penerbitan">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label control-label-min" for="tahun-penerbitan-buku">File Buku</label>
								<div class="controls controls-min">	
									<input name="file_buku" id="file-buku" type="file" required="" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="foto-buku">Foto Buku</label>
								<div class="controls controls-min">	
									<input name="foto_buku" id="foto-buku" type="file" required="" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="kata-kunci-buku">Kata Kunci Buku</label>
								<div class="controls controls-min">	
									<input name="kata_kunci_buku" id="kata-kunci-buku" type="text" required="" placeholder="Kata Kunci Buku">
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
							  <input type="text" id="query" name="query" class="search-query" placeholder="Search">
							  <button class="btn" onclick="return Document.search()"><i class="icon-search"></i></button>
						</form>
						<button class="btn btn-info pull-right" id="tombol" onClick="return tambahBuku()"><i class="icon-plus icon-white"></i></button>
					</div>
				</div>
				<!-- dari controller -->
				<?php
					$dokumenBuku=$controller->admin_model->tampil_where_kategori_buku();
					if ($dokumenBuku == 0):
						echo '<div class="alert-info" style="text-align:center;">Dokumen Buku Tidak Ada</div>';
					else :
						foreach ($dokumenBuku as $row):
				?>
				<div class="row-fluid data-user alert-info">
					<table class="table table-bordered table-condensed table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Judul</th>
									<th>Pengarang</th>
									<th>Tahun</th>
								</tr>
							</thead>
							<tbody id="document-data">
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
						<hr>
						<div class="pagination pagination-centered pagination-medium" id="pagination">
							<ul>
								<li><a href="">&laquo;</a></li>
								<li><a href="">1</a></li>
								<li><a href="">&raquo;</a></li>
							</ul>
						</div>
				<!--	<div class="span4">
						<a href="#image" class="thumbnail"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" alt=""/></a>
					</div>
					<div class="span8">
								<h2><?php echo $row->PENGARANG_DOKUMEN ?> </h2>
								<h4><?php echo $row->TAHUN_PENERBITAN_DOKUMEN ?> </h4>
						<div class="btn-group">
							<button class="btn btn-mini btn-info" onClick="editDokumenBuku(this, <?php echo $row->ID_DOKUMEN ?>)"><i class="icon-wrench icon-white"></i> Edit</button>
							<button class="btn btn-mini btn-info" onClick="deleteDokumenBuku(this, <?php echo $row->ID_DOKUMEN ?>)"><i class="icon-trash icon-white"></i> Delete</button>
							<button class="btn btn-mini btn-info" onClick="detailDokumenBuku(this, <?php echo $row->ID_DOKUMEN ?>)"><i class="icon-map-marker icon-white"></i> Detail</button>
						</div>
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
				-->
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
			<script src="/js/download.js"></script>
</body>
</html>