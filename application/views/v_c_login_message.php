<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,1);
?>
Sila masukkan nama pengguna dan kata kunci untuk masuk ke dalam aplikasi!
<?php
	echo form_open($aksi);
	echo form_label("Nama user: ");
	echo form_input($username);
	echo "<br />";
	echo form_label("Password: ");
	echo form_password($userpass);
	echo "<br />";
	echo form_submit("","Login");
	echo form_close();
?>
<?php
if ($errmessage!="firsttime") echo showmessage($errmessage,"err");
?>
</body>
</html>

