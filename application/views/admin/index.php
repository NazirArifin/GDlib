<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Admin</title>
			<link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
			<link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
			<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
			<link rel="stylesheet" href="/css/style.css" />
			<link rel="stylesheet" href="/css/main.css" />
    <style type="text/css">
	#logo {
	height: 31px;
	margin-top: 2px;
	}
	.model {
		font-family:Georgia, "Times New Roman", Times, serif;
	}
	#screenshot{
	position:absolute;
	border:1px solid #ccc;
	background:#333;
	padding:5px;
	display:none;
	color:#fff;
	height:150px;
	width:200px;
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
			<div class="well span9 pull-right">
			<!-- menu tab untuk member -->
				<div class="">
					<div class="navbar navbar-inner">
						<a class="brand">Member</a>
							<form class="navbar-form pull-right" id="form-dosen">
								<input class="model" id="query-dosen" name="query_dosen" placeholder="Search Dosen" type="text">
								<button class="btn" onClick="return Dosen.search()"><i class="icon-search"></i></button>
							</form>
							<form class="navbar-form pull-right hide" id="form-mahasiswa">
								<input class="model" id="query-mahasiswa" name="query_mahasiswa" placeholder="Search Mahasiswa" type="text">
								<button class="btn" onClick="return Mahasiswa.search()"><i class="icon-search"></i></button>
							</form>
					</div>
						<ul class="nav nav-tabs" id="tab-member">
							<li class="active"><a href="#dosen" onClick="return tabDosen()">Dosen</a></li>
							<li><a href="#maha" onClick="return tabMahasiswa()">Mahasiswa</a></li>
						</ul>
					<div class="tab-content">
					<!--tab untuk dosen-->
						<div class="tab-pane active" id="dosen">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nama</th>
										<th>No. Induk</th>
										<th>ID Facebook</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="document-dosen">
									<tr>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
							<div class="pagination pagination-centered pagination-medium" id="pagination-dosen">
								<ul>
									<li><a href="">&laquo;</a></li>
									<li><a href="">1</a></li>
									<li><a href="">&raquo;</a></li>
								</ul>
							</div>		
						</div>
						<!--tab mahasiswa-->
						<div class="tab-pane" id="maha">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nama</th>
										<th>No. Induk</th>
										<th>ID Facebook</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="document-mahasiswa">
									<tr>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
							<div class="pagination pagination-centered pagination-medium" id="pagination-mahasiswa">
								<ul>
									<li><a href="">&laquo;</a></li>
									<li><a href="">1</a></li>
									<li><a href="">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div> 
				<!--menu tab dokument-->
				<div class="">
					<div class="navbar navbar-inner">
						<a class="brand">Dokumen</a>
							<form class="navbar-form pull-right" id="form-jurnal">
								<input class="model" id="query-jurnal" name="query_jurnal" placeholder="Search Jurnal" type="text">
								<button class="btn" onClick="return Jurnal.search()"><i class="icon-search"></i></button>
							</form>
							<form class="navbar-form pull-right hide" id="form-buku">
								<input class="model" id="query-buku" name="query_buku" placeholder="Search Buku" type="text">
								<button class="btn" onClick="return Buku.search()"><i class="icon-search"></i></button>
							</form>
							<form class="navbar-form pull-right hide" id="form-modul">
								<input class="model" id="query-modul" name="query_modul" placeholder="Search Modul" type="text">
								<button class="btn" onClick="return Modul.search()"><i class="icon-search"></i></button>
							</form>
							<form class="navbar-form pull-right hide" id="form-buletin">
								<input class="model" id="query-buletin" name="query_buletin" placeholder="Search Buletin" type="text">
								<button class="btn" onClick="return Buletin.search()"><i class="icon-search"></i></button>
							</form>
					</div>
						<ul class="nav nav-tabs" id="tab-dok">
							<li class="active"><a href="#jurnal" data-toggle="tabi" onClick="return tabJurnal()">Jurnal</a></li>
							<li><a href="#buku" data-toggle="tabi" onClick="return tabBuku()">Buku</li>
							<li><a href="#modul" data-toggle="tabi" onClick="return tabModul()">Modul</a></li>
							<li><a href="#buletin" data-toggle="tabi" onClick="return tabBuletin()">Buletin</a></li>
						</ul>
					<div class="tab-content">
						<!--tab untuk jurnal-->
						<div class="tab-pane active" id="jurnal">
							<table class="table">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Tahun Penerbitan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="document-jurnal">
								</tbody>
							</table>
							<div class="pagination pagination-centered pagination-medium" id="pagination-jurnal">
								<ul>
									<li><a href="">&laquo;</a></li>
									<li><a href="">1</a></li>
									<li><a href="">&raquo;</a></li>
								</ul>
							</div>
						</div>
						<!--tab buku-->
						<div class="tab-pane" id="buku">
							<table class="table">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Tahun Penerbitan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="document-buku">
								</tbody>
							</table>
							<div class="pagination pagination-centered pagination-medium" id="pagination-buku">
								<ul>
									<li><a href="">&laquo;</a></li>
									<li><a href="">1</a></li>
									<li><a href="">&raquo;</a></li>
								</ul>
							</div>
						</div>
						<!--tab modul-->
						<div class="tab-pane" id="modul">
							<table class="table">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Tahun Penerbitan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="document-modul">
								</tbody>
							</table>
							<div class="pagination pagination-centered pagination-medium" id="pagination-modul">
								<ul>
									<li><a href="">&laquo;</a></li>
									<li><a href="">1</a></li>
									<li><a href="">&raquo;</a></li>
								</ul>
							</div>
						</div>
						<!--tab bulletin-->
						<div class="tab-pane" id="buletin">
							<table class="table">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Tahun Penerbitan</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="document-buletin">
								</tbody>
							</table>
							<div class="pagination pagination-centered pagination-medium" id="pagination-buletin">
								<ul>
									<li><a href="">&laquo;</a></li>
									<li><a href="">1</a></li>
									<li><a href="">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div> 
				<!-- halaman News -->
				<div class="">
					<div class="navbar navbar-inner">
						<a class="brand">News</a>
						<form class="navbar-form pull-right" id="form-news">
							<input class="model" id="query-news" name="query_news" placeholder="Search News" type="text">
							<button class="btn" onClick="return News.search()"><i class="icon-search"></i></button>
						</form>
					</div>
							<table class="table">
								<thead>
									<tr>
										<th>Foto</th>
										<th>Judul</th>
										<th>Content</th>
										<th>Tanggal</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody id="document-news">
								</tbody>
							</table>
							<div class="pagination pagination-centered pagination-medium" id="pagination-news">
								<ul>
									<li><a href="">&laquo;</a></li>
									<li><a href="">1</a></li>
									<li><a href="">&raquo;</a></li>
								</ul>
							</div>
				</div>
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
			<script src="/third_party/jquery/tooltip/main-tooltip.js"></script>
			<script src="/js/admin.js"></script>
			<script src="/js/paging.admin.user.js"></script>
			<script src="/js/paging.admin.dokumen.js"></script>
			<script src="/js/paging.admin.news.js"></script>
	<script type="text/javascript">
		$('#tab-dok a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		})
		$('#tab-member a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		})
		$('.icon-trash').attr('title', 'klik untuk menghapus').tooltip();
		$('.icon-edit').attr('title', 'klik untuk mengedit').tooltip();
		$('.icon-share-alt').attr('title', 'klik untuk melihat').tooltip();
		
		$('.label-important').attr('title', 'akun sudah tidak aktif').tooltip();
		$('.label-success').attr('title', 'akun aktif').tooltip();
		$('.label-warning').attr('title', 'akun ini tidak di kenal').tooltip();
		/*
		$('#tab-member a[data-toggle="tab"]').on('shown', function (e) {
			e.target // activated tab
			e.relatedTarget // previous tab
			Document.search()
		});
		// cari data dosen pertam kali
		Document.search()
		*/
	</script>
</body>
</html>