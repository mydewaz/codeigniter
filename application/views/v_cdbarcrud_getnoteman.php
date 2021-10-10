<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	$input=array(
			"name"=>"noteman"
			,"value"=>""
		);
	echo heading($judulapp,2);
	echo form_open("$scriptaksi");
	echo form_label("Masukkan No Teman: ");
	echo form_input($input);
	echo form_submit("btn$aksi","$aksi");
	echo form_close();
	$this->load->view("v_cdbarcrud_menu");
?>
</body>
</html>

