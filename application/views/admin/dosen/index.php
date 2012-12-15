<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Dosen</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/css/style.css" />
			
			<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/js/admin.js"></script>

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
		<li><a href="/admin/model"><i class="icon-file"></i> Model</a></li>
		<li><a href="/admin/buletin"><i class="icon-file"></i> Buletin</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Lainnya</li>
		<li><a href="/admin/news"><i class="icon-warning-sign"></i> Berita</a></li>
	</ul>
		</div>
		<div class="well span9 pull-right">
			<?php
					if ($this->session->flashdata('message')){
						echo "<div class='alert'>".$this->session->flashdata('message')."</div>";
					}
			?>
			<form class="form-horizontal hide" id="form-tambah" action="/admin/dosen/add" method="POST" enctype="multipart/form-data">
			<a href="#" class="btn btn-info btn-mini pull-right" onClick="return sclose()"><i class="icon-remove icon-white"></i></a>
			<legend>Tambah User Dosen</legend>
				<div class="control-group">
					<label class="control-label control-label-min" for="id-user">Level User</label>
					<div class="controls controls-min">
						<select class="user" name="id_level_user">
							<?php
								$id_user = $controller->admin_model->tampil_level_user();
								foreach ($id_user as $row):
							?>
								<option value="<?php echo $row->ID_LEVEL_USER ?>"><?php echo $row->NAMA_LEVEL_USER ?></option>
							<?php
								endforeach;
							?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="nama-profil">Nama</label>
					<div class="controls controls-min">
						<input id="nama-user" name="nama_user" type="text" required="" placeholder="Your Name">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="aktivitas">Aktivitas User</label>
					<div class="controls controls-min">				
						<textarea name="aktivitas" id="aktivitas"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="no-induk-user">No. Induk User</label>
					<div class="controls controls-min">	
						<input name="no_induk_user" id="no-induk-user" type="text" required="" placeholder="No. Induk User">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="id-facebook">ID Facebook User</label>
					<div class="controls controls-min">	
						<input name="id_facebook" id="id-facebook" type="text" required="" placeholder="ID Facebook">
					</div>
				</div>
				<div class="form-actions">
					<button href="#" class="btn btn-info btn-mini" data-dismiss="modal" id="close"><i class="icon-remove icon-white"></i> Close</button>
					<button  href="#" class="btn btn-info btn-mini" type="submit"><i class="icon-ok icon-white"></i> Simpan</button>
				</div>
				<hr>
				</form>
			<input type="text" class="input-medium search-query" >
			<button class="btn btn-mini btn-info pull-right" id="tombol" onClick="return tambahDosen()"><i class="icon-plus icon-white"></i></button><br><br><br>
			<div class="container-fluid">
			<?php
				$dosen=$controller->admin_model->tampilUserDosen();
					if ($dosen==0):
						printf("Data Dosen tidak ada");
					else: 
					foreach ($dosen as $row):
				?>
				<div class="row-fluid">
						<div class="span4">
							<img src="/images/animal1.png" alt=""/>
						</div>
						<div class="span8">
										<h2><?php echo $row->NAMA_USER ?> </h2>
										<h4><?php echo $row->AKTIVITAS_USER ?> </h4>
										<h4><?php echo $row->NO_INDUK_USER ?> </h4>
										<h5><?php echo $row->ID_FACEBOOK_USER ?> </h5>
							<button class="btn btn-mini btn-info tombol2"><i class="icon-wrench icon-white"></i> Edit</button>
							<button class="btn btn-mini btn-info"><i class="icon-trash icon-white"></i> Delete</button>
							<button class="btn btn-mini btn-info"><i class="icon-map-marker icon-white"></i> Detail</button>
						</div>
				</div>
				<hr>
					<?php
					endforeach;
					endif;
					?>
			</div>
					<div class="pagination" align="center">
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
</body>
</html>