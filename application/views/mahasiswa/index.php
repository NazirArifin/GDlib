<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Mahasiswa</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
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
			height: 40px;
			width:220px;
			margin-top: 15px;
		}
		.image-list{
			width:100px;
			height:100px;
		}
		::selection{
			background-color:#cc00ff;
			}
		.pp{
		margin-left:-6px;
		height:150px;
		width:150px;
		border-style:solid;
		border-width:6px;
		border-color:gray;
		border-radius:5px;
		transition : All 1s ease ;
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
					<li><a href="/mahasiswa/profilmahasiswa"><i class="icon-user icon-large"></i> Profil</a></li>
					<li><a href="/welcome/logout"><i class="icon-user icon-large"></i> Logout</a></li>
				  
				</ul>
			</div>
		</div>
	</div>
<br>
<br>
<br>
<div class="container"><img src="/images/header/main-header.png" alt="mahasiwa-header"></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class=" well span3">
			<div class="well">
						<?php
							$profilMahasiswa=$controller->mahasiswa_model->tampil_profil_mahasiswa();
							if ($profilMahasiswa == 0):
									echo '<tr><td colspan="4"><div class="alert-info" style="text-align:center;">Tidak Ada Foto</div></td></tr>';
								else :
									foreach ($profilMahasiswa as $row):
						?>
				<ul class="thumbnails">
					<li class="span12">
						<a href="/mahasiswa/profilmahasiswa"><img src="/<?php echo $row->FOTO_PROFIL ?>" alt="" class="pp"></a>
					</li>
				</ul>
				<span class="label label-inverse"><?php echo $row->NAMA_PROFIL ?> | 0955201..<?php echo $row->ID_USER ?></span>
						<?php
							endforeach;
						endif;
						?>
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
								$d = 0;
							if($jurnal==0):
								echo '<p>Tidak Ada</p>';
								else:
							foreach($jurnal as $row ):
								if($d%2==0){
									echo '<div class="row-fluid">';
								}
						?>
						<div class="well span6">
							<a href="/<?php echo $row->FOTO_DOKUMEN ?>" target="_blank"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
							<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
							<div class="btn-group">
								<a href="/mahasiswa/jurnal/download/<?php echo $row->ID_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary download-mahasiswa"><i class="icon-download"></i> Download</a>
								<a href="/<?php echo $row->FILE_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary baca-mahasiswa"><i class="icon-play"></i> Baca</a>
							</div>
						</div>
						<?php
								if($d%2!=0){
									echo '</div>';
								}
								$d++;
							endforeach;
						endif;
						?>
					</div>
					<!--tab buku-->
					<div class="tab-pane" id="buku">
						<?php
							$buku=$this->mahasiswa_model->tampilDokumenBuku();
							$a = 0;
							if($buku==0):
								echo '<p>Nothing</p>';
								else:
							foreach($buku as $row ):
								if($a%2==0){
									echo '<div class="row-fluid">';
								}
						?>
							<div class="well span6">
								<a href="/<?php echo $row->FOTO_DOKUMEN ?>" target="_blank"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
								<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
								<div class="btn-group">
									<a href="/mahasiswa/buku/download/<?php echo $row->ID_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary download-mahasiswa"><i class="icon-download"></i> Download</a>
									<a href="/<?php echo $row->FILE_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary baca-mahasiswa"><i class="icon-play"></i> Baca</a>
								</div>
							</div>
						<?php
								if($a%2!=0){
									echo '</div>';
								}
								$a++;
							endforeach;
						endif;
						?>
					</div>
					<!--tab modul-->
					<div class="tab-pane" id="modul">
						<?php
							$modul=$this->mahasiswa_model->tampilDokumenModul();
							$b = 0;
							if($modul==0):
								echo '<p>Nggak ada</p>';
								else:
							foreach($modul as $row ):
								if($b%2==0){
									echo '<div class="row-fluid">';
								}
						?>
						<div class="well span6">
							<a href="/<?php echo $row->FOTO_DOKUMEN ?>" target="_blank"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
							<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
							<div class="btn-group">
								<a href="/mahasiswa/modul/download/<?php echo $row->ID_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary download-mahasiswa"><i class="icon-download"></i> Download</a>
								<a href="/<?php echo $row->FILE_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary baca-mahasiswa"><i class="icon-play"></i> Baca</a>
							</div>
						</div>
						<?php
								if($b%2!=0){
									echo '</div>';
								}
								$b++;
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
							<a href="/<?php echo $row->FOTO_DOKUMEN ?>" target="_blank"><img src="/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
							<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
							<div class="btn-group">
								<a href="/mahasiswa/buletin/download/<?php echo $row->ID_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary download-mahasiswa"><i class="icon-download"></i> Download</a>
								<a href="/<?php echo $row->FILE_DOKUMEN ?>" target="_blank" class="btn btn-mini btn-primary baca-mahasiswa"><i class="icon-play"></i> Baca</a>
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
</div>
	 <!--BAGIAN FOOTER-->
  	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
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