<!DOCTYPE html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
		<title>GDlib | Dosen</title>
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
		<li><a href="/admin/model"><i class="icon-file"></i> Model</a></li>
		<li><a href="/admin/buletin"><i class="icon-file"></i> Buletin</a></li>
		<li class="divider"></li>
		
		<li class="nav-header">Lainnya</li>
		<li><a href="/admin/news"><i class="icon-warning-sign"></i> Berita</a></li>
	</ul>
		</div>
		<div class="well span9 pull-right">
			<input type="text" class="input-medium search-query" >
			<button class="btn btn-medium btn-success pull-right" id="tombol"><i class="icon-plus icon-white"></i>Tambah</button><br><br><br>
			<div class="container-fluid">
				<div class="row-fluid">
				<?php
								$dosen=$controller->admin_model->tampilUserDosen();
								if ($dosen==0):
									printf("Data Dosen tidak ada");
								else: ?>
					<div class="span4">
									<img src="/images/animal1.png" alt=""/>
					</div>
					<div class="span8">
									<table border='1'>
									<tr><td>NAMA</td><td>AKTIVITAS</td><td>ID Facebook</td></tr>
									<?php
									foreach ($dosen as $row):
									?>
										<tr>
										<td><?php echo $row->NAMA_USER ?></td>
										<td><?php echo $row->AKTIVITAS_USER ?></td>
										<td><?php echo $row->ID_FACEBOOK_USER ?></td>
										</tr>
								
											
					<h5>Habieb BreakHouse Gombal Gambel</h5><p>Medelan - Lenteng - Sumenep - Madura - Jawa Timur - Indonesia - Asia - Bumi - Dunia - Akhirat</p><br>
						<button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i> Edit</button>
						<button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i> Delete</button>
						<button class="btn btn-mini btn-danger"><i class="icon-map-marker icon-white"></i> Detail</button>
					</div>
									<?php
									endforeach;
									?>
									</table>
								<?php
								endif;
								?>
				</div>
			</div>
			<hr>
			<hr>
					<div class="pagination" align="center">
						<ul>
							<li><a href="#">Prev</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
		</div>
	</div>
</div>
 <div class="modal fade" id="modal1">
    <div class="modal-header">
    <button class="close" data-dismiss="modal">X</button>
    <h3>Edit Profil</h3>
    </div>
    <div class="modal-body">
    <form class="form-horizontal">

		<table class="table ">
		<thead>
		<tr>
		<th>Nama</th>
		<td>
			<div class="input-prepend">
              <span class="add-on"><i class="icon-tasks"></i></span><input class="span3" id="inputIcon" type="text" required="" placeholder="Your title">
            </div>
		</td>		
		</tr>
		</thead>
		<tbody>
		
		<tr>
		<th>Isi News</th>
		<td>
			<div class="input-prepend">
              <textarea rows="6"></textarea>
            </div>
			</td>
		</tr>
		<tr>
		<th>Foto</th>
		<td>
		<div class="input-prepend">
              <span class="add-on"><i class="icon-picture"></i></span><input class="span4" id="inputIcon" type="file" required="" placeholder="your photo">
            </div></td>
		</tr>
		<tr>
		<th>Status</th>
		<td>
		
            <div class="input-prepend">
              
            </div>
			<input type="radio" class="radio" name="mail">&nbsp;<span class="label label-info">show</span> <input type="radio" class="radio" name="mail">&nbsp; <span class="label label-important">dont show</span>
			</td>
		</tr>
		
		
		
		</tbody>
		</table>
		
    </div>
		<div class="modal-footer">
		<button href="#" class="btn btn-danger btn-large" data-dismiss="modal" id="close"><i class="icon-remove icon-white"></i> Close</button>
    <button  href="#" class="btn btn-primary btn-large"  type="submit"><i class="icon-ok icon-white"></i> Simpan</button>
		</div>
    </div>
	</form>
<!--modal2-->
<div class="modal fade" id="modal2">
    <div class="modal-header">
    <button class="close" data-dismiss="modal">X</button>
    <h3>Edit Profil</h3>
    </div>
    <div class="modal-body">
    <form class="form-horizontal">

		<table class="table ">
		<thead>
		<tr>
		<th>Nama</th>
		<td>
			<div class="input-prepend">
              <span class="add-on"><i class="icon-tasks"></i></span><input class="span3" id="inputIcon" type="text" required="" placeholder="Your title">
            </div>
		</td>		
		</tr>
		</thead>
		<tbody>
		
		<tr>
		<th>Isi News</th>
		<td>
			<div class="input-prepend">
              <textarea rows="6"></textarea>
            </div>
			</td>
		</tr>
		<tr>
		<th>Foto</th>
		<td>
		<div class="input-prepend">
              <span class="add-on"><i class="icon-picture"></i></span><input class="span4" id="inputIcon" type="file" required="" placeholder="your photo">
            </div></td>
		</tr>
		<tr>
		<th>Status</th>
		<td>
		
            <div class="input-prepend">
              
            </div>
			<input type="radio" class="radio" name="mail">&nbsp;<span class="label label-info">show</span> <input type="radio" class="radio" name="mail">&nbsp; <span class="label label-important">dont show</span>
			</td>
		</tr>
		
		
		
		</tbody>
		</table>
		
    </div>
		<div class="modal-footer">
		<button href="#" class="btn btn-danger btn-large" data-dismiss="modal" id="close"><i class="icon-remove icon-white"></i> Close</button>
    <button  href="#" class="btn btn-primary btn-large"  type="submit"><i class="icon-ok icon-white"></i> Simpan</button>
		</div>
    </div>
	</form>	
<script type="text/javascript">
	$('#tombol').click(function(){
	$('#modal1').modal('show');
	});
	$('.tombol2').click(function(){
	$('#modal2').modal('show');
	});
 $(function() {
       
    });
</script>

</body>
</html>