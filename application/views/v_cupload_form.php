<?=doctype('html5');?>
<html>
<head>
	<title><?=$judulapp;?></title>
<head>
<body>
<?php 
	echo heading($judulapp,2);
	echo $error;
	echo form_open_multipart("$scriptaksi");
	echo form_label("Pilih file untuk diupload : ");
	echo form_upload("userfile");
	echo br();
	echo form_submit("btnSimpan","$aksi");
	echo form_close();
?>
</body>
</html>
