<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,1);
	echo validation_errors(); 
	echo form_open($aksi);
	echo form_label("Nama user: ");
	echo form_input($username);
	echo "<br />";
	echo form_label("Password: ");
	echo form_password($userpass);
	echo "<br />";
	echo form_label("Password konfirmasi: ");
	echo form_password($userpassv);
	echo "<br />";
	echo form_label("Email: ");
	echo form_input($useremail);
	echo "<br />";
	echo form_submit("btnReg","Register");
	echo form_close();
?>
</body>
</html>

