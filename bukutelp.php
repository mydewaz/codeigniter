<html>
<head>
	<title>Data Buku Telpon!</title>
</head>
<body>
<?php 
echo "<h2>Data Buku Telpon!</h2>";
echo "<hr />";
$abukutelp=array();
$abukutelp[]=array(
				"nama"=>"Betha"
				,"notelp"=>"08155555"
				,"email"=>"betha@.."
				);
$abukutelp[]=array(
				"nama"=>"Liseu"
				,"notelp"=>"08122222"
				,"email"=>"liseu@.."
				);
$abukutelp[]=array(
				"nama"=>"Sabiq"
				,"notelp"=>"0817777777"
				,"email"=>"sabiq@.."
				);
$abukutelp[]=array(
				"nama"=>"Sabil"
				,"notelp"=>"08566666"
				,"email"=>"sabil@.."
				);
$abukutelp[]=array(
				"nama"=>"Razan"
				,"notelp"=>"08111111"
				,"email"=>"razan@.."
				);
$jdata=sizeof($abukutelp);
echo "<table>";
	echo "<tr>";
	echo "<th>Nama</th>";
	echo "<th>No Telp</th>";
	echo "<th>Email</th>";
	echo "</tr>";
for($i=0;$i<$jdata;$i++){
	$baris=$abukutelp[$i];
	echo "<tr>";
	echo "<td>".$baris["nama"]."</td>";
	echo "<td>".$baris["notelp"]."</td>";
	echo "<td>".$baris["email"]."</td>";
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>