<?php 
showHeader('Data Buku Telpon!');
$abukutelp=getBukuTelp();
showBukuTelp($abukutelp);
showFooter('Betha Sidik');
?>
<?php
function showHeader($judul){
	?>
	<html>
	<head>
		<title><?php echo $judul;?></title>
	</head>
	<body>
	<?php
	echo "<h2>$judul</h2>";
	echo "<hr />";
}
?>
<?php
function showFooter($owner){
	?>
	<hr />
	&copy<?php echo date('Y')."|".$owner;?>
	</body>
	</html>
	<?php
}
?>
<?php
function getBukuTelp(){
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
	return $abukutelp;
}
?>
<?php
function showBukuTelp($abukutelp){
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
}
?>
