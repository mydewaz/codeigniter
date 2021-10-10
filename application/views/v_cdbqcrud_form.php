<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,2);
	echo form_open("$scriptaksi");
	echo form_label("No Teman : ");
	echo form_input($noteman);
	echo br();
	echo form_label("Nama teman : ");
	echo form_input($namateman);
	echo br();
	echo form_label("No Telp : ");
	echo form_input($notelp);
	echo br();
	echo form_label("Email : ");
	echo form_input($email);
	echo br();
	echo form_submit("btnSimpan","Simpan");
	echo form_close();
?>
</body>
</html>

