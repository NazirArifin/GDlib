<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Admin</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/main.css" />
    <style type="text/css">
	#logo {
	height: 31px;
	margin-top: 2px;
	}
	#screenshot{
	position:absolute;
	border:1px solid #ccc;
	background:#333;
	padding:5px;
	display:none;
	color:#fff;
	height:150px;
	width:200px;
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
     <!-- menu tab untuk member -->
		<div class="">
			<div class="navbar navbar-inner">
				<a class="brand">Member</a>
				<form class="navbar-search pull-right">
					  <input type="text" class="search-query" placeholder="Cari Member">
				</form>
			</div>
				 <?php
					$userDosen=$controller->admin_model->tampil_where_level_dosen();
					($userDosen == false ? $banyakDosen=0 : $banyakDosen = count($userDosen));
					$userMahasiswa=$controller->admin_model->tampil_where_level_mahasiswa();
					($userMahasiswa == false ? $banyakMahasiswa=0 : $banyakMahasiswa = count($userMahasiswa));
				 ?>
	 <ul class="nav nav-tabs" id="tab-member">
	  <li class="active"><a href="#dosen" onClick="return tabAdminDosen()">Dosen <span class="badge badge-info"> <?php echo $banyakDosen ?> </span></a></li>
	  <li><a href="#maha" onClick="return tabAdminMahasiswa()">Mahasiswa <span class="badge badge-info"> <?php echo $banyakMahasiswa ?> </span></a></li>
	  
	</ul>
	 
	<div class="tab-content">
	<!--tab untuk dosen-->
	  <div class="tab-pane active" id="dosen">
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th>Nama</th>
			  <th>No. Induk</th>
			  <th>ID Facebook</th>
			  <th>Aksi</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$userDosen=$controller->admin_model->tampil_where_level_dosen();
				if ($userDosen == 0):
					echo '<tr><td colspan="4"><div class="alert-info" style="text-align:center;">Data Dosen Tidak Ada</div></td></tr>';
				else :
					foreach ($userDosen as $row):
		  ?>
			<tr>
			  <td><a href="#" class="screenshot" rel="/images/ct.jpg"><?php echo $row->NAMA_USER ?></a></td>
			  <td><?php echo $row->NO_INDUK_USER ?></td>
			  <td><?php echo $row->ID_FACEBOOK_USER ?></td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
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
	  <!--tab mahasiswa-->
	  <div class="tab-pane" id="maha">
	  <table class="table table-striped">
		  <thead>
			<tr>
			  <th>Nama</th>
			  <th>No. Induk</th>
			  <th>ID Facebook</th>
			  <th>Aksi</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$userMahasiswa=$controller->admin_model->tampil_where_level_mahasiswa();
				if ($userMahasiswa == 0):
					echo '<tr><td colspan="4"><div class="alert-info" style="text-align:center;">Data Mahasiswa Tidak Ada</div></td></tr>';
				else :
					foreach ($userMahasiswa as $row):
		  ?>
			<tr>
			  <td><a href="#" class="screenshot" rel="images/ct.jpg"><?php echo $row->NAMA_USER ?></a></td>
			  <td><?php echo $row->NO_INDUK_USER ?></td>
			  <td><?php echo $row->ID_FACEBOOK_USER ?></td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
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
	 <!--menu tab dokument-->
	 <div class="">
		<div class="navbar navbar-inner">
			<a class="brand">Dokumen</a>
				<form class="navbar-search pull-right">
					  <input type="text" class="search-query" placeholder="Cari Dokumen">
				</form>
		</div>
		 <?php
		/* jurnal */	$jumlahJurnal=$controller->admin_model->tampil_where_kategori_jurnal();
		/* jurnal */	($jumlahJurnal == false ? $banyakJurnal=0 : $banyakJurnal = count($jumlahJurnal));
		/* buku */	$jumlahBuku=$controller->admin_model->tampil_where_kategori_buku();
		/* buku */	($jumlahBuku == false ? $banyakBuku=0 : $banyakBuku = count($jumlahBuku));
		/* modul */	$jumlahModul=$controller->admin_model->tampil_where_kategori_modul();
		/* modul */	($jumlahModul == false ? $banyakModul=0 : $banyakModul = count($jumlahModul));
		 ?>
		<ul class="nav nav-tabs" id="tab-dok">
			<li class="active"><a href="#jurnal">Jurnal <span class="badge badge-info"> <?php echo $banyakJurnal ?> </span></a></li>
			<li><a href="#buku">Buku <span class="badge badge-info"> <?php echo $banyakBuku ?> </span></a></li>
			<li><a href="#modul">Modul <span class="badge badge-info"> <?php echo $banyakModul ?> </span></a></li>
			<li><a href="#buletin">Buletin</a></li>
		</ul>
	 
	<div class="tab-content">
	<!--tab untuk jurnal-->
	  <div class="tab-pane active" id="jurnal">
		<table class="table">
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Pengarang</th>
			  <th>Tahun Penerbitan</th>
			  <th>Aksi</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$dokumenJurnal=$controller->admin_model->tampil_where_kategori_jurnal();
				if ($dokumenJurnal == 0):
					echo '<tr><td colspan="4"><div class="alert-info" style="text-align:center;">Dokumen Jurnal Tidak Ada</div></td></tr>';
				else :
					foreach ($dokumenJurnal as $row):
		  ?>
			<tr>
			  <td><a href="#" class="screenshot" rel="<?php echo $row->FOTO_DOKUMEN ?>"><?php echo $row->JUDUL_DOKUMEN ?></a></td>
			  <td><?php echo $row->PENGARANG_DOKUMEN ?></td>
			  <td><?php echo $row->TAHUN_PENERBITAN_DOKUMEN ?></td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
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
	  <!--tab buku-->
	  <div class="tab-pane" id="buku">
	  <table class="table">
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Pengarang</th>
			  <th>Tahun Penerbitan</th>
			  <th>Aksi</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$dokumenBuku=$controller->admin_model->tampil_where_kategori_buku();
				if ($dokumenBuku == 0):
					echo '<tr><td colspan="4"><div class="alert-info" style="text-align:center;">Dokumen Buku Tidak Ada</div></td></tr>';
				else :
					foreach ($dokumenBuku as $row):
		  ?>
			<tr>
			  <td><a href="#" class="screenshot" rel="<?php echo $row->FOTO_DOKUMEN ?>"><?php echo $row->JUDUL_DOKUMEN ?></a></td>
			  <td><?php echo $row->PENGARANG_DOKUMEN ?></td>
			  <td><?php echo $row->TAHUN_PENERBITAN_DOKUMEN ?></td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
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
	  <!--tab modul-->
	  <div class="tab-pane" id="modul">
	  <table class="table">
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Pengarang</th>
			  <th>Tahun Penerbitan</th>
			  <th>Aksi</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$dokumenModul=$controller->admin_model->tampil_where_kategori_modul();
				if ($dokumenModul == 0):
					echo '<tr><td colspan="4"><div class="alert-info" style="text-align:center;">Dokumen Modul Tidak Ada</div></td></tr>';
				else :
					foreach ($dokumenModul as $row):
		  ?>
			<tr>
			  <td><a href="#" class="screenshot" rel="<?php echo $row->FOTO_DOKUMEN ?>"><?php echo $row->JUDUL_DOKUMEN ?></a></td>
			  <td><?php echo $row->PENGARANG_DOKUMEN ?></td>
			  <td><?php echo $row->TAHUN_PENERBITAN_DOKUMEN ?></td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
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
	  <!--tab bulletin-->
	  <div class="tab-pane" id="buletin">
	  <table class="table">
		  
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Buletin Siang</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Liputan 6</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Silet</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i></button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i></button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i></button>
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
	<!-- halaman News -->
	<div class="">
		<div class="navbar navbar-inner">
			<a class="brand">Buletin</a>
				<form class="navbar-search pull-right">
					  <input type="text" class="search-query" placeholder="Cari Buletin">
				</form>
		</div>
    <table class="table">
	  <thead>
		<tr>
		  <th>Foto</th>
		  <th>Judul</th>
		  <th>Cuplikan</th>
		  <th>Status</th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td><img src="/images/ogo.png" class="image-admin"></td>
		  <td>WTF</td>
		  <td>Lorem ipsum dolor sit amet</td>
		  <td><label class="label label-important"><i class="icon-off icon-white"></i></label></td>
		</tr>
		<tr>
		  <td><img src="/images/ogo.png" class="image-admin"></td>
		  <td>Accident</td>
		  <td>Lorem ipsum dolor sit amet</td>
		  <td><label class="label label-success"><i class="icon-play icon-white"></i></label></td>
		</tr>
		<tr>
		  <td><img src="/images/ogo.png" class="image-admin"></td>
		  <td>LOL</td>
		  <td>Lorem ipsum dolor sit amet</td>
		  <td><label class="label label-warning"><i class="icon-warning-sign icon-white"></i></label></td>
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
			<script src="/third_party/jquery/tooltip/main-tooltip.js"></script>
			<script src="/js/admin.js"></script>
<script type="text/javascript">
	$('#tab-dok a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
	$('#tab-member a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
	$('.icon-trash').attr('title', 'klik untuk menghapus').tooltip();
	$('.icon-edit').attr('title', 'klik untuk mengedit').tooltip();
	$('.icon-share-alt').attr('title', 'klik untuk melihat').tooltip();
	
	$('.label-important').attr('title', 'akun sudah tidak aktif').tooltip();
	$('.label-success').attr('title', 'akun aktif').tooltip();
	$('.label-warning').attr('title', 'akun ini tidak di kenal').tooltip();
</script>

</body>
</html>