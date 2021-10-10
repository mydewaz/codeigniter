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
	<script type="text/javascript" src='<?=base_url()."asset/js/jquery-1.6.4.min.js";?>'></script>
