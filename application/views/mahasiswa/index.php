<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Mahasiswa</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/static/css/main.css" />
		<link rel="stylesheet" href="/static/css/style.css" />
			
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
					<li><a href="/mahasiswa/profilmahasiswa"><img src="/images/glyphicons/png/glyphicons_003_user.png" alt=""> Profil</a>
				  
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
				<span class="label label-inverse">			
				Username | 0955201554
				</span>
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
					<form class="navbar-search pull-right">
						<input type="text" class="search-query" placeholder="Cari Dokumen" id="cari"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
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
		<div class="divider"></div>
			<?php
				$jurnal=$this->mahasiswa_model->tampilJurnal();
				if($jurnal==0):
				
					else:
				foreach($jurnal as $row ):
			?>
			<div class="well span5">
				<a href="#Doc"><img src="/upload/jurnal/<?php echo $row->FOTO_DOKUMEN ?>" class="thumbnail image-list"></a>
				<h5><?php echo $row->JUDUL_DOKUMEN ?></h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<?php
					endforeach;
				endif;
			?>
		<br>
		<!--<div class="pagination pagination-centered pagination-large">
		<ul>
			<li><a href="#">Prev</a></li>
			<li class="active">
			<a href="#">1</a>
			</li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">Next</a></li>
			</ul>
		</div>
		-->
	  </div>
	  <!--tab buku-->
	  <div class="tab-pane" id="buku">
		<div class="divider"></div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/2.jpg" class="thumbnail image-list"></a>
				<h5>Buku </h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/2.jpg" class="thumbnail image-list"></a>
				<h5>Buku</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/2.jpg" class="thumbnail image-list"></a>
				<h5>Buku</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<ul class="thumbnails">
				  <li class="thumbnail">
					<img src="/images/2.jpg" class="image-list">
					<a href="#" class="ribbon ribbon-left">New Item</a>
				  </li>
				</ul>
				<h5>Buku</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
		<br>
		
		<div class="pagination pagination-centered">
		<ul>
			<li><a href="#">Prev</a></li>
			<li class="active">
			<a href="#">1</a>
			</li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">Next</a></li>
			</ul>
		</div>
		
	  </div>
	  <!--tab modul-->
	  <div class="tab-pane" id="modul">
		<div class="divider"></div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/4.jpg" class="thumbnail image-list"></a>
				<h5>Modul </h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<ul class="thumbnails">
				  <li class="thumbnail">
					<img src="/images/4.jpg" class="image-list">
					<a href="#" class="ribbon ribbon-left">New Item</a>
				  </li>
				</ul>
				<h5>Buku</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...</p><br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/4.jpg" class="thumbnail image-list"></a>
				<h5>Modul</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/4.jpg" class="thumbnail image-list"></a>
				<h5>Modul</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
		<br>
		
		<div class="pagination pagination-centered">
			<ul>
				<li><a href="#">Prev</a></li>
				<li class="active">
				<a href="#">1</a>
				</li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">Next</a></li>
			</ul>
		</div>
		
	  </div>
	  <!--tab bulletin-->
	  <div class="tab-pane" id="buletin">
		<div class="divider"></div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin </h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
			<div class="well span5">
				<a href="#Doc"><img src="/images/3.jpg" class="thumbnail image-list"></a>
				<h5>Buletin</h5>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
				<div class="btn-group">
					<button class="btn btn-mini  download-mahasiswa"><img src="/images/glyphicons/png/glyphicons_200_download.png" alt=""></button>
					<button class="btn btn-mini  baca-mahasiswa"><img src="/images/glyphicons/png/glyphicons_220_play_button.png" alt=""> </button>
				</div>
			</div>
		<br>
		
		<div class="pagination pagination-centered">
		<ul>
			<li><a href="#">Prev</a></li>
			<li class="active">
			<a href="#">1</a>
			</li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">Next</a></li>
			</ul>
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
			<span>Created by: <a href="/humans.txt" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>

<script type="text/javascript">
$('#tab-dok a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
$('.download-mahasiswa').attr('title', 'klik untuk mengunduh dokumen').tooltip();
$('.btn-warning').attr('title', 'klik untuk membaca dokumen').tooltip();
$('.baca-mahasiswa').attr('title', 'klik untuk melihat detail  dokumen').tooltip();

	$(function(){
          $('#cari').typeahead({
             items:4,
             source: ['Aaaa', 'Abbb', 'Accc', 'aku', 'kamu', 'dia' , 'mereka']
          });
     });
</script>
</body>
	
</html>