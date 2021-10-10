<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,1);
	echo form_open($aksi);
	echo form_label("Type your text: ");
	echo form_textarea($teks);
	echo "<br />";
	echo form_submit("","Send");
	echo form_close();
?>
</body>
</html>

