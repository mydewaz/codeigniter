<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,2);
	echo form_open("$scriptaksi");
	echo form_label("No Teman : ");
	if ($aksi!="add"){
		echo form_hidden($noteman["name"],$noteman["value"]).$noteman["value"];
	} else {
		echo form_input($noteman);
	}
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
	echo form_submit("btnSimpan","$aksi");
	echo form_close();
	$this->load->view("v_cdbarcrud_menu");
?>
</body>
</html>

