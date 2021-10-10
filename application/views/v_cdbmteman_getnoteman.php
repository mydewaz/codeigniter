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
	echo form_label("No Teman: ");
	echo form_input($input);
	echo form_submit("btn$aksi","$aksi");
	echo form_close();
?>
</body>
</html>

