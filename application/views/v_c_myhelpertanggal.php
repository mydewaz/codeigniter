<html>
<head>
	<title><?php echo $judulapp;?></title>
	<style type="text/css">
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		background: grey;
		height:100px;
		width:400px;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<?php echo heading($judulapp,1);?>
<div id="container">
<?php 
echo "Tanggal hari ini : ".$tglhariini;
echo br();
echo "terbilang : ".namahari($nohari).", ".$tgl." ".namabulan($bln)." ".$thn;
br();
?>
</div>
</body>
</html>
