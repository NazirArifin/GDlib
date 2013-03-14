<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Creator | Fawait</title>
	<link href="/third_party/bootstrap/css/elemento.min.css" rel="stylesheet" type="text/css">
	<link href="/third_party/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="/static/css/main.css" />
	<link rel="stylesheet" href="/static/css/style.css" />
	<link rel="stylesheet" href="/third_party/css-social-buttons-master/css/zocial.css" />
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
					<li><a href="#"><i class="icon-dashboard icon-large"></i> Dashboard</a>
					<li><a href="#"><i class="icon-user icon-large"></i> Profil</a>
				  
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
				<img src="/images/creator/fawait.jpg" class="pp" data-placement="right">
		</div>
		<div class="span5">
			<h2>Fawait</h2>
			<h3>0955201607</h3>
			<h3>Programmer</h3>
		</div>
	</div>
</div>
<div class="container well">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="/creator">Creator</a> <span class="divider">/</span></li>
					<li class="active">Fawait</li>
				</ul>   
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
								<td><i class="icon-user icon-large"></i> Nama Lengkap</td>
								<td>:</td>
								<td>Fawait</td>
							</tr>
							<tr>
								<td><i class="icon-road icon-large"></i> Alamat</td>
								<td>:</td>
								<td>Pakong Pamekasan
							</tr>
							<tr>
								<td><i class="icon-calendar icon-large"></i> Tempat & Tgl Lahir</td>
								<td>:</td>
								<td>Pamekasan, 13/05/1992</td>
							</tr>
							<tr>
								<td><i class="icon-envelope icon-large"></i> E-mail</td>
								<td>:</td>
								<td>rudiec.nuada@gmail.com</td>
							</tr>
							<tr>
								<td><i class="icon-phone-sign icon-large"></i> Phone</td>
								<td>:</td>
								<td>+6287866171748</td>
							</tr>
						</table>
			
			</div>
		</div>
	</div>
	<div class="accordion-group">
		<div id="sosial" class="accordion-body collapse">
			<div class="accordion-inner">
				<h3>Sosial Media</h3>
				<a href="https://www.facebook.com/fawait" class='zocial facebook'>Faylee RC</a>
				<a href="https://www.twitter.com/Rankclem" class='zocial twitter'>@Rankclem</a>
				<a href="https://www.plus.google.com/faylee" class='zocial googleplus'>Faylee</a>
				<a href="https://www.github.com/Fawait" class='zocial github'>Fawait</a>
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
