<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Mahasiswa | Profil</title>
	<link href="/third_party/bootstrap/css/elemento.min.css" rel="stylesheet" type="text/css">
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
	/* Apply these styles only when #preview-pane has
   been placed within the Jcrop widget */
.jcrop-holder #preview-pane {
  display: block;
  position: absolute;
  z-index: 2000;
  top: 10px;
  right: -280px;
  padding: 6px;
  border: 1px rgba(0,0,0,.4) solid;
  background-color: white;

  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;

  -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}

/* The Javascript code will set the aspect ratio of the crop
   area based on the size of the thumbnail preview,
   specified here */
#preview-pane .preview-container {
  width: 250px;
  height: 250px;
  overflow: hidden;
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
			<div id="tongue">
				<a title="Child" href="" ><img src="/<?php echo $row->FOTO_PROFIL ?>" alt="dosen" class="pp"></a>
				<form id="form-change" class="hide" action="" method="POST" enctype="multipart/form-data">
						<input class="btn" type="file" name="change_foto" id="change-foto" required="" style="width:220px;"><br>
						<input type="hidden" name="id_profil" id="id-profil" value="">
						<button class="btn btn-info btn-mini" type="button" onClick="return cancelChange()">Cancel</button>
						<button class="btn btn-info btn-mini" type="submit" value="upload">Simpan</button>
				</form>
				<div class="tongue-content">
					<a href="#" class="btn btn-inverse btn-mini" id="change" onClick="return ubahFotoProfil(this, <?php echo $row->ID_PROFIL ?>)"><i class="icon-edit"></i> Ganti Foto Profil</a>
				</div>
			</div>
			
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
							<li><a href="#edit-profil" role="button" data-toggle="modal" id="edit"><i class="icon-cogs icon-large"></i></a></li>
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
					<?php echo $row->JENIS_KELAMIN ?>
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
		
		</div>
	</div>
</div>
<?php
endforeach;
endif;
?>
</div>

	<div id="edit-profil" class="modal message hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3>Edit Profil Mahasiswa</h3>
        </div>
        <div class="modal-body">
            <div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input class="span3" id="nama" type="text" placeholder="Nama Lengkap" >
					</div>
				</div>
			</div>
            <div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-credit-card"></i></span>
						<input class="span3" id="npm" type="text" placeholder="NPM">
					</div>
				</div>
			</div>
            <div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-map-marker"></i></span>
						<input class="span3" id="tetala" type="text" placeholder="Tempat Lahir">
					</div>&nbsp;
					<div class="input-prepend">
						<input class="span3" id="tetala" type="text" placeholder="Tanggal Lahir">
					</div>
				</div>
			</div>

 			<div class="control-group">			
				<label class="control-label" for="gender">Jenis Kelamin</label>
				<input type="radio" name="gender" id="Laki-laki"> &nbsp;<span class="label label-info">Laki-Laki</span>
				<input type="radio" name="gender" id="Perempuan"> &nbsp;<span class="label label-important">Perempuan</span>
				<input type="radio" name="gender" id="Maho"> &nbsp;<span class="label label-inverse">Maho</span>
				<input type="radio" name="gender" id="Banci"> &nbsp;<span class="label label-warning">Banci</span>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-road"></i></span>
						<input class="span3" id="mail" type="text" placeholder="Alamat">
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input class="span3" id="mail" type="text" placeholder="Alamat email">
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-phone"></i></span>
						<input class="span3" id="mail" type="text" placeholder="Nomer Telepon/HP">
					</div>
				</div>
			</div>
			
        </div>
        <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
	<!-- crop -->

			<div class="jc-demo-box">
				<img src="/images/ct.jpg" id="target" alt="[Jcrop Example]" />
				<div id="preview-pane">
					<div class="preview-container">
						<img src="/images/ct.jpg" class="jcrolp-preview" alt="Preview" />
					</div>
				</div>
				<!--<form action="crop2.php" method="post" onsubmit="return checkCoords();">
					<input type="hidden" id="x" name="x" />
					<input type="hidden" id="y" name="y" />
					<input type="hidden" id="w" name="w" />
					<input type="hidden" id="h" name="h" />
					<input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
				</form>-->

			</div>
	<!-- akhir crop -->
	
 	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
	<script src="/third_party/jquery/jquery-1.9.1.min.js"></script>
	<!--<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
	<script type="text/javascript" src="/third_party/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/profil.js"></script>
	<script type="text/javascript" src="/third_party/jquery-tongue/jquery.tongue.js"></script>-->
	<script type="text/javascript" src="/js/mahasiswa.crop.js"></script>
	<script type="text/javascript" src="/third_party/jcrop/js/jquery.Jcrop.js"></script>
	
<script type="text/javascript">
$('#accordion2').accordion();
$('#edit').attr('title','Edit Profil').tooltip();
$('#tongue').tongue();
</script>
</body>
</html>
