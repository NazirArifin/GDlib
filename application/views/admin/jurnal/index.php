<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Jurnal</title>
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.core.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.default.css" />
			<link rel="stylesheet" href="/css/style.css" />
    <style type="text/css">
	#logo {
		height: 31px;
		margin-top: 2px;
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
	<br>
	<br>
	<br>
<div class="container-fluid" id="container">
	<div class="row-fluid" id="form">
		<div class="well span3" id="sidebar">
			<ul class="nav nav-list">
		<li class="nav-header">Pengguna</li>
		<li><a href="/admin/dosen"><i class="icon-user"></i> Dosen</a></li>
		<li><a href="/admin/mahasiswa"><i class="icon-user"></i> Mahasiswa</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Dokumen</li>
		<li><a href="/admin/jurnal"><i class="icon-file"></i> Jurnal</a></li>
		<li><a href="/admin/buku"><i class="icon-file"></i> Buku</a></li>
		<li><a href="/admin/modul"><i class="icon-file"></i> Model</a></li>
		<li><a href="/admin/buletin"><i class="icon-file"></i> Buletin</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Lainnya</li>
		<li><a href="/admin/news"><i class="icon-warning-sign"></i> Berita</a></li>
	</ul>
		</div>
    <div class="well span9 pull-right">
	<input type="text" class="input-medium search-query" >
     <button class="btn btn-mini btn-info pull-right" id="tombol" onClick="return tambahJurnal()"><i class="icon-plus icon-white"></i></button><br><br><br>
	 <div class="well span8">
		<form name="form_jurnal" id="form-jurnal" action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="userfile" size="20" />
		<input type="submit" value="upload" />
		</form>
	 
	 
	
	</div>
</div>
<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/third_party/alertify/alertify.min.js"></script>
			<script src="/js/admin.js"></script>
<script type="text/javascript">
	$('#tombol').attr('title', 'Tambah Jurnal').tooltip();
</script>
</body>
</html>