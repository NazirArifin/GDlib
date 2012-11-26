<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>GDlib | Admin</title>
    <link rel="stylesheet" href="/third_party/css/smoothness/jquery-ui-1.9.1.custom.min.css" />
    <link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css" />
	<!-- 
		edited by nazir
		path untuk jquery dan bootstrap.min.js diubah
	-->
    <script src="/third_party/jquery/jquery-1.8.2.min.js"></script>
    <script src="/third_party/jquery.ui/jquery-ui-1.9.1.custom.min.js"></script>
    <script src="/third_party/bootstrap/bootstrap.min.js"></script>
    
    <style type="text/css">
	body {
		background-image:url('/images/ogo.png');
	}
	#logo{
	position:absolute;
	left:300px;
	top:-9px;
	}
	#sidebar{position:fixed;}

    </style>
	
    
</head>
<body>
	
<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner ">
	  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
	  </a>
	  <!--button group-->
			<div class="btn-group pull-right">
			  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i> 
				
				<span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu">
				<li><a href="#"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="#"><i class="icon-lock"></i> Pengaturan Privasi</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-off"></i> Keluar</a></li>
				
			  </ul>
			</div>
		<!--button group-->
		<a href="#"><img src="/images/ogo.png" class="brand" width="35" height="30" id="logo"/></a>
			<div class="navbar-search input-append" >
			  <input class="span2" id="appendedInputButton" type="text" >
			  <button class="btn" type="button"><i class="icon-search"></i></button>
			</div>
			
		<ul class="nav pull-right nav-pills">
		  <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
		  <li><a href="#"><i class="icon-user"></i> Profile</a></li>
		  
		</ul>
	  </div>
	</div>
	<br>
	<br>
	<br>
<div class="container-fluid" id="container">
  <div class="row-fluid" id="form">
    <div class="well span3" id="sidebar">
        <ul class="nav nav-list">
		
			<li class="nav-header">
			Tapay
			</li>
			<li class="divider"></li>
			<li>
			<a href="#">
			<i class="icon-user"></i>
			Admin
			</a>
			</li>
			<li>
			<a href="#">
			<i class="icon-heart"></i>
			Love
			</a>
			</li>
			<li>
			<a href="#">
			<i class="icon-refresh"></i>
			Refresh
			</a>
			</li>
			<li class="nav-header">
			Tapay
			</li>
			<li class="divider"></li>
			<li>
			<a href="#">
			<i class="icon-user"></i>
			Admin
			</a>
			</li>
			<li>
			<a href="#">
			<i class="icon-heart"></i>
			Love
			</a>
			</li>
			<li>
			<a href="#">
			<i class="icon-refresh"></i>
			Refresh
			</a>
			</li>
			</ul>
    </div>
    <div class="well span9 pull-right">
	<input type="text" class="input-medium search-query" >
     <button class="btn btn-large btn-success pull-right" id="tombol"><i class="icon-plus icon-white"></i>Tambah</button><br><br><br>
	 <div class="well span5">
	 <img src="/images/animal1.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	 <div class="well span5">
	 <img src="/images/animal2.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	 <div class="well span5">
	 <img src="/images/animal3.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	 <div class="well span5">
	 <img src="/images/animal4.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	 <div class="well span5">
	 <img src="/images/animal5.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	 <div class="well span5">
	 <img src="/images/animal6.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	 <div class="well span5">
	 <img src="/images/animal7.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	 <div class="well span5">
	 <img src="/images/animal8.png" width="100px" height="100px"><h5>Lorem ipsum</h5><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet...<a href="#" class="label label-info" >read more</a></p><br>
	 <button class="btn btn-mini btn-success tombol2"><i class="icon-wrench icon-white"></i>Edit</button>
	 <button class="btn btn-mini btn-danger"><i class="icon-trash icon-white"></i>Delete</button>
	 </div>
	<div class="pagination" align="center">
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

</script>

</body>
</html>