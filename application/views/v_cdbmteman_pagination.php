<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,2);
	?>
	<table style="margin:auto;width:80%;">
	<?
	$c=1;
	foreach($hslquery->result() as $row){
		echo "<tr>";
		echo "<td>";
		echo "No : ".$row->noteman;
		echo br();
		echo "Nama : ".$row->namateman;
		echo br();
		echo "No Telp : ".$row->notelp;
		echo br();
		echo "Email : ".$row->email;
		echo "<hr />";
		echo "</td>";
		echo "</tr>";
	}
	?>
	</table>
	<?
	echo $pagination;
?>
</body>
</html>

