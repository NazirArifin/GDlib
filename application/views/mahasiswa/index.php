<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Mahasiswa</title>
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/static/css/main.css" />
			
		<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
		<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
		<script src="/third_party/bootstrap/bootstrap.min.js"></script>
		<style type="text/css">
		#logo {
			height: 31px;
			margin-top: 0px;
		}
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
				<a href="/"><img src="/images/gd.png" id="logo" /></a>
				<ul class="nav pull-right nav-pills">
					<li><a href="/admin"><i class="icon-home"></i> Dashboard</a></li>
					<li><a href="#"><i class="icon-user"></i> Profil</a></li>
				  
				</ul>
			</div>
		</div>
</div>
<br />
<br />
<br />
<div class="container-fluid">
	<div class="row-fluid">
		<div class=" well span3">
			<div class="well">
				<ul class="thumbnails">
					<li class="span12">
						<a href="#" class="thumbnail"><img src="/images/rud.jpg" alt=""></a>
					</li>
				</ul>
				<span>
					<strong>Administrator</strong><br>
					<a href="#Profil"> Dosen </a><br>
					<a href="#Setting">Settings</a> | <a href="#">Keluar</a>
				</span>
			</div>
			<div class="well">
			<div class="sidebar-nav">
				<div>
					<ul class="nav nav-tabs nav-stacked">
						<li class="nav-header"><h3>Dokumen</h3></li>
						<li><a href="#"><i class="icon-chevron-right"></i> JURNAL</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i> BUKU</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i> MODUL</a></li>
						<li><a href="#"><i class="icon-chevron-right"></i> BULETIN</a></li>
						<li class="divider"></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
<div class="well span9">
	<div class="row-fluid">
		<div class="span10">
	 <div class="">
	 <h2>Dokument</h2>
	 <input type="text" class="input-medium search-query" placeholder="Cari Dokument" ><br><br>
	 <ul class="nav nav-tabs" id="tab-dok">
	  <li class="active"><a href="#jurnal">Jurnal</a></li>
	  <li><a href="#buku">Buku</a></li>
	  <li><a href="#modul">Modul</a></li>
	  <li><a href="#buletin">Buletin</a></li>
	</ul>
	 
	<div class="tab-content">
	<!--tab untuk jurnal-->
	  <div class="tab-pane active" id="jurnal">
		<table class="table">
		  
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Revolution</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>RIP</td>
			  <td>12/12/12</td>
			  <td>
			 <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Kroncong Protol</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
		  </tbody>
		</table>
		
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
	  <!--tab buku-->
	  <div class="tab-pane" id="buku">
	  <table class="table">
		  
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Harry Potter</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Twilight</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Janc#k</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
		  </tbody>
		</table>
		
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
	  <table class="table">
		  
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Algoritma</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Aljabar</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Teknik Digital</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
		  </tbody>
		</table>
		
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
	  <table class="table">
		  
		  <thead>
			<tr>
			  <th>Judul</th>
			  <th>Taggal</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <td>Buletin Siang</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Liputan 6</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
			<tr>
			  <td>Silet</td>
			  <td>12/12/12</td>
			  <td>
			  <div class="btn-group">
			  <button class="btn btn-primary btn-mini"><i class="icon-download icon-white"></i> download</button>
			  <button class="btn btn-warning btn-mini"><i class="icon-eye-open icon-white"></i> lihat</button>
			  <button class="btn btn-success btn-mini"><i class="icon-share-alt icon-white"></i> detail</button>
			  </div>
			  </td>
			</tr>
		  </tbody>
		</table>
		
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
				<div class="row-fluid">
					<div class="span12">
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Delete</a>
						</div>
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Delete</a>
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Delete</a>
						</div>
						<div class="well span6">
							<a href="#Doc"><img src="/images/doc.jpg" width="105" height="97" id="image" /><a/><h5>JUDUL DOKUMEN</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<br />
							<a href="#Lihat_Doc"><i class="icon-eye-open"></i>Lihat</a> | <a href="#Edit_Doc"><i class="icon-edit"></i>Edit</a> | <a href="#"><i class="icon-trash"></i>Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
$('#tab-dok a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	})
$('.btn-primary').attr('title', 'klik untuk mengunduh dokumen').tooltip();
$('.btn-warning').attr('title', 'klik untuk membaca dokumen').tooltip();
$('.btn-success').attr('title', 'klik untuk melihat detail  dokumen').tooltip();
</script>
</body>
	
</html>