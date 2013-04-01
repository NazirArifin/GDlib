<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Mahasiswa | Profil</title>
	<link href="/third_party/bootstrap/css/elemento.min.css" rel="stylesheet" type="text/css">
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="/third_party/alertify/alertify.core.css" />
	<link rel="stylesheet" href="/third_party/alertify/alertify.default.css" />
	<link rel="stylesheet" href="/css/main.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<style type="text/css">
	body{
		background:url('/images/bg-1.jpg') ;

		}
	#logo-baru {
		position:absolute;
		height: 40px;
		width:220px;
		margin-top: 15px;
	}
	#header{
		background:url('/images/bg.png');
	}
	.pp{
	margin-left:40px;
	margin-top:10px;
	height:150px;
	width:150px;
	border-style:solid;
	border-width:6px;
	border-top-width:0px;
	border-color:#ffffff;
	border-radius:5px;
	}

	#change-mahasiswa{
	margin-top:70px;
	}
	#tombol-ganti{
	margin-left:40px;
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
					<li><a href="/mahasiswa"><i class="icon-dashboard icon-large"></i> Dashboard</a>
					<li><a href="/mahasiswa/profilmahasiswa"><i class="icon-user icon-large"></i> Profil</a>
				  
				</ul>
			</div>
		</div>
	</div>
<br>
<br>
<br>
<br>
<div class="container" >
		<?php
			$profilMahasiswa=$profil->mahasiswa_model->tampil_profil_mahasiswa();
			if ($profilMahasiswa == 0):
					echo '<tr><td colspan="4"><div class="alert-info" style="text-align:center;">Data Mahasiswa Tidak Ada</div></td></tr>';
				else :
					foreach ($profilMahasiswa as $row):
		?>
	<div class="well span11" id="header">
		<div class="span5" id="hov">
			<ul class="thumbnails gallery">
			  <li class="thumbnail">
				<img src="/<?php echo $row->FOTO_PROFIL ?>" / class="pp">
				<div class="caption from-top">
					<a href="#" class="btn btn-inverse btn-mini" id="change-mahasiswa" onClick="return ubahFotoProfilMahasiswa(this, <?php echo $row->ID_PROFIL ?>)"><i class="icon-edit"></i>  </a>
				</div>
			  </li>
			</ul>
			<form id="form-change-mahasiswa" class="hide" action="" method="POST" enctype="multipart/form-data">
				<input class="btn" type="file" name="change_foto" id="change-foto-mahasiswa" required="" style="width:140px;"><br>
				<input type="hidden" name="id_profil" id="id-profil-mahasiswa" value="">
				<div class="btn-group" id="tombol-ganti">	
					<button class="btn btn-success btn-mini" type="button" onClick="return cancelChangeMahasiswa()">Cancel</button>
					<button class="btn btn-danger btn-mini" id="ubah-mahasiswa" type="submit" value="upload">Simpan</button>
				</div>
			</form>
		</div>
		<div class="span5">
			<h2><?php echo $row->NAMA_PROFIL ?></h2>
			<h3><?php echo $row->ID_USER ?></h3>
			<h3><?php echo $row->ALAMAT_PROFIL ?></h3>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="well span8" id="stat">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
					<h2>History</h2>
					</div>
				</div>	
			</div>
			<hr>
			<table class="table table-condensed">
				<thead >
					<tr class="alert alert-info">
						<td>Login Terakhir</td>
						<td>Dokumen yg dibaca</td>
					</tr>
					<tr>
						<td>12/07/1992</td>
						<td>Judul Dokumen</td>
					</tr>
				</thead>
			</table>
		</div>
		<div class="well span4">
			<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<a class="brand">Profil Detail</a>
							<ul class="nav pull-right nav-pills">
							<li id="1"><a href="#edit-profil" id="edit-profilUser" onClick="return editProfilMahasiswa(this, <?php echo $row->ID_PROFIL ?>)"><i class="icon-cogs icon-large"></i></a></li>
							<li class="hide" id="2"><a href="#" id="batal-edit-profilUser" onClick="return cancelEditProfilMahasiswa()"><i class="icon-remove icon-large"></i></a></li>
							</ul>
						</div>
					</div>
			</div>
			<hr>
			<div id="tampilkan">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#tetala">
						<i class="icon-calendar"></i> Tempat & tanggal lahir</a>
					</div>
					<div id="tetala" class="accordion-body collapse in">
						<div class="accordion-inner">
							<?php echo $row->TEMPAT_LAHIR ?>, <?php echo $row->TGL_LAHIR ?>
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#gender">
					<i class="icon-user"></i> Jenis Kelamin</a>
					</div>
					<div id="gender" class="accordion-body collapse">
						<div class="accordion-inner">
							<?php echo ($row->JENIS_KELAMIN == 'L' ? 'Laki-Laki' : 'Perempuan') ?>
						</div>
					</div>
				</div>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#alamat">
						<i class="icon-road"></i> Alamat</a>
					</div>
					<div id="alamat" class="accordion-body collapse">
						<div class="accordion-inner">
							<?php echo $row->ALAMAT_PROFIL ?>
						</div>
					</div>
				</div>
				<?php
					if ($row->TAMPIL_EMAIL_PROFIL == 'Y'):
				?>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#email">
						<i class="icon-envelope-alt"></i> Email</a>
					</div>
					<div id="email" class="accordion-body collapse">
						<div class="accordion-inner">
							<?php echo $row->EMAIL_PROFIL ?>
						</div>
					</div>
				</div>
				<?php
					endif;
					if ($row->TAMPIL_NO_HP_PROFIL == 'Y'):
				?>
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#phone">
						<i class="icon-phone-sign"></i> Nomer HP</a>
					</div>
					<div id="phone" class="accordion-body collapse">
						<div class="accordion-inner">
							<?php echo $row->NO_HP_PROFIL ?>
						</div>
					</div>
				</div>
				<?php
					endif;
				?>
			</div>	
				<!--edit profil-->
				<form class="hide" id="form-profil-mahasiswa" action="" method="post">
					<h3>Edit Profil Mahasiswa</h3>
				<blockquote>
					<div class="control-group">
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-user"></i></span>
								<input name="nama" id="nama-mahasiswa" type="text" placeholder="Nama Lengkap" >
								<input name="profil_id" id="profil-id-mahasiswa" type="hidden" value="">
							</div>
						</div>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-map-marker"></i></span>
								<input name="tempat" id="tempat-mahasiswa" type="text" placeholder="Tempat Lahir">
							</div>
						</div>
						<div class="controls">
							<div class="input-prepend date">
								<span class="add-on"><i class="icon-calendar"></i></span>
								<input name="tanggal" id="tanggal-mahasiswa" type="text" placeholder="Tanggal Lahir" data-date="01-01-2013" data-date-format="dd-mm-yyyy">
							</div>
						</div>
						<div class="controls">
							<label for="">Jenis Kelamin</label>
								<input type="radio" name="gender" id="laki-laki-mahasiswa" value="L"><label class="label label-inverse" for="laki-laki-mahasiswa"> Laki-Laki</label>&nbsp;
								<input type="radio" name="gender" id="perempuan-mahasiswa" value="P"><label class="label label-important" for="perempuan-mahasiswa"> Perempuan</label>
							
						</div><br>
						
						<!---->
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-road"></i></span>
								<textarea name="alamat" id="alamat-mahasiswa" placeholder="Alamat"></textarea>
							</div>
						</div>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input id="mail-mahasiswa" name="mail" type="text" placeholder="Alamat email"><br>
							</div>
						</div>
						<div class="controls">
							<input type="radio" name="email" id="tampil-email-mahasiswa" value="Y"><label class="label label-warning" for="tampil-email-mahasiswa"> Tampilkan</label>
							<input type="radio" name="email" id="jangan-email-mahasiswa" value="T"><label class="label label-warning" for="jangan-email-mahasiswa"> Jangan Tampilkan</label>
						</div><br>
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-phone"></i></span>
								<input id="no-hp" name="no_hp" type="text" placeholder="Nomer Telepon/HP"><br>
							</div>
						</div>
						<div class="controls">
							<input type="radio" name="hp" id="tampil-hp-mahasiswa" value="Y"><label class="label label-warning" for="tampil-hp-mahasiswa"> Tampilkan</label>
							<input type="radio" name="hp" id="jangan-hp-mahasiswa" value="T"><label class="label label-warning" for="jangan-hp-mahasiswa"> Jangan Tampilkan</label>
						</div>
					</div>
					<hr>
					<button class="btn btn-primary btn-block" type="submit" onClick="return simpanEditProfilMahasiswa()">Simpan</button>
					<!--<button href="#" class="btn btn-inverse pull-right" onClick="return cancelEditProfilMahasiswa()">Batal</button>-->
				</blockquote>
				</form>
		</div>
	</div>
</div>
<?php
endforeach;
endif;
?>
</div>
 	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
	<script src="/third_party/jquery/jquery-1.9.1.min.js"></script>
	<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
	<script src="/third_party/bootstrap/bootstrap.min.js"></script>
	<script src="/third_party/alertify/alertify.min.js"></script>
	<script src="/third_party/datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/js/profil.js"></script>
	
<script type="text/javascript">
$('#accordion2').accordion();
$('#edit-profilUser').attr('title','Edit Profil').tooltip();
$('#batal-edit-profilUser').attr('title','Batal Edit Profil').tooltip();
$('#change-mahasiswa').attr('title','Ganti foto profil').tooltip();
$('#tanggal-mahasiswa').datepicker();
</script>
</body>
</html>
