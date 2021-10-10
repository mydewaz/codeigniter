<?=doctype('html5');?>
<html>
<head>
	<title><?=$judulapp;?></title>
	<?
	$namameta=array( 
			array('name' => 'robots', 'content' => 'no-cache'),
			array('name' => 'description', 'content' => "$judulapp"),
			array('name' => 'keywords', 'content' => 'buku, CI, view, dir demo'),
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
	echo heading("Demo menampilkan data URI dan URL dengan helper",3);
	echo br();
	echo "base_url() : ".base_url();
	echo br();
	echo "site_url() : ".site_url();
	echo br();
	echo "uri_string() : ".uri_string();
	echo br();
	echo "current_url() : ".current_url();
	?>
</body>
</html>