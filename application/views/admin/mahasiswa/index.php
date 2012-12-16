<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Mahasiswa</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/static/css/main.css" />
			
			<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>

    <style type="text/css">
	#logo{
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
				<li><a href="/admin/model"><i class="icon-file"></i> Model</a></li>
				<li><a href="/admin/buletin"><i class="icon-file"></i> Buletin</a></li>
				<li class="divider"></li>
				
				<li class="nav-header">Lainnya</li>
				<li><a href="/admin/news"><i class="icon-warning-sign"></i> Berita</a></li>
			</ul>
		</div>
		<div class="well span9 pull-right">
			<input type="text" class="input-medium search-query" >
			<button class="btn btn-mini btn-info pull-right" id="tombol"><i class="icon-plus icon-white"></i></button><br><br><br>
			<div class="container-fluid">
				
				<?php
					$mahasiswa=$controller->admin_model->tampilUserMahasiswa();
					if($mahasiswa==0):
						printf("Data Mahasiswa tidak ada");
					else:
						foreach($mahasiswa as $row):
				?>
				<div class="row-fluid data-user">
						<div class="span4">
							<img src="/images/ogo.png" alt=""/>
						</div>
						<div class="span8">
										<h2><?php echo $row->NAMA_USER ?> </h2>
										<h4><?php echo $row->NO_INDUK_USER ?> </h4>
										<h5><?php echo $row->ID_FACEBOOK_USER ?> </h5>
							<button class="btn btn-mini btn-info" onClick="editUserDosen(this, <?php echo $row->ID_USER ?>)"><i class="icon-wrench icon-white"></i> Edit</button>
							<button class="btn btn-mini btn-info" onClick="deleteUserDosen(this, <?php echo $row->ID_USER ?>)"><i class="icon-trash icon-white"></i> Delete</button>
							<button class="btn btn-mini btn-info" onClick="detailUserDosen(this, <?php echo $row->ID_USER ?>)"><i class="icon-map-marker icon-white"></i> Detail</button>
						</div>
				<hr>
				</div>
					<?php
					endforeach;
					endif;
					?>
			</div>
			<hr>
			<hr>
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
</body>
</html>