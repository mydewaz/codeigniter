<html>
<head>
	<title><?=$judulapp;?></title>
</head>
<body>
	<h2><?=$judulapp;?></h2>
	<br />
	<?=anchor("c_view/htmlhelper","Generate Dokumen Dengan Helper HTML","title='Contoh Dengan Helper HTML'");?>
	<br />
	<br />
	<?=anchor("c_view/img",img("asset/images/ci_logo2.gif"),"title='Link dengan gambar'");?>
	<br />
	<?=anchor_popup("http://codeigniter.com/","Home of CodeIgniter","title='Popup to CodeIgniter Home'");?>
	<br />
</body>
</html>