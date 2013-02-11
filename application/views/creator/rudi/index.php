<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Creator | Rudi</title>
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
		background:url('/images/header-creator.jpg') no-repeat center center fixed;
		/*VENDOR*/background-size: cover;
	}
	.pp{
	margin-left:35px;
	height:160px;
	width:150px;
	border-style:groove;
	border-width:6px;
	border-color:#ffffff;
	border-radius:5px;
	/*VENDOR*/transform:rotate(4deg);
	/*VENDOR*/transition:All 1s ease-in;
	/*VENDOR*/ box-shadow:0px 0px 7px #000000;

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
				<img src="/images/rud.jpg" class="pp">
		</div>
		<div class="span5">
			<h2>Rudi Hartono</h2>
			<h3>0955201554</h3>
			<h3>Pamekasan</h3>
		</div>
	</div>
</div>
<div class="container">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
			
				<ul class="nav nav-pills nav-tabs">
                  <li class="active"><a href="#about" data-toggle="tab">About</a></li>
                  <li><a href="#detail" data-toggle="tab">Profil Detail</a></li>
                </ul>
			</div>
		</div>
	</div>
	 <div class="well tabbable">
                <div class="tab-content">
                  <div class="tab-pane active" id="about">
						<h1>About</h1>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi libero ipsum fuga tempore vitae deleniti non veritatis reprehenderit ipsa temporibus cupiditate id eaque assumenda voluptatem quasi totam corporis quisquam ipsam.</p>
                  </div>
                  <div class="tab-pane span6" id="detail">
						<h1>Profil Detail</h1>
						<hr>
						<table class="table">
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_034_old_man.png" alt=""> Nama Lengkap</td>
								<td>:</td>
								<td>Rudi Hartono</td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_263_bank.png" alt=""> Alamat</td>
								<td>:</td>
								<td>Pakong Pamekasan
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_278_birthday_cake.png" alt=""> Tempat & Tgl Lahir</td>
								<td>:</td>
								<td>Pamekasan, 13/05/1992</td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_010_envelope.png" alt=""> E-mail</td>
								<td>:</td>
								<td>rudiec.nuada@gmail.com</td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_163_iphone.png" alt=""> Phone</td>
								<td>:</td>
								<td>+6285730727537</td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_410_facebook.png" alt=""> Facebook</td>
								<td>:</td>
								<td><a href="https://www.facebook.com/rudiecnuada">https://www.facebook.com/rudiecnuada</a></td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_411_twitter.png" alt=""> Twitter</td>
								<td>:</td>
								<td><a href="https://twitter.com/rudiecnuada">@rudiecnuada</a></td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_382_google_plus.png" alt=""> Google+</td>
								<td>:</td>
								<td><a href="https://plus.google.com/101084308123428808294">https://plus.google.com/101084308123428808294</a></td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_385_blogger.png" alt=""> Blogger</td>
								<td>:</td>
								<td><a href="http://rudiecnuada.blogspot.com/">http://rudiecnuada.blogspot.com</a></td>
							</tr>
							<tr>
								<td><img src="/images/glyphicons/png/glyphicons_397_linked_in.png" alt=""> Linked In</td>
								<td>:</td>
								<td><a href="http://id.linkedin.com/in/rudiecnuada">http://id.linkedin.com/in/rudiecnuada</a></td>
							</tr>
						</table>
						
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

</script>
</body>
</html>
