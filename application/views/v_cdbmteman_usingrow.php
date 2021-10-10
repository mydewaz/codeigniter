<?php
function displayrow($row,$norec){
	echo "No Record : ".$norec;
	echo "<hr />";
	echo "No : ".$row->noteman;
	echo br();
	echo "Nama : ".$row->namateman;
	echo br();
	echo "No Telp : ".$row->notelp;
	echo br();
	echo "Email : ".$row->email;
	echo "<hr />";
}
?>
<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	echo heading($judulapp,2);
	echo "<hr />";
	$norow=$hslquery->num_rows();
	$row=$hslquery->last_row();
	displayrow($row,$norow);
	$norow=1;
	$row=$hslquery->first_row();
	displayrow($row,$norow);
	$norow=4;
	$row=$hslquery->row($norow);
	$norow=5;
	displayrow($row,$norow);
	$norow=4;
	$row=$hslquery->previous_row();
	displayrow($row,$norow);
	$norow=5;
	$row=$hslquery->next_row();
	displayrow($row,$norow);
?>
</body>
</html>

