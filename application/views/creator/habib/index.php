<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Creator | Habib</title>
	<link href="/third_party/bootstrap/css/elemento.css" rel="stylesheet" type="text/css">
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/static/css/main.css" />
	<link rel="stylesheet" href="/static/css/style.css" />
	<link rel="stylesheet" href="/third_party/css-social-buttons-master/css/zocial.css" />
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
		background:url('/images/header-creator.jpg') no-repeat center center fixed;
		/*VENDOR*/background-size: cover;
	}
	.pp{
	margin:15px;
	height:160px;
	width:150px;
	border-style:solid;
	border-width:6px;
	border-color:#000000;
	/*VENDOR*/ box-shadow: inset 0px 0px 9px #ffffff;
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
					<li><a href="/creator"><img src="/images/glyphicons/png/glyphicons_020_home.png" alt=""> Dashboard</a>
					<li><a href="/mahasiswa/profilmahasiswa"><img src="/images/glyphicons/png/glyphicons_003_user.png" alt=""> Profil</a>
				  
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
				<img src="/images/creator/habib.jpg" class="pp" data-placement="right">
		</div>
		<div class="span5">
			<h2>Habib</h2>
			<h3>0955201556</h3>
			<h3>Programmer</h3>
		</div>
	</div>
</div>
<div class="container well">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
			
				<ul class="nav nav-pills nav-tabs">
                  <li><a data-toggle="collapse" data-parent="#accordion2" href="#about">About</a></li>
                  <li><a data-toggle="collapse" data-parent="#accordion2" href="#detail">Profil Detail</a></li>
                  <li><a data-toggle="collapse" data-parent="#accordion2" href="#sosial">Sosial Media</a></li>
                </ul>
			</div>
		</div>
	</div>

	<div class="accordion" id="accordion2">
		<div class="accordion-group">
			<div id="about" class="accordion-body collapse in">
				<div class="accordion-inner">
					<h3>About Me</h3>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium pariatur velit ducimus tempore nam! Neque quos debitis odit explicabo dolore voluptas nobis assumenda recusandae expedita atque harum repellendus vero dolores.</p>
				</div>
			</div>
		</div>
	  <div class="accordion-group">
		<div id="detail" class="accordion-body collapse">
		  <div class="accordion-inner">
				<h3>Profil Detail</h3>
				<table class="table">
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_034_old_man.png" alt=""> Nama Lengkap</td>
								<td>:</td>
								<td>Habibullah</td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_263_bank.png" alt=""> Alamat</td>
								<td>:</td>
								<td>Lenteng El-Torrado
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_278_birthday_cake.png" alt=""> Tempat & Tgl Lahir</td>
								<td>:</td>
								<td>Sumenep, 12/07/1991</td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_010_envelope.png" alt=""> E-mail</td>
								<td>:</td>
								<td>rudiec.nuada@gmail.com</td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_163_iphone.png" alt=""> Phone</td>
								<td>:</td>
								<td>+6287750221441</td>
							</tr>
						</table>
			
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div id="sosial" class="accordion-body collapse">
			<div class="accordion-inner">
				<h3>Sosial Media</h3>
				<a href="https://www.facebook.com/habib.line" class='zocial facebook'>Habieb Breakhouse GambalGambel</a>
				<a href="https://www.facebook.com/nazzir.arifin" class='zocial twitter'>Nazir Arifin</a>
				<a href="https://www.facebook.com/nazzir.arifin" class='zocial googleplus'>Nazir Arifin</a>
				<a href="https://www.facebook.com/nazzir.arifin" class='zocial github'>Nazir Arifin</a>
				<a href="https://www.facebook.com/nazzir.arifin" class='zocial linkedin'>Nazir Arifin</a>
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
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
	<script type="text/javascript" src="/third_party/jquery/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/third_party/bootstrap/bootstrap.min.js"></script>
	
<script type="text/javascript">
$('.facebook').attr('title','Facebook').tooltip();
$('.twitter').attr('title','Twitter ').tooltip();
$('.googleplus').attr('title','Google+ ').tooltip();
$('.github').attr('title','Github ').tooltip();
$('.linkedin').attr('title','Linked in ').tooltip();
$('.pp').attr('title','hai :D ').tooltip('');
</script>
</body>
</html>
