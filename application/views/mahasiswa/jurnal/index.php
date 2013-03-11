<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>Mahasiswa | Jurnal</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="/css/style.css" />
		<link rel="stylesheet" href="/css/main.css" />
			
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
		<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="/third_party/bootstrap/bootstrap.min.js"></script>
		<style type="text/css">
		#image {
			float: left;
			margin: 0px 15px 10px 0px;
		}
		#query-jurnal{
			width:120px;
			transition:All 1s ease-in;
			-webkit-transition:All 1s ease-in;
			-moz-transition:All 1s ease-in;
			-o-transition:All 1s ease-in;
			}
		#query-jurnal:focus{
			width:300px;
			transition:All 0.5s ease-in;
			-webkit-transition:All 0.5s ease-in;
			-moz-transition:All 0.5s ease-in;
			-o-transition:All 0.5s ease-in;
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
<br />
<br />
<br />
<div class="span12">
	<h1 style="text-align:center;" class="three">Jurnal Mahasiswa</h1>
</div>
<div class="container-fluid">
	
	<div class="row-fluid">
		<div class="well span8">
			<ul class="breadcrumb">
				<li><a href="http://gdlib.com/mahasiswa">Mahasiswa</a> <span class="divider">/</span></li>
				<li class="active">Jurnal</li>
			</ul>   
			<div class="navbar navbar-inner">
				<a class="brand">Jurnal</a>
				<form class="navbar-form pull-right" id="form-jurnal">
					<input class="model" id="query-jurnal" name="query_jurnal" placeholder="Search Jurnal" type="text">
					<button class="btn" onClick="return Jurnal.search()"><i class="icon-search"></i></button>
				</form>
			</div>
		<br>
			<article id="document-jurnal" class="post">
			
			</article>
			<div class="pagination pagination-centered pagination-medium" id="pagination-jurnal">
				<ul>
					<li><a href="">&laquo;</a></li>
					<li><a href="">1</a></li>
					<li><a href="">&raquo;</a></li>
				</ul>
			</div>
		</div>
	
    <div class="well span4">
		<section class="blog-widget">
              <div class="tabbable">
				<!--NAVIGASI TAB-->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tabpopuler" data-toggle="tab">Pos Populer</a></li>
                  <li><a href="#tabterbaru" data-toggle="tab">Post Terbaru</a></li>
                </ul>
				<!--END NAVIGASI TAB-->
				
				<!--TAB CONTENT-->
                <div class="tab-content">
					<!--TAB CONTENT YG PERTAMA-->
					<div class="tab-pane active" id="tabpopuler">
                      <div class="alert alert-info">
						<h2 class="media-heading">Populer</h2>
					</div>
						<div class='testimonial'>
							<h4>Judul</h4>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit.... </blockquote>
							<p class='testimonial-footer'>
								<img style="width:32px; height:32px;" src="/images/rud.jpg" >
								<b>Rudiec Nuada</b> — designer
							</p>
						</div>
						<hr>
						<div class='testimonial'>
							<h4>Judul</h4>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit.... </blockquote>
							<p class='testimonial-footer'>
								<img style="width:32px; height:32px;" src="/images/rud.jpg" >
								<b>Rudiec Nuada</b> — designer
							</p>
						</div>
						<div class='testimonial'>
							<h4>Judul</h4>
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit.... </blockquote>
							<p class='testimonial-footer'>
								<img style="width:32px; height:32px;" src="/images/rud.jpg" >
								<b>Rudiec Nuada</b> — designer
							</p>
						</div>					
                  </div><!--KONTENT PERTAMA-->
				  <!--TAB CONTENT YG KEDUA-->
                  <div class="tab-pane" id="tabterbaru">
						<div class="alert alert-info">
							<h2 class="media-heading">Terbaru</h2>
							</div>
									<?php
										$jurnal=$this->mahasiswa_model->tampilDokumenJurnal();
										if($jurnal==0):
											echo '<p>Tidak Ada</p>';
											else:
										foreach($jurnal as $row ):
									?>
								<div class='testimonial'>
									<h4><?php echo $row->JUDUL_DOKUMEN ?></h4>
									<blockquote><?php echo $row->PROLOG_DOKUMEN ?> </blockquote>
									<p class='testimonial-footer'>
										<img style="width:32px; height:32px;" src="/<?php echo $row->FOTO_DOKUMEN ?>" >
										<b><?php echo $row->PENGARANG_DOKUMEN ?></b> — designer
									</p>
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
         </section>
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
			<script src="/js/paging.mahasiswa.dokumen.js"></script>
<script type="text/javascript">

</script>
</body>
	
</html>