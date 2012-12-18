<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Dosen | Beranda</title>
	<link href="/third_party/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link href="/third_party/alertify/alertify.core.css" rel="stylesheet" type="text/css">
	<link href="/third_party/alertify/alertify.default.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#logo {
			height: 31px;
			margin-top: 0px;
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
		<div class="span2">
			<div class="well">
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
			<div class="well">
			<div class="sidebar-nav">
				<div>
					<ul class="nav nav-tabs nav-stacked">
						<li class="nav-header"><h3>Dokumen</h3></li>
						<li><a href="#"><i class="icon-file"></i> JURNAL</a></li>
						<li><a href="#"><i class="icon-file"></i> BUKU</a></li>
						<li><a href="#"><i class="icon-file"></i> MODUL</a></li>
						<li><a href="#"><i class="icon-file"></i> BULETIN</a></li>
						<li class="divider"></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
		<div class="span10">
			<div>
				<ul class="breadcrumb">
				<li><a href="/">Home</a> <span class="divider">/</span></li>
				<li><a href="#">Dosen</a> <span class="divider">/</span></li>
				<li class="active">Data</li>
				</ul>
			</div>
			<div class="row-fluid">
				<form class="form-horizontal" id="form-view-jurnal" action="" method="POST">
				<div class="span10">
					<div class="tabbable">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#jurnal" data-toggle="tab">JURNAL</a></li>
							<li><a href="#buku" data-toggle="tab">BUKU</a></li>
							<li><a href="#modul" data-toggle="tab">MODUL</a></li>
							<li><a href="#buletin" data-toggle="tab">BULETIN</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="jurnal">
								<form class="navbar-search pull-left">
								<input type="text" class="search-query" placeholder="Search">
								</form>
								<button class="btn pull-right" type="button" onClick="tambahjurnal()"><i class="icon-plus"></i></button>
								<table class="table">
									<thead>
										<tr>
											<th>JUDUL</th>
											<th>TANGGAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Jurnal_1</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Jurnal_2</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button>
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button>
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Jurnal_3</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Jurnal_4</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
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
								<form class="navbar-search pull-left">
								<input type="text" class="search-query" placeholder="Search">
								</form>
								<button class="btn pull-right" type="button" ><i class="icon-plus"></i></button>
								<table class="table">
									<thead>
										<tr>
											<th>JUDUL</th>
											<th>TANGGAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Buku_1</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Buku_2</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Buku_3</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Buku_4</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
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
								<form class="navbar-search pull-left">
								<input type="text" class="search-query" placeholder="Search">
								</form>
								<button class="btn pull-right" type="button" ><i class="icon-plus"></i></button>
								<table class="table">
									<thead>
										<tr>
											<th>JUDUL</th>
											<th>TANGGAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Modul_1</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Modul_2</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Modul_3</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Modul_4</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
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
							<div class="tab-pane" id="buletin">
								<form class="navbar-search pull-left">
								<input type="text" class="search-query" placeholder="Search">
								</form>
								<button class="btn pull-right" type="button" ><i class="icon-plus"></i></button>
								<table class="table">
									<thead>
										<tr>
											<th>JUDUL</th>
											<th>TANGGAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Buletin_1</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Buletin_2</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Buletin_3</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
										<tr>
											<td>Buletin_4</td>
											<td>12/12/12</td>
											<td>
											<div class="btn-group">
											<button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button> 
											<button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button> 
											<button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
											</div>
											</td>
										</tr>
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
				</form>
			</div>
			<!--ini bagian tambah jurnal-->
			<div class="row-fluid">
				<form class="form-horizontal hide" id="form-tambah" action="" method="POST" enctype="multipart/form-data">
					<div class="well span12">
						<a href="#" class="btn btn-info btn-mini pull-right" onClick="return closejurnal()"><i class="icon-remove icon-white"></i></a>
						<fieldset>
								<legend>Upload Jurnal</legend>	
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
								<label class="control-label control-label-min" for="tahun-penerbitan-dokumen">File Dokumen</label>
								<div class="controls controls-min">	
									<input name="file_dokumen" id="file-dokumen" type="file" required="" placeholder="Tahun Penerbitan">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="foto-dokumen">Foto Dokumen</label>
								<div class="controls controls-min">	
									<input name="foto_dokumen" id="foto-dokumen" type="file" required="" placeholder="Foto Dokumen">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label control-label-min" for="kata-kunci-dokumen">Kata Kunci Dokumen</label>
								<div class="controls controls-min">	
									<input name="kata_kunci_dokumen" id="kata-kunci-dokumen" type="text" required="" placeholder="Kata Kunci Dokumen">
								</div>
							</div>
							<div class="form-actions">
								<button class="btn btn-info btn-mini" type="button" onClick="return closejurnal()"><i class="icon-remove icon-white"></i> Cancel</button>
								<button class="btn btn-info btn-mini" type="submit" ><i class="icon-ok icon-white" ></i> Simpan</button>
							</div>
							<hr>
						</fieldset>
					</div>	
				</form>	
			</div>	
			<!--ini bagian kontent-->
				<div class="row-fluid">
					<div class="span12">
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" class="img-polaroid" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Hapus</a>
						</div>
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" class="img-polaroid" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Hapus</a>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" class="img-polaroid" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Hapus</a>
						</div>
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" class="img-polaroid" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Hapus</a>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
</body>
	<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
	<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
	<script src="/third_party/bootstrap/bootstrap.min.js"></script>
	<script src="/third_party/alertify/alertify.min.js"></script>
	<script src="/js/dosen.js"></script>
</html>