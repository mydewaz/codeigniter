<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
echo heading($judulapp,1);
echo heading("Error message!",3);
echo showmessage($errmessage,"err");
echo heading("Warning message!",3);
echo showmessage($warnmessage,"warn");
echo heading("Normal message!",3);
echo showmessage($normalmessage);
?>
</body>
</html>
