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
	echo br();
	echo $message;
	echo br();
	echo anchor("c_dbqcrud/formadd","Tambah Data ");
	echo br();
	echo anchor("c_dbqcrud/getnoteman/update","Update Data ");
	echo br();
	echo anchor("c_dbqcrud/getnoteman/delete","Delete Data ");
	echo br();
	echo anchor("c_dbmteman/baca","Tampilkan Seluruh Data");
	?>
</div>
</body>
</html>

