<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Dosen</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/static/css/style.css" />
			
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
			<form class="form-horizontal hide" id="form-tambah" action="/admin/dosen/add" method="POST">
			<legend>Tambah User Dosen</legend>
				<div class="control-group">
					<?php
					if ($this->session->flashdata('message')){
						echo "<i>".$this->session->flashdata('message')."</i>";
					}
					?>
					<label class="control-label control-label-min" for="id-user">ID User</label>
					<div class="controls controls-min">
						<select class="user" name="id-user">
							<?php
								$id_user = $controller->admin_model->tampil_ID_user();
								foreach ($id_user as $row):
							?>
								<option value="<?php echo $row->ID_USER ?>"><?php echo $row->ID_USER ?></option>
							<?php
								endforeach;
							?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="nama-profil">Nama</label>
					<div class="controls controls-min">
						<input id="nama-profil" name="nama-profil" type="text" required="" placeholder="Your Name">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="jk">Jenis Kelamin</label>
					<div class="controls controls-min">
							<label for="jk1"><input type="radio" id="jk1" name="jk"/>Laki-Laki</label>
							<label for="jk2"><input type="radio" id="jk2" name="jk"/>Perempuan</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="tempat">Tempat Lahir</label>
					<div class="controls controls-min">
						<input name="tempat" id="tempat" type="text" required="" placeholder="Tempat Lahir">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="tanggal">Tanggal Lahir</label>
					<div class="controls controls-min">
						<input name="tanggal" id="tanggal" type="date" required="" placeholder="Tanggal Lahir">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="alamat">Alamat</label>
					<div class="controls controls-min">				
						<textarea name="alamat" id="alamat"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="email">Email</label>
					<div class="controls controls-min">			
						<input name="email" id="email" type="text" required="" placeholder="Your Email">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="tampil-email">Tampil Email</label>
					<div class="controls controls-min">							
						<label for="tampil-email1"><input type="radio" name="tampil-email" id="tampil-email1"> Show</label>
						<label for="tampil-email2"><input type="radio" name="tampil-email" id="tampil-email2"> Dont show</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="no-hp">No. HP</label>
					<div class="controls controls-min">	
						<input name="no-hp" id="no-hp" type="text" required="" placeholder="No. HP">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="tampil-no-hp">Tampil No. HP</label>
					<div class="controls controls-min">							
						<label for="tampil-no-hp1"><input type="radio" name="tampil-email" id="tampil-no-hp1"> Show</label>
						<label for="tampil-no-hp2"><input type="radio" name="tampil-email" id="tampil-no-hp2"> Dont show</label>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label control-label-min" for="foto">Tampil No. HP</label>
					<div class="controls controls-min">							
						<input name="foto" id="foto" type="file" required="" placeholder="your photo">
					</div>
				</div>
				<div class="form-actions">
					<button href="#" class="btn btn-danger btn-mini" data-dismiss="modal" id="close"><i class="icon-remove icon-white"></i> Close</button>
					<button  href="#" class="btn btn-primary btn-mini" type="submit"><i class="icon-ok icon-white"></i> Simpan</button>
				</div>
				<hr>
				</form>
			<input type="text" class="input-medium search-query" >
			<button class="btn btn-medium btn-success pull-right" id="tombol" onClick="return tambahDosen()"><i class="icon-plus icon-white"></i>Tambah</button><br><br><br>
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
										<h2><?php echo $row->NAMA_PROFIL ?> </h2>
										<h4><?php echo $row->EMAIL_PROFIL ?> </h4>
										<h4><?php echo $row->NO_HP_PROFIL ?> </h4>
										<h5><?php echo $row->ALAMAT_PROFIL ?> </h5>
							<button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i> Edit</button>
							<button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete</button>
							<button class="btn btn-mini btn-danger"><i class="icon-map-marker icon-white"></i> Detail</button>
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