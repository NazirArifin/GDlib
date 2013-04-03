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
		<link href="/third_party/rating/jquery.rating.css" type="text/css" rel="stylesheet"/>
		<link href="/third_party/jsliderelated/jsliderelated.css" type="text/css" rel="stylesheet"/>
		<link rel="stylesheet" href="/css/style.css" />
		<link rel="stylesheet" href="/css/main.css" />
			
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
		<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="/third_party/bootstrap/bootstrap.min.js"></script>
		<script src="/third_party/rating/jquery.MetaData.js" type="text/javascript" ></script>
		<script src="/third_party/rating/jquery.rating.js" type="text/javascript" ></script>
		<script src="/third_party/jsliderelated/jsliderelatedpages.js" type="text/javascript"></script>
		<script src="/js/mahasiswa.js" type="text/javascript"></script>
		
		<style type="text/css">
		#image {
			float: left;
			margin: 0px 15px 10px 0px;
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
<div class="container">
	<div class="row-fluid">
		<div class="well span12"><br>
	        <article class="post">
				<div class="post-header">
					<h2 class="post-title"><a href="#"><?php echo $judul; ?></a></h2>
					<div class="post-date">
						<h4><?php echo $tahun; ?></h4>
					</div>
				</div>
				<div class="post-entry pull-left">
					<p><?php echo $prolog ?></p>
              </div>
				   <ul class="post-meta">
						<li><a href=""><img src="/images/icon/glyphicons_401_github.png" alt=""> <?php echo $pengarang ?></a></li>
						<li><a href=""> <img src="/images/icon/glyphicons_407_spotify.png" alt=""> 2 Comments</a></li>
				  </ul>
              <div class="clearfix"></div> 
            <section class="blog-widget">
                <h4>About the author</h4>
                  <div class="about">
                    <img width="160" height="180" src="/<?php echo $foto ?>" alt="200x180" style="width: 200px; height: 180px;">
                    <div class="social">
                        <a href="#"><img src="/images/icon/glyphicons_410_facebook.png"></a>
                        <a href="#"><img src="/images/icon/glyphicons_411_twitter.png"></a>
                        <a href="#"><img src="/images/icon/glyphicons_385_blogger.png"></a>
                    </div>
                    <h4 class="name"><?php echo $pengarang ?></h4>
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
					</div>
				</section>
				<hr>
				<div class='testimonial'>
					<p class='testimonial-footer'></p>
				</div>
			<div class="well span3">
					<h4>Jenis Dokumen</h4>
			</div>
			<div class="well span3">
					<h4>Last Update</h4>
			</div>
			<div class="well span3">
					<h4 id="hover-test">Rating me </h4>
					<input class="hover-star" type="radio" name="test-3B-rating-1" value="1" title="Rudiec Baik"/>
					 <input class="hover-star" type="radio" name="test-3B-rating-1" value="2" title="Rudiec Oke"/>
					 <input class="hover-star" type="radio" name="test-3B-rating-1" value="3" title="Rudiec Cakep"/>
					 <input class="hover-star" type="radio" name="test-3B-rating-1" value="4" title="Rudiec Ganteng"/>
					 <input class="hover-star" type="radio" name="test-3B-rating-1" value="5" title="Rudiec Keren"/>
			</div>
			<div class="well span2">
					<h4>Pembaca:</h4>
			</div>
            </article>
			<br>
		</div>
	</div>
</div >
<!--jsliderated-->
	<div id="jsrp_related">
		<a href="#" id="jsrp_related-close"><img id="close_btn" src="/images/close_button.gif" alt="Close"></a>
		<h3>Kamu sudah lihat ini?</h3>
	<ul>
		<?php
				$modul=$this->mahasiswa_model->tampilDokumenModul();
				if($modul==0):
				echo '<p>Nggak ada</p>';
				else:
				foreach($modul as $row ):
		?>

		<li><a href="#" ><img src="/<?php echo $row->FOTO_DOKUMEN ?>" width="70" height="50" border="0" class="jsrp_thumb" /></a><br> <a href="#" rel="bookmark" class="jsrp_title"><?php echo $row->JUDUL_DOKUMEN ?></a></li>
		<?php 
			endforeach;
			endif;
		?>
	</ul>
	</div>
  	<footer class="row-fluid footer">
		<div class="well span12">
			<hr>
			<center><a href="#"><img src="/images/favicon.png" id="gd"></a><br>
			<span>Created by: <a href="/creator" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span></center>
		</div>
	</footer>
</div>

<script type="text/javascript">
$('.hover-star').rating({
  focus: function(value, link){
    var tip = $('#hover-test');
    tip[0].data = tip[0].data || tip.html();
    tip.html(link.title || 'value: '+value);
  },
  blur: function(value, link){
    var tip = $('#hover-test');
    $('#hover-test').html(tip[0].data || '');
  }
});
$().ready(function() {
     $('#jsrp_related').jsliderelatedposts({
         speed: 1000,
         scrolltrigger: 0.75,
         smartwidth: true
     });
   });
</script>
</body>
	
</html>