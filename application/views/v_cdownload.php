<?=doctype('html5');?>
<html>
<head>
	<title><?=$judulapp;?></title>
<head>
<body>
<?php 
	echo heading($judulapp,2);
	echo heading("Show Data File!",3);
	$jf=sizeof($files);
	for($i=0;$i<$jf;$i++){
		echo anchor("c_download/showdata/".$files[$i],$files[$i]).br();
	}
	echo heading("Download File!",3);
	for($i=0;$i<$jf;$i++){
		echo anchor("c_download/download/".$files[$i],$files[$i]).br();
	}
?>
</body>
</html>
