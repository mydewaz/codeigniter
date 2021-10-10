<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,1);
	echo form_label("Nama user: ");
	echo $username;
	echo "<br />";
	echo form_label("Password: ");
	echo $userpass;
	echo "<br />";
?>
</body>
</html>

