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
	

    </style>
	
    
</head>
<body>

<table border='1'>
	<tr><td>NAMA</td><td>AKTIVITAS</td><td>ID Facebook</td></tr>
		<?php	foreach ($data as $row): ?>
				<tr>
				<td><?php echo $row->NAMA_USER ?></td>
				<td><?php echo $row->AKTIVITAS_USER ?></td>
				<td><?php echo $row->ID_FACEBOOK_USER ?></td>
				</tr>
			}
			<?php endforeach; ?>
			</table>
</body>
</html>