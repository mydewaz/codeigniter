<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,1);
	echo heading("Selamat!",2);
	echo form_label("Nama user: ");
	echo $username["value"];
	echo "<br />";
	echo form_label("Email: ");
	echo $useremail["value"];
	echo "<br />";
?>
</body>
</html>

