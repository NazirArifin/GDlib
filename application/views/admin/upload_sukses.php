<html>
<head>
<title>Upload Form</title>
</head>
<body>
<h3>Dokumen Perusahaan berhasil diupload</h3>
<ul>
<?php
foreach($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<p><?php echo anchor('upload', 'Upload Dokumen lainnya'); ?></p>
</body>
</html>