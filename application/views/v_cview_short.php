<html>
<head>
	<title><?=$judulapp;?></title>
</head>
<body>
	<h2><?=$judulapp;?></h2>
	<br />
	var1 : <?=$var1;?>
	<br />
	ekstrakvar : <?=$ekstrakvar;?>
	<br />
	dengan print_r($ekstrakvar);
	<br />
	<? print_r($ekstrakvar);?>
	<h3>Isi dari var ekstrakva dijadikan variabel: </h3>
	<? extract($ekstrakvar);?>
	Framework : <?=$frm;?>
	<br />
	versi : <?=$versi;?>
	<br />
	no : <?=$no;?>
	<br />
</body>
</html>