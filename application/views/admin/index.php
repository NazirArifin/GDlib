<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Admin</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
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
		<li class="nav-header">Pengguna</li>
		<li><a href="/admin/dosen"><i class="icon-user"></i> Dosen</a></li>
		<li><a href="/admin/mahasiswa"><i class="icon-user"></i> Mahasiswa</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Dokumen</li>
		<li><a href="/admin/jurnal"><i class="icon-file"></i> Jurnal</a></li>
		<li><a href="/admin/buku"><i class="icon-file"></i> Buku</a></li>
		<li><a href="/admin/modul"><i class="icon-file"></i> Model</a></li>
		<li><a href="/admin/buletin"><i class="icon-file"></i> Buletin</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Lainnya</li>
		<li><a href="/admin/news"><i class="icon-warning-sign"></i> Berita</a></li>
	</ul>
        
</div>
    <div class="well span9 pull-right">
     <!-- menu tab untuk member -->
		<div class="">
	 <h2>Member</h2>
	 <?php
		$userDosen=$controller->admin_model->tampil_where_level_dosen();
		($userDosen == false ? $banyakDosen=0 : $banyakDosen = count($userDosen));
		$userMahasiswa=$controller->admin_model->tampil_where_level_mahasiswa();
		($userMahasiswa == false ? $banyakMahasiswa=0 : $banyakMahasiswa = count($userMahasiswa));
	 ?>
	 <input type="text" class="input-medium search-query" placeholder="Cari Member" ><br><br>
	 <ul class="nav nav-tabs" id="tab-member">
	  <li class="active"><a href="#dosen" onClick="return tabAdminDosen()">Dosen <span class="badge badge-info"><?php echo $banyakDosen ?></span></a></li>
	  <li><a href="#maha" onClick="return tabAdminMahasiswa()">Mahasiswa <span class="badge badge-info"> 0 </span></a></li>
	  
	</ul>
	 
	<div class="tab-content">
	<!--tab untuk dosen-->
	  <div class="tab-pane active" id="dosen">
		<table class="table table-striped">
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>No. Induk</th>
			  <th>ID Facebook</th>
			  <th>Aksi</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php
				$userDosen=$controller->admin_model->tampil_where_level_dosen();
				if ($userDosen == 0):
					echo 'habib';
				else :
					foreach ($userDosen as $row):
		  ?>
			<tr>
			  <td><a href="#" class="screenshot" rel="images/ct.jpg"><?php echo $row->NAMA_USER ?></a></td>
			  <td><?php echo $row->NO_INDUK_USER ?></td>
			  <td><?php echo $row->ID_FACEBOOK_USER ?></td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
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
			  <th>Judul</th>
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
			  <td><?php echo $row->NAMA_USER ?></td>
			  <td><?php echo $row->NO_INDUK_USER ?></td>
			  <td><?php echo $row->ID_FACEBOOK_USER ?></td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
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
	 <h2>Dokument</h2>
	 <input type="text" class="input-medium search-query" placeholder="Cari Dokument" ><br><br>
	 <ul class="nav nav-tabs" id="tab-dok">
	  <li class="active"><a href="#jurnal">Jurnal</a></li>
	  <li><a href="#buku">Buku</a></li>
	  <li><a href="#modul">Modul</a></li>
	  <li><a href="#buletin">Buletin</a></li>
	</ul>
	 
	<div class="tab-content">
	<!--tab untuk jurnal-->
	  <div class="tab-pane active" id="jurnal">
		<table class="table">
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Revolution</td>
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
			  <td>RIP</td>
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
			  <td>Kroncong Protol</td>
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
	  <!--tab buku-->
	  <div class="tab-pane" id="buku">
	  <table class="table">
		  
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Harry Potter</td>
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
			  <td>Twilight</td>
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
			  <td>Janc#k</td>
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
	  <!--tab modul-->
	  <div class="tab-pane" id="modul">
	  <table class="table">
		  
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Algoritma</td>
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
			  <td>Aljabar</td>
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
			  <td>Teknik Digital</td>
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
			  <button class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Hapus</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-edit icon-white"></i> Edit</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> Lihat</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Liputan 6</td>
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
			  <td>Silet</td>
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
	<!-- halaman News -->
	<div class="">
	<h2>News</h2>
	<input type="text" class="input-medium search-query" placeholder="Cari Member" ><br><br>
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
		  <td><label class="label label-important">Banned</label></td>
		</tr>
		<tr>
		  <td><img src="/images/ogo.png" class="image-admin"></td>
		  <td>Accident</td>
		  <td>Lorem ipsum dolor sit amet</td>
		  <td><label class="label label-success">active</label></td>
		</tr>
		<tr>
		  <td><img src="/images/ogo.png" class="image-admin"></td>
		  <td>LOL</td>
		  <td>Lorem ipsum dolor sit amet</td>
		  <td><label class="label label-warning">g jelas</label></td>
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
	$('.btn-danger').attr('title', 'klik untuk menghapus').tooltip();
	$('.btn-warning').attr('title', 'klik untuk mengedit').tooltip();
	$('.btn-success').attr('title', 'klik untuk melihat').tooltip();
</script>

</body>
</html>