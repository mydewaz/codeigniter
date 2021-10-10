<?=doctype('html5');?>
<html>
<head>
	<title><?=$judulapp;?></title>
	<?
	$namameta=array( 
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => 'Demo Pure CI for HTML header '),
			array('name' => 'keywords', 'content' => 'buku, CI, demo'),
			array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
		);

	echo meta($namameta);
	echo link_tag("asset/CSS/mystyles.css");
	?>
</head>
<body>
	<?
	echo heading($judulapp,2);
	echo br();
	echo heading("demo tanpa nbs()",3);
	echo "Ini tanpa nbs()                 -- jarak tetap 1 spasi!";
	echo br();
	echo heading("demo dengan nbs()",3);
	echo "Ini dengan nbs()".nbs().nbs().nbs().nbs().nbs().nbs().nbs().nbs()."--".nbs().nbs()." jarak tetap 1 spasi!";
	?>
</body>
</html>