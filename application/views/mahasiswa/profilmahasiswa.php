<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Mahasiswa | Profil</title>
	<link href="/third_party/bootstrap/css/elemento.css" rel="stylesheet" type="text/css">
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/static/css/main.css" />
	<link rel="stylesheet" href="/static/css/style.css" />
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
		background:url('/images/header.jpg');
		background-width:100%;
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
					<li><a href="/mahasiswa"><img src="/images/glyphicons/png/glyphicons_020_home.png" alt=""> Dashboard</a>
					<li><a href="/mahasiswa/mahasiswaprofil"><img src="/images/glyphicons/png/glyphicons_003_user.png" alt=""> Profil</a>
				  
				</ul>
			</div>
		</div>
</div>
<br>
<br>
<br>
<br>
<div class="container" >
	<div class="well span11" id="header">
		<div class="span5">
				<img src="/images/rud.jpg" alt="dosen" class="pp">
		</div>
		<div class="span5">
			<h2>Rudi Hartono</h2>
			<h3>0955201554</h3>
			<h3>Pakong Pamekasan</h3>
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
					<div class="container"><h2>Profil Detail</h2></div>
				</div>
			</div>
			<hr>
			<div class="accordion" id="accordion2">
			  <div class="accordion-group">
				<div class="accordion-heading">
				  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#tetala">
					<img src="/images/glyphicons/png/glyphicons_057_history.png"> Tempat & tanggal lahir
				  </a>
				</div>
				<div id="tetala" class="accordion-body collapse in">
				  <div class="accordion-inner">
					Pamekasan, 13/Mei/1992
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
					Laki-Laki
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
					Taman Hedona Regency Blok C4 no.7
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
					rudi@nyaroan.com
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
					+6285730727537
				  </div>
				</div>
			  </div>
			</div>
		
		</div>
	</div>
</div>
</div>

 	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/humans.txt" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
	<script type="text/javascript" src="/third_party/jquery/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/third_party/bootstrap/bootstrap.min.js"></script>
	
<script type="text/javascript">
$('#accordion2').accordion();
$(function(){
            $('.dosen').popover();
    });
</script>
</body>
</html>
