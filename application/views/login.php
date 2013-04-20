<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login GDlib</title>
	<link rel="stylesheet" href="/third_party/bootstrap/css/elemento.min.css">
	<link rel="stylesheet" href="/third_party/bootstrap/css/bootstrap-responsive.min.css">
	<style>
	body{
	background-image:url(images/bglogin.png);
	font-family: "League-Gothic", Courier;
	}
	h1{
	text-align: center;
	margin: 50px auto;
	font-family: "League-Gothic", Courier;
	font-size: 110px; 
	text-transform: uppercase;
	color: #707070;
	text-shadow: 5px 5px 0px #eee, 7px 7px 0px #707070;
	}
	.modal{
	margin-top:100px;
	}
	}
	label{
	font-size:50px;
	}
	input{
	width:200px;
	transition: all 1s ease;
	-moz-transition: all 1s ease;
	-webkit-transition: all 1s ease;
	-o-transition: all 1s ease;

	}
	input:focus{
	width:350px;
	transition: all 0.5s ease-out;
	-moz-transition: all 0.5s ease-out;
	-webkit-transition: all 0.5s ease-out;
	-o-transition: all 0.5s ease-out;
	}
	#logo{
	height:50px;
	width:50px;
	}
	h3{
	font-size:40px;
	text-align:center;
	}
	</style>
</head>
<body>
	<div class="container">
	<h1>Login ke GDlib</h1>
		<div class="modal">
			<div class="modal-header">
				<h3><img src="/images/logo.png" alt="GDlib" id="logo">Gedung-D Library </h3>
			</div>
				<form action="/welcome/home" method="POST" id="form-login">
			<div class="modal-body">
					<table>
						<tr>
							<td><label for="nama">Username</label> </td>
							<td></td>
							<td><input type="text" name="nama" id="nama" placeholder="Isi NPM kamu" required></td>
						</tr>
						<tr>
							<td><label for="password">Password</label></td>
							<td></td>
							<td><input type="password" name="password" id="password" placeholder="Isi password kamu" required></td>
						</tr>
					</table>
			</div>
			<div class="modal-footer">
				<button class="btn-block btn-info btn-large" type="submit" onClick="return login()">Login</button>
				<?=isset($siapa) ? $siapa : ''?>
			</div>
				</form>
		</div>
    </div>

		<script src="/js/login.js"></script>
</body>
</html>