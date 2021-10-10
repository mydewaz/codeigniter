<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,2);
	echo form_open("$scriptaksi");
	echo form_label("No Teman : ".$noteman);
	echo br();
	echo form_label("Nama teman : ".$namateman);
	echo br();
	echo form_label("No Telp : ".$notelp);
	echo br();
	echo form_label("Email : ".$email);
	echo br();
	echo "Yakin data akan dihapus?";
	echo form_hidden("noteman","$noteman");
	echo form_submit("btn2Del","Hapus");
	echo form_submit("btn2Del","Batal");
	echo form_close();
?>
</body>
</html>

