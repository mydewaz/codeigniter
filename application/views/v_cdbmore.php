<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,2);
	echo heading("Tabel DB#1",3);
	?>
	<table style="margin:auto;width:80%;">
	<?
	$c=1;
	foreach($q1->result() as $row){
		echo $c.">>".$row->noteman." | ".$row->namateman." | ".$row->notelp." | ".$row->email.br();
		$c++;
	}
	?>
	</table>
	<?
	echo heading("Tabel DB#2",3);
	?>
	<table style="margin:auto;width:80%;">
	<?
	$c=1;
	foreach($q2->result() as $row){
		echo $c.">>".$row->id." | ".$row->titel." | ".$row->interpret." | ".$row->jahr.br();
		$c++;
	}
	?>
	</table>
	<?
?>
</body>
</html>

