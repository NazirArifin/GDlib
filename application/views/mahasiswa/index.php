<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Mahasiswa</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="stylesheet" href="/css/style.css" />
			
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
		<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="/third_party/bootstrap/bootstrap.min.js"></script>
		<style type="text/css">
		body{
		background-image:url('/images/bg-1.jpg') ;
		}
		#cari{
			width:100px;
			transition:All 1s ease-in;
			-webkit-transition:All 1s ease-in;
			-moz-transition:All 1s ease-in;
			-o-transition:All 1s ease-in;
			}
		#cari:focus{
			width:400px;
			transition:All 0.5s ease-in;
			-webkit-transition:All 0.5s ease-in;
			-moz-transition:All 0.5s ease-in;
			-o-transition:All 0.5s ease-in;
			}
		#logo-baru {
			position:absolute;
			height: 50px;
			width:255px;
			margin-top: 15px;
		}
		.image-list{
			width:100px;
			height:100px;
		}
		::selection{
			background-color:#cc00ff;
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
				<li><a href="/mahasiswa"><img src="/images/glyphicons/png/glyphicons_020_home.png" alt=""> Dashboard</a></li>
				<li><a href="/mahasiswa/profilmahasiswa"><img src="/images/glyphicons/png/glyphicons_003_user.png" alt=""> Profil</a></li>
			</ul>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<div class="container-fluid">
	<div class="row-fluid">
		<div class=" well span3">
			<div class="well">
				<ul class="thumbnails">
					<li class="span12">
						<a href="#" class="thumbnail"><img src="/images/rud.jpg" alt=""></a>
					</li>
				</ul>
				<span class="label label-inverse">Username | 0955201554</span>
			</div>
			<div class="sidebar-nav">
				<div class="well">
					<div class="alert alert-info"><h4>Dokumen</h4></div>
					<hr>
					<section class="blog-widget">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="/mahasiswa/jurnal">Jurnal</a></li>
							<li class="divider"></li>
							<li><a href="/mahasiswa/buku"> Buku</a></li>
							<li class="divider"></li>
							<li><a href="/mahasiswa/modul"> Modul</a></li>
							<li class="divider"></li>
							<li><a href="/mahasiswa/buletin"> Buletin</a></li>
						</ul>
					</section>
				</div>
			</div>
		</div>
		<div class="well span9">
			<div class="row-fluid">
				<ul class="breadcrumb">
					<li class="active">Mahasiswa </li>
				</ul>   
				<div class="navbar navbar-inner">
					<a class="brand">Dokumen</a>
						<form class="navbar-search pull-right" method="post">
							<input type="text" class="search-query" placeholder="Cari Dokumen">
						</form>
				</div>
				<ul class="nav nav-tabs" id="tab-dok">
					<li class="active"><a href="#jurnal">Jurnal</a></li>
					<li><a href="#buku">Buku</a></li>
					<li><a href="#modul">Modul</a></li>
					<li><a href="#buletin">Buletin</a></li>
				</ul>
				<div class="tab-content">
					<!--tab untuk jurnal-->
					<div class="tab-pane active" id="jurnal">
						<?php
							$jurnal=$this->mahasiswa_model->tampilDokumenJurnal();
							if($jurnal==0):
								echo '<p>Tidak Ada</p>';
								else:
							foreach($jurnal as $row ):
						?>
						<div class="well span5">
							<a href="#Doc"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
							<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
							<div class="btn-group">
								<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
								<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
							</div>
						</div>
						<?php
							endforeach;
						endif;
						?>
					</div>
					<!--tab buku-->
					<div class="tab-pane" id="buku">
						<?php
							$buku=$this->mahasiswa_model->tampilDokumenBuku();
							if($buku==0):
								echo '<p>Nothing</p>';
								else:
							foreach($buku as $row ):
						?>
						<div class="well span5">
							<a href="#Doc"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
							<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
							<div class="btn-group">
								<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
								<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
							</div>
						</div>
						<?php
							endforeach;
						endif;
						?>
					</div>
					<!--tab modul-->
					<div class="tab-pane" id="modul">
						<?php
							$modul=$this->mahasiswa_model->tampilDokumenModul();
							if($modul==0):
								echo '<p>Nggak ada</p>';
								else:
							foreach($modul as $row ):
						?>
						<div class="well span5">
							<a href="#Doc"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
							<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
							<div class="btn-group">
								<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
								<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
							</div>
						</div>
						<?php
							endforeach;
						endif;
						?>						
					</div>
					<!--tab bulletin-->
					<div class="tab-pane" id="buletin">
						<?php
							$buletin=$this->mahasiswa_model->tampilDokumenBuletin();
							if($buletin==0):
								echo '<p>Tidak ada</p>';
								else:
							foreach($buletin as $row ):
						?>
						<div class="well span5">
							<a href="#Doc"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
							<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
							<div class="btn-group">
								<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
								<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
							</div>
						</div>
						<?php
							endforeach;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	 <!--BAGIAN FOOTER-->
  	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
</div>
			<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/third_party/jquery/tooltip/main-tooltip.js"></script>
<script type="text/javascript">
$('#tab-dok a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
$('.download-mahasiswa').attr('title', 'klik untuk mengunduh dokumen').tooltip();
$('.btn-warning').attr('title', 'klik untuk membaca dokumen').tooltip();
$('.baca-mahasiswa').attr('title', 'klik untuk melihat detail  dokumen').tooltip();
</script>
</body>
	
</html>