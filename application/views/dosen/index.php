<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Dosen | Beranda</title>
	<link href="/third_party/bootstrap/css/elemento.min.css" rel="stylesheet" type="text/css">
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
	<link href="/third_party/alertify/alertify.core.css" rel="stylesheet" type="text/css">
	<link href="/third_party/alertify/alertify.default.css" rel="stylesheet" type="text/css">
	<link href="/css/main.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		body{
			background-image:url('/images/bg-1.jpg') ;
		}
		#logo-baru {
			position:absolute;
			height: 40px;
			width:220px;
			margin-top: 15px;
		}
		#image {
			float: left;
			margin: 0px 15px 10px 0px;
		}
		.label-inverse{
		align:center;
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
					<li><a href="/dosen/profildosen"><i class="icon-user icon-large"></i> Profil</a></li>
					<li><a href="/welcome/logout"><i class="icon-remove icon-large"></i> Logout</a></li>
				  
				</ul>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
<div class="container">
	<img src="/images/header/main-header.png" alt="dosen Header">
</div>
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
			<div>
				<ul class="breadcrumb">
				<li class="active">Data</li>
				</ul>
			</div>
			<div class="row-fluid" id="data-section">
				<div class="tabbable span12">
						<ul class="nav nav-tabs" id="tab-dokumen">
							<li class="active"><a href="#jurnal" data-toggle="tab">JURNAL</a></li>
							<li><a href="#buku" data-toggle="tab">BUKU</a></li>
							<li><a href="#modul" data-toggle="tab">MODUL</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="jurnal">
								<div class="navbar navbar-inner">
										<form class="navbar-form pull-left" id="form-jurnal">
											<input class="model" id="cari-jurnal" name="query_jurnal" placeholder="Search Jurnal" type="text">
											<button class="btn" onClick="return Jurnal.search()"><i class="icon-search"></i></button>
										</form>
										<button class="btn pull-right" type="button" onClick="tambahDokumen()" id="buka1"><i class="icon-plus-sign"></i></button>
								</div>
									<table class="table">
										<thead>
											<tr>
												<th>JUDUL</th>
												<th>PENGARANG</th>
												<th>PPROLOG</th>
												<th>TAHUN TERBIT</th>
												<th>KATA KUNCI DOKUMEN</th>
												<th>AKSI</th>
											</tr>
										</thead>
										<tbody id="dosen-jurnal">
										
										</tbody>
									</table>
									<div class="pagination pagination-centered" id="pagination-jurnal">
										<ul>
											
										</ul>
									</div>
								</div>
							<div class="tab-pane" id="buku">
								<div class="navbar navbar-inner">
									<form class="navbar-form pull-left" id="form-buku">
											<input class="model" id="cari-buku" name="query_buku" placeholder="Search Buku" type="text">
											<button class="btn" onClick="return Buku.search()"><i class="icon-search"></i></button>
									</form>
									<button class="btn pull-right" type="button" onClick="tambahDokumen()"><i class="icon-plus-sign"></i></button>
								</div>
								
								<table class="table">
									<thead>
										<tr>
											<th>JUDUL</th>
											<th>PENGARANG</th>
											<th>PPROLOG</th>
											<th>TAHUN TERBIT</th>
											<th>KATA KUNCI DOKUMEN</th>
											<th>AKSI</th>
										</tr>
									</thead>
									<tbody id="dosen-buku">
										
									</tbody>
								</table>
								<div class="pagination pagination-centered" id="pagination-buku">
									
								</div>
							</div>
							<div class="tab-pane" id="modul">
								<div class="navbar navbar-inner">
									<form class="navbar-form pull-left" id="form-modul">
											<input class="model" id="cari-modul" name="query_modul" placeholder="Search Modul" type="text">
											<button class="btn" onClick="return Modul.search()"><i class="icon-search"></i></button>
									</form>
									<button class="btn pull-right" type="button" onClick="tambahDokumen()" id="buka"><i class="icon-plus-sign"></i></button>
								</div>
								<table class="table">
									<thead>
										<tr>
											<th>JUDUL</th>
											<th>PENGARANG</th>
											<th>PPROLOG</th>
											<th>TAHUN TERBIT</th>
											<th>KATA KUNCI DOKUMEN</th>
											<th>AKSI</th>
										</tr>
									</thead>
									<tbody id="dosen-modul">
									</tbody>
								</table>
								<div class="pagination pagination-centered" id="pagination-modul">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
			<!--ini bagian tambah dokumen-->
			<div class="row-fluid hide" id="form-section">
				<form class="form-horizontal" id="form-tambah" action="" method="POST" enctype="multipart/form-data">
					<div class="well span12">
						<a href="#" class="btn btn-inverse pull-right" onClick="return closeForm()" id="tutup"><i class="icon-remove-sign"></i></a>
						<input type="hidden" name="kategori_dokumen" id="kategori-dokumen" value="jurnal">
						<input type="hidden" id="id-dokumen" name="id_dokumen" value="">
						
						<legend id="form-legend">	
						</legend>
						<fieldset>
							<div class="control-group">
								<label class="control-label control-label-min" for="judul-dokumen">Judul Dokumen</label>
								<div class="controls controls-min">
									<input id="judul-dokumen" name="judul_dokumen" type="text" required="" value="<?php $this->form_validation->set_value('judul_dokumen');?>" placeholder="Judul Dokumen">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="pengarang-dokumen">Pengarang Dokumen</label>
								<div class="controls controls-min">	
									<input name="pengarang_dokumen" id="pengarang-dokumen" type="text" required="" placeholder="Pengarang Dokumen">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="prolog-dokumen">Prolog Dokumen</label>
								<div class="controls controls-min">	
									<textarea rows="3" name="prolog_dokumen" id="prolog-dokumen"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="tahun-penerbitan-dokumen">Tahun Penerbitan</label>
								<div class="controls controls-min">	
									<input name="tahun_penerbitan_dokumen" id="tahun-penerbitan-dokumen" type="text" required="" placeholder="Tahun Penerbitan">
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label control-label-min" for="file-dokumen">File Dokumen</label>
								<div class="controls controls-min">	
									<input name="file_dokumen" id="file-dokumen" type="file" required="" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="foto-dokumen">Foto Dokumen</label>
								<div class="controls controls-min">	
									<input name="foto_dokumen" id="foto-dokumen" type="file" required="" >
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="kata-kunci-dokumen">Kata Kunci Dokumen</label>
								<div class="controls controls-min">	
									<input name="kata_kunci_dokumen" id="kata-kunci-dokumen" type="text" required="" placeholder="Kata Kunci Dokumen">
								</div>
							</div>
							<div class="form-actions">
								<button class="btn btn-info btn-mini" type="button" onClick="return closeForm()"> Cancel</button>
								<button class="btn btn-info btn-mini" type="submit" >Simpan</button>
							</div>
							<hr>
						</fieldset>
					</div>	
				</form>	
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
</div>
	<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
	<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
	<script src="/third_party/bootstrap/bootstrap.min.js"></script>
	<script src="/third_party/alertify/alertify.min.js"></script>
	<script src="/js/dosen.js"></script>
	<script src="/js/paging.dosen.js"></script>

	<script type="text/javascript">
$('#buka').attr('title', 'tambah dokumen').tooltip();
$('#buka1').attr('title', 'tambah dokumen').tooltip();
$('#tutup').attr('title', 'Tutup').tooltip();
</script>

</body>
</html>