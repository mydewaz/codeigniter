<? echo doctype("html5");?>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php echo heading($judulapp,2);?>
<?php 
echo $pesan;
echo heading("Login",3);
?>
<form action="<?=site_url();?>/c_sesapp/dologin" method="post">
	Nama user :
	<input type="text" name="username" value="<?=$username?>">
	<br />
	Password : 
	<input type="password" name="userpass" value="<?=$userpass?>">
	<br />
	<input type="submit" value="Login">
</form>
</body>
</html>

