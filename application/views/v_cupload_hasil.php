<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo heading($judulapp,2);?>
<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('c_upload/showform', 'Upload Another File!'); ?></p>

</body>
</html>