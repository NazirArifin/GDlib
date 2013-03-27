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
		background:url('/images/header-mahasiswa.jpg') no-repeat center center fixed;
		/*VENDOR*/background-size: cover;
	}
	.pp{
	margin-left:40px;
	margin-top:10px;
	height:150px;
	width:150px;
	border-style:solid;
	border-width:6px;
	border-color:#ffffff;
	border-radius:5px;
	transition : All 1s ease ;
	}
	.pp:hover{
	transition : All 1s ease ;
	box-shadow:0px 0px 10px #000000;
	
	}
	#change{
	margin-top:70px;
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
					<a href="#" class="btn btn-inverse btn-mini" id="change" onClick="return ubahFotoProfil(this, <?php echo $row->ID_PROFIL ?>)"><i class="icon-edit"></i>  </a>
				</div>
			  </li>
			</ul>
			<form id="form-change" class="hide" action="" method="POST" enctype="multipart/form-data">
				<input class="btn" type="file" name="change_foto" id="change-foto" required="" style="width:140px;"><br>
				<input type="hidden" name="id_profil" id="id-profil" value="">
				<div class="btn-group">	
					<button class="btn btn-success btn-mini" type="button" onClick="return cancelChange()">Cancel</button>
					<button class="btn btn-danger btn-mini" id="ubah" type="submit" value="upload">Simpan</button>
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
							<li><a href="#edit-profil" role="button" data-toggle="modal" id="edit-profilUser" onClick="return editProfilMahasiswa(this, <?php echo $row->ID_PROFIL ?>)"><i class="icon-cogs icon-large"></i></a></li>
							</ul>
						</div>
					</div>
			</div>
			<hr>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#tetala">
					<i class="icon-calendar"></i> Tempat & tanggal lahir
				  </a>
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
					<i class="icon-user"></i> Jenis Kelamin
				  </a>
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
					<i class="icon-road"></i> Alamat
				  </a>
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
					<i class="icon-envelope-alt"></i> Email
				  </a>
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
					<i class="icon-phone-sign"></i> Nomer HP
				  </a>
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
	</div>
</div>
<?php
endforeach;
endif;
?>
</div>

	<div id="edit-profil" class="modal message hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<form id="form-profil" action="" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3>Edit Profil Mahasiswa</h3>
        </div>
        <div class="modal-body">
            <div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input class="span3" name="nama" id="nama-mahasiswa" type="text" placeholder="Nama Lengkap" >
						<input class="span3" name="profil_id" id="profil-id" type="hidden" value="">
					</div>
				</div>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-map-marker"></i></span>
						<input class="span3" name="tempat" id="tempat-mahasiswa" type="text" placeholder="Tempat Lahir">
					</div>
				</div>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-calendar"></i></span>
						<input class="span3" name="tanggal" id="tanggal-mahasiswa" type="date" placeholder="Tanggal Lahir">
					</div>
				</div>
				<div class="controls">
					<label for="">Jenis Kelamin</label>
						<!--<button type="button" class="btn btn-primary" name="gender" id="laki-laki" value="L"data-placement="right">Laki-Laki</button>
						<button type="button" class="btn btn-danger" name="gender" id="perempuan" value="P">Perempuan</button>-->
						<input type="radio" name="gender" id="laki-laki" value="L"><label class="label label-inverse" for="laki-laki"> Laki-Laki</label>&nbsp;
						<input type="radio" name="gender" id="perempuan" value="P"><label class="label label-important" for="perempuan"> Perempuan</label>
					
				</div><br>
				
				<!---->
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-road"></i></span>
						<input class="span3" name="alamat" id="alamat-mahasiswa" type="text" placeholder="Alamat">
					</div>
				</div>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input class="span3" id="mail-mahasiswa" name="mail" type="text" placeholder="Alamat email">
						<input type="radio" name="email" id="tampil-email" value="Y"><label class="label label-warning" for="tampil-email"> Tampilkan</label>
						<input type="radio" name="email" id="jangan-email" value="T"><label class="label label-warning" for="jangan-email"> Jangan Tampilkan</label>
					</div>
				</div>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-phone"></i></span>
						<input class="span3" id="no-hp" name="no_hp" type="text" placeholder="Nomer Telepon/HP">
						<input type="radio" name="hp" id="tampil-hp" value="Y"><label class="label label-warning" for="tampil-hp"> Tampilkan</label>
						<input type="radio" name="hp" id="jangan-hp" value="T"><label class="label label-warning" for="jangan-hp"> Jangan Tampilkan</label>
					</div>
				</div>
			</div>
        </div>
		</form>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal">Tutup</button>
            <button class="btn btn-primary" onClick="return simpanEditProfilMahasiswa()">Simpan</button>
        </div>
		
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
	<script src="/js/profil.js"></script>
	
<script type="text/javascript">
$('#accordion2').accordion();
$('#edit-profilUser').attr('title','Edit Profil').tooltip();
$('#change').attr('title','Ganti foto profil').tooltip();
</script>
</body>
</html>
