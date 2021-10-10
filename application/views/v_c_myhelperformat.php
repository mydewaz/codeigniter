<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
echo heading($judulapp,1);
echo heading("Tanpa Pre",2);
echo br();
echo $programhello;
echo br();
echo heading("Dengan Pre",2);
echo br();
echo displaypre($programhello);
?>
</body>
</html>
