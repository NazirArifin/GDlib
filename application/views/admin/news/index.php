<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | News</title>
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.core.css" />
			<link rel="stylesheet" href="/third_party/alertify/alertify.default.css" />
			<link rel="stylesheet" href="/css/style.css"/>
			<link rel="stylesheet" href="/css/paging.css"/>
     <style type="text/css">
	#logo {
		height: 31px;
		margin-top: 2px;
	}
/*	.halaman
	 {
	 margin:10px;
	 font-size:11px;
	 }
	.halaman a
	 {
	    padding:3px;
	    background:#990000;
	    -moz-border-radius:5px;
	    -webkit-border-radius:5px;
	    border:1px solid #FFA500;
	    font-size:10px;
	    font-weight:bold;
	    color:#FFF;
	    text-decoration:none;
	}
*/
	div.paging {
	padding     : 2px;
	margin      : 2px;
	text-align  : center;
	font-family : Tahoma;
	font-size   : 12px;
	}
	div.paging a {
	    padding             : 2px 6px;
	    margin-right        : 2px;
	    border              : 1px solid #DEDFDE;
	    text-decoration     : none;
	    color               : #0061DE;
	    background-position : bottom;
	}
	div.paging a:hover {
	    background-color: #0063dc;
	    border : 1px solid #fff;
	    color  : #fff;
	}
	div.paging span.current {
	    border : 1px solid #DEDFDE;
	    padding      : 2px 6px;
	    margin-right : 2px;
	    font-weight  : bold;
	    color        : #FF0084;
	}
	div.paging span.disabled {
	    padding      : 2px 6px;
	    margin-right : 2px;
	    color        : #ADAAAD;
	    font-weight  : bold;
	}
	div.paging span.prevnext {    
	  font-weight : bold;
	}
	div.paging span.prevnext a {
	     border : none;
	}
	div.paging span.prevnext a:hover {
	    display: block;
	    border : 1px solid #fff;
	    color  : #fff;
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
				<div class="alert alert-info">
					<li class="nav-header">Pengguna</li>
					<li><a href="/admin/dosen" class="btn btn-block btn-success"><i class="icon-user icon-white"></i> Dosen</a></li>
					<li class="divider"></li>
					<li><a href="/admin/mahasiswa" class="btn btn-block btn-success"><i class="icon-user icon-white"></i> Mahasiswa</a></li>
				</div>
				<div class="alert alert-info">
					<li class="nav-header">Dokumen</li>
					<li><a href="/admin/jurnal" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Jurnal</a></li>
					<li class="divider"></li>
					<li><a href="/admin/buku" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buku</a></li>
					<li class="divider"></li>
					<li><a href="/admin/modul" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Modul</a></li>
					<li class="divider"></li>
					<li><a href="/admin/buletin" class="btn btn-block btn-info"><i class="icon-file icon-white"></i> Buletin</a></li>
					<li class="divider"></li>
				</div>
				<div class="alert alert-info">
					<li class="nav-header">Lainnya</li>
					<li><a href="/admin/news" class="btn btn-block btn-warning"><i class="icon-warning-sign icon-white"></i> Berita</a></li>
				</div>
			</ul>
		</div>
		
    <div class="well span9">
		<div class="navbar navbar-inner">
				<form class="navbar-search pull-left">
					  <input type="text" class="search-query" placeholder="Cari berita">
				</form>
				<button class="btn btn-mini btn-info pull-right" id="tombol" onClick="return tambahModul()"><i class="icon-plus icon-white"></i></button>
		</div>
				<div class="paging"><?php echo $halaman ?></div>
				    <table class="table">
					<thead>
						<th>NO</th>
						<th>ID Dokumen</th>
						<th>Judul Dokumen</th>
						<th>Kata Kunci Dokumen</th>
					</thead>
					<tbody>
					<?php
					if(empty($query)):
					?>
					    <tr><td colspan="4">Data tidak tersedia</td></tr>  
					<?php
					else:
					    $no=1;
					    foreach($query as $row):
					?>
					    <tr>
						<td><?php echo $no ?></td>
						<td><?php echo $row->ID_DOKUMEN ?></td>
						<td><?php echo $row->JUDUL_DOKUMEN ?></td>
						<td><?php echo $row->KATA_KUNCI_DOKUMEN ?></td>
					    </tr>
					    <?php
					    $no++;
					    endforeach;
					endif;
					?>
					</tbody>
				</table>
				<div class="paging"><?php echo $halaman ?></div>
	
    </div>
  </div>
</div>

	<footer class="row-fluid">
		<div class="span12">
			<hr>
			<img src="/images/favicon.png" class="pull-left" />
			<span>Created by: <a href="/humans.txt" rel="tooltip" title="view creators">Lab Crew++</a>. <br />Copyright &copy; 2012. All rights reserved</span>
		</div>
	</footer>
	
<script src="/third_party/jquery.ui/jquery-1.8.2.js"></script>
			<script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
			<script src="/third_party/bootstrap/bootstrap.min.js"></script>
			<script src="/third_party/alertify/alertify.min.js"></script>
			<script src="/js/admin.js"></script>
</body>
</html>