<html>
<head>
	<title><?php echo $judulapp;?></title>
	<style type="text/css">
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		background: #F57C40;
		height:200px;
		width:400px;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<h1><?php echo $judulapp;?></h1>
<div id="container">
<?php 
$alangid=array_keys($abahasa);
$jlang=sizeof($alangid);
for($c=0;$c<$jlang;$c++){
	echo "<br />";
	echo "Kode : ".$alangid[$c]." Bahasa : ".$abahasa[$alangid[$c]];
	echo "<br />";
	echo "Kalimat : ".$akalimat[$alangid[$c]];
}
?>
</div>
</body>
</html>
