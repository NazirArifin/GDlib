<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login GDlib</title>
		<link rel="stylesheet" href="/css/alert.css" />
		<link rel="stylesheet" type="text/css" href="/css/baru.css" />
		<link rel="stylesheet" type="text/css" href="/css/demo.css" />
		<link rel="stylesheet" href="/third_party/awesome/css/font-awesome.css" />
	<style>
	body{
		background-image:url(images/bg.jpg);
		font-family: "League-Gothic", Courier;
	}
	</style>
</head>
<body>
	<div class="container">
			<header>
				<h1><b>DGlib {Digital Library}</b></h1>
				<h2>Laboratorium Teknik Informatika</h2>
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
			</header>
		
		
		<section class="main">
				<form class="form-1" action="/home" method="POST" id="form-login">
					<p class="field">
						<input type="text" name="nama" id="nama" placeholder="Isi NPM Kamu" required />
						<i class="icon-user icon-large"></i>
					</p>
					<p class="field">
							<input type="password" name="password" id="password" placeholder="Password Kamu (be empty)" required />
							<i class="icon-lock icon-large"></i>
					</p>	
					<p class="submit">
						<button type="submit" id="loginku" onclick="login()"><i class="icon-arrow-right icon-large"></i></button>
					</p>
					<?=isset($siapa) ? $siapa : ''?>
				</form>
			</section>
    </div>
		<div class="form-actions">Digital Library &copy; 2013</div>
</body>
</html>