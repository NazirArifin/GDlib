<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Mahasiswa | Profil</title>
	<link href="/third_party/bootstrap/css/elemento.css" rel="stylesheet" type="text/css">
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="/css/main.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<style type="text/css">
	body{
		background:url('/images/bg-1.jpg') ;

		}
	#logo-baru {
		position:absolute;
		height: 50px;
		width:255px;
		margin-top: 15px;
	}
	#header{
		background:url('/images/header-mahasiswa.jpg') no-repeat center center fixed;
		/*VENDOR*/background-size: cover;
	}
	.pp{
	margin-left:35px;
	height:150px;
	width:150px;
	/*VENDOR*/transform:rotate(4deg);
	/*VENDOR*/transition:All 1s ease-in;
	}
	.pp:hover{
	border-style:groove;
	border-width:6px;
	border-color:#ffffff;
	border-radius:5px;
	/*VENDOR*/ box-shadow:0px 0px 7px #000000;
	/*VENDOR*/transform:rotate(0deg);
	/*VENDOR*/transition:All 1s ease;
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
			<img src="/<?php echo $row->FOTO_PROFIL ?>" alt="dosen" class="pp"><br>
			<button id="change" class="btn btn-inverse pull-left btn-mini" onClick="return ubahFotoProfil(this, <?php echo $row->ID_PROFIL ?>)">Change</button>
			<form id="form-change" class="hide" action="" method="POST" enctype="multipart/form-data">
				<input type="file" name="change_foto" id="change-foto" required=""><br>
				<input type="hidden" name="id_profil" id="id-profil" value="">
				<button class="btn btn-info btn-mini" type="button" onClick="return cancelChange()">Cancel</button>
				<button class="btn btn-info btn-mini" type="submit" value="upload">Simpan</button>
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
				<li><a href=""><i class="icon-cogs icon-large"></i></a></li>
				</ul>
			</div>
		</div>
</div>
			<hr>
			<div class="accordion" id="accordion2">
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
					<img src="/images/glyphicons/png/glyphicons_024_parents.png"> Jenis Kelamin
				  </a>
				</div>
				<div id="gender" class="accordion-body collapse">
				  <div class="accordion-inner">
					<?php echo $row->JENIS_KELAMIN ?>
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#alamat">
					<img src="/images/glyphicons/png/glyphicons_026_road.png"> Alamat
				  </a>
				</div>
				<div id="alamat" class="accordion-body collapse">
				  <div class="accordion-inner">
					<?php echo $row->ALAMAT_PROFIL ?>
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#email">
					<img src="/images/glyphicons/png/glyphicons_419_e-mail.png"> Email
				  </a>
				</div>
				<div id="email" class="accordion-body collapse">
				  <div class="accordion-inner">
					<?php echo $row->EMAIL_PROFIL ?>
				  </div>
				</div>
			  </div>
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#phone">
					<img src="/images/glyphicons/png/glyphicons_169_phone.png"> Nomer HP
				  </a>
				</div>
				<div id="phone" class="accordion-body collapse">
				  <div class="accordion-inner">
					<?php echo $row->NO_HP_PROFIL ?>
				  </div>
				</div>
			  </div>
			</div>
		
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
	<script type="text/javascript" src="/third_party/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/profil.js"></script>
	
<script type="text/javascript">
$('#accordion2').accordion();
</script>
</body>
</html>
