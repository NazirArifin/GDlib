<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="/third_party/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div id="container">
	<a href="/test/ajax" class="ajax" data-replace="#ajax" data-callback="alert('habib');">Test AJax</a>
	
	<form method="post" action="/test/ajax" class="ajax" data-replace="#ajax">
		
		<button type="submit" class="btn btn-primary">SIMPAN</button>
	</form>
</div>
<div id="ajax">

</div>
	
	<script type="text/javascript" src="/third_party/jquery/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/third_party/js/simple-ajax.min.js"></script>
</body>
</html>