<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Creator</title>
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
	.creator{
	width:270px;
	height:280px;
	
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
					<li><a href="/dosen"><img src="/images/glyphicons/png/glyphicons_020_home.png" alt=""> Dashboard</a>
					<li><a href="/dosen/profil"><img src="/images/glyphicons/png/glyphicons_003_user.png" alt=""> Profil</a>
				  
				</ul>
			</div>
		</div>
</div>
<br>
<br>
<br>
<br>

<div class="container">
	<div class="well span11">
		<h1>About GDlib</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae consequuntur dolorem optio obcaecati in. Tempore deleniti quas ullam voluptatibus fugit labore recusandae eaque quae doloribus molestias dolores voluptate nihil provident!</p>
		<hr>
		<h1>Team Creator</h1>
		<hr>
	<div class=" span3">
        <div class="about portrait">
			<img src="/images/creator/nazir.jpg" class="creator">
            <div class="social">
            <a href="/creator/nazir"><img src="/images/glyphicons/png/glyphicons_352_nameplate.png"  class="iconic" data-placement="left"></a>
            </div>
			<h3 class="name">Project Manager</h3>
			<h4 class="label label-inverse name">Nazir Arifin | 09552015xx</h4>
        </div>
    </div>
	<div class=" span3">
        <div class="about portrait">
			<img src="/images/rud.jpg">
            <div class="social">
            <a href="/creator/rudi"><img src="/images/glyphicons/png/glyphicons_352_nameplate.png"  class="iconic" data-placement="left"></a>
            </div>
			<h3 class="name">Designer</h3>
			<h4 class="label label-important name">Rudi Hartono | 0955201554</h4>
        </div>
    </div>
	<div class=" span3">
        <div class="about portrait">
			<img src="/images/creator/fajrul.jpg" class="creator">
            <div class="social">
            <a href="/creator/fajrul"><img src="/images/glyphicons/png/glyphicons_352_nameplate.png"  class="iconic" data-placement="left"></a>
            </div>
			<h3 class="name">Designer</h3>
			<h4 class="label label-important name">Fajrul Iman A.A | 1155201xxx</h4>
        </div>
    </div>
	<div class=" span3">
        <div class="about portrait">
			<img src="/images/creator/habib.jpg" class="creator">
            <div class="social">
            <a href="/creator/habib"><img src="/images/glyphicons/png/glyphicons_352_nameplate.png"  class="iconic" data-placement="left"></a>
            </div>
			<h3 class="name">Programmer</h3>
			<h4 class="label label-info name">Habibullah | 0955201556</h4>
        </div>
    </div>
	<div class=" span3">
        <div class="about portrait">
			<img src="/images/creator/deki.jpg">
            <div class="social">
            <a href="/creator/deki"><img src="/images/glyphicons/png/glyphicons_352_nameplate.png"  class="iconic" data-placement="left"></a>
            </div>
			<h3 class="name">Programmer</h3>
			<h4 class="label label-info name">Deki Andi Irawan | 0955201588</h4>
        </div>
    </div>
	<div class=" span3">
        <div class="about portrait">
			<img src="/images/creator/fawait.jpg" class="creator">
            <div class="social">
            <a href="/creator/fawait"><img src="/images/glyphicons/png/glyphicons_003_user.png" class="iconic" data-placement="left"></a>
            </div>
			<h3 class="name">Programmer</h3>
			<h4 class="label label-info name">Fawait | 0955201607</h4>
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
	<script type="text/javascript" src="/third_party/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="/third_party/bootstrap/bootstrap.min.js"></script>
	
	<script type="text/javascript">
	$('.iconic').attr('title','Lihat profil lengkapku').tooltip();
	</script>
</body>
</html>
