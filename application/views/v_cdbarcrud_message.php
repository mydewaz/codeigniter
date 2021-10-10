<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<div>
<?php 
	echo heading($judulapp,2);
	if (isset($adata)){
?>
	<table style="margin:auto;width:80%;">
	<?
		echo "No : ".$adata["noteman"];
		echo br();
		echo "Nama : ".$adata["namateman"];
		echo br();
		echo "No Telp : ".$adata["notelp"];
		echo br();
		echo "Email : ".$adata["email"];
		echo "<hr />";
	?>
	</table>
<?php
	}
	echo $message;
	echo br();
	$this->load->view("v_cdbarcrud_menu");
	?>
</div>
</body>
</html>

