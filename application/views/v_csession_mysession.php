<?=doctype('html5');?>
<head>
<title><?php echo $judulapp;?></title>
</head>
<body>
<?php echo heading($judulapp,2);?>
<ul>
<?php foreach ($varsession as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
</body>
</html>