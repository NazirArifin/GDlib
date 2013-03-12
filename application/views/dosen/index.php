<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Dosen | Beranda</title>
	<link href="/third_party/bootstrap/css/elemento.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
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
		<div class="span3">
			<div class="well">
				<ul class="thumbnails">
					<li class="span12">
						<a href="#" class="thumbnail"><img src="/images/rud.jpg" alt=""></a>
					</li>
				</ul>
				<span class="label label-inverse">Username | 0955201554</span>
			</div>
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
		<div class="well span9">
			<div>
				<ul class="breadcrumb">
				<li><a href="/">Home</a> <span class="divider">/</span></li>
				<li><a href="#">Dosen</a> <span class="divider">/</span></li>
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
									<form class="navbar-search pull-left">
										<input type="text" class="search-query" placeholder="Cari Dokumen" id="cari">
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
									<tbody>
									<?php
											$jurnal=$controller->dosen_model->tampilJurnal();
											if ($jurnal == 0):
												echo '<tr><td colspan="6"><div class="alert-info" style="text-align:center;">Data Jurnal Tidak Ada</div></td></tr>';
											else :
												foreach ($jurnal as $row):
									 ?>
										<tr>
											<td><?php echo $row->JUDUL_DOKUMEN?></td>
											<td><?php echo $row->PENGARANG_DOKUMEN?></td>
											<td><?php echo $row->PROLOG_DOKUMEN?></td>
											<td><?php echo $row->TAHUN_PENERBITAN_DOKUMEN?></td>
											<td><?php echo $row->KATA_KUNCI_DOKUMEN?></td>
											<td>
												<div class="btn-group">
													<button class="btn btn-danger btn-mini" onClick="deleteDokumen(this,<?php echo $row-> ID_DOKUMEN ?>)" >Hapus</button> 
													<button class="btn btn-warning btn-mini" onClick="editDokumen(this,<?php echo $row-> ID_DOKUMEN ?>)" >Edit</button> 
													<button class="btn btn-success btn-mini">Lihat</button>
												</div>
											</td>
										</tr>
										<?php
											endforeach;
										endif;
										?>
									</tbody>
								</table>
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
							<div class="tab-pane" id="buku">
								<div class="navbar navbar-inner">
									<form class="navbar-search pull-left">
										<input type="text" class="search-query" placeholder="Cari Dokumen" id="cari">
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
									<tbody>
										<?php
											$buku=$controller->dosen_model->tampilBuku();
											if($buku==0):
												echo '<tr><td colspan="6"><div class="alert-info" style="text-align:center;">Data Buku Tidak Ada</div></td></tr>';
											else:
												foreach($buku as $row):
											
										?>
										<tr>
											<td><?php echo $row->JUDUL_DOKUMEN?></td>
											<td><?php echo $row->PENGARANG_DOKUMEN?></td>
											<td><?php echo $row->PROLOG_DOKUMEN?></td>
											<td><?php echo $row->TAHUN_PENERBITAN_DOKUMEN?></td>
											<td><?php echo $row->KATA_KUNCI_DOKUMEN?></td>
											<td>
												<div class="btn-group">
													<button class="btn btn-danger btn-mini" onClick="deleteDokumen(this,<?php echo $row-> ID_DOKUMEN ?>)">Hapus</button> 
													<button class="btn btn-warning btn-mini" onClick="editDokumen(this,<?php echo $row-> ID_DOKUMEN ?>)"> Edit</button> 
													<button class="btn btn-success btn-mini">Lihat</button>
												</div>
											</td>
										</tr>
										<?
												endforeach;
											endif;
										?>
									</tbody>
								</table>
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
							<div class="tab-pane" id="modul">
								<div class="navbar navbar-inner">
									<form class="navbar-search pull-left">
										<input type="text" class="search-query" placeholder="Cari Dokumen" id="cari">
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
									<tbody>
										<?php
											$modul=$controller->dosen_model->tampilModul();
											if($modul==0):
												echo '<tr><td colspan="6"><div class="alert-info" style="text-align:center;">Data Modul Tidak Ada</div></td></tr>';
											else:
												foreach($modul as $row):
										?>
										<tr>
											<td><?php echo $row->JUDUL_DOKUMEN?></td>
											<td><?php echo $row->PENGARANG_DOKUMEN?></td>
											<td><?php echo $row->PROLOG_DOKUMEN?></td>
											<td><?php echo $row->TAHUN_PENERBITAN_DOKUMEN?></td>
											<td><?php echo $row->KATA_KUNCI_DOKUMEN?></td>
											<td>
												<div class="btn-group">
													<button class="btn btn-danger btn-mini" onClick="deleteDokumen(this,<?php echo $row-> ID_DOKUMEN ?>)">Hapus</button> 
													<button class="btn btn-warning btn-mini" onClick="editDokumen(this,<?php echo $row-> ID_DOKUMEN ?>)">Edit</button> 
													<button class="btn btn-success btn-mini">Lihat</button>
												</div>
											</td>
										</tr>
										<?php
												endforeach;
											endif;
										?>
									</tbody>
								</table>
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
									<input id="judul-dokumen" name="judul_dokumen" type="text" required="" placeholder="Judul Dokumen">
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
<script type="text/javascript">
$('#buka').attr('title', 'tambah dokumen').tooltip();
$('#buka1').attr('title', 'tambah dokumen').tooltip();
$('#tutup').attr('title', 'Tutup').tooltip();
</script>

</body>
</html>