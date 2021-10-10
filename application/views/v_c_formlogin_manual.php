<?$this->load->helper("url");?>
<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php echo heading($judulapp,1);?>
<form action="<?=site_url();?>/c_login" method="post">
	Nama user :
	<input type="text" name="username">
	<br />
	Password : 
	<input type="password" name="userpass">
	<br />
	<input type="submit" value="Login">
</form>
</body>
</html>

