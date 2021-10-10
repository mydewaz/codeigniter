<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,2);
	echo "Jumlah record: ".$hslquery->num_rows();
	echo "<hr />";
	?>
	<table style="margin:auto;width:80%;">
	<?
	$c=1;
	foreach($hslquery->result_array() as $row){
		if ($c>2) {
			echo "</tr>";
			$c=1;
		}
		if ($c==1) echo "<tr>";
		echo "<td>";
		echo "No : ".$row["noteman"];
		echo br();
		echo "Nama : ".$row["namateman"];
		echo br();
		echo "No Telp : ".$row["notelp"];
		echo br();
		echo "Email : ".$row["email"];
		echo "<hr />";
		echo "</td>";
		$c++;
	}
	?>
	</table>
	<?
?>
</body>
</html>

