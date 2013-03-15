<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Dosen | Profil</title>
	<link href="/third_party/bootstrap/css/elemento.min.css" rel="stylesheet" type="text/css">
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
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
		background:url('/images/header-dosen.jpg') no-repeat center center fixed;
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
					<li><a href="/dosen"><i class="icon-dashboard icon-large"></i> Dashboard</a>
					<li><a href="/dosen/profil"><i class="icon-user icon-large"></i> Profil</a>
				  
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
						<h2>Aktivitas</h2>
					</div>
				</div>
			</div>
			<hr>
		<table class="table table-condensed">
			<thead >
				<tr class="alert alert-info">
					<td>Rating Level</td>
					<td>Login Terakhir</td>
					<td>Postingan</td>
				</tr>
				<tr>
					<td>5</td>
					<td>12/07/1992</td>
					<td>13</td>
				</tr>
			</thead>
		</table>
			

		</div>
		<div class="well span4">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<h3>Profil Detail</h3>
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
