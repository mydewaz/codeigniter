<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	// definisi elemen form
	$username=array(
			"name"=>"username"
			,"id"=>"username"
			,"maxlength"=>"15"
			,"size"=>"10"
			,"style"=>"background:cyan;"
		);
	$userpass=array(
			"name"=>"userpass"
			,"id"=>"userpass"
			,"maxlength"=>"15"
			,"size"=>"10"
			,"style"=>"background:red;"
		);
	// end definisi
	echo heading($judulapp,1);
	echo form_open("login");
	echo form_label("Nama user: ");
	echo form_input($username);
	echo "<br />";
	echo form_label("Password: ");
	echo form_password($userpass);
	echo "<br />";
	echo form_submit("","Login");
	echo form_close();
?>
</body>
</html>

