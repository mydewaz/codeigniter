<html>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
	$input=array(
			"name"=>"namateman"
			,"value"=>"$namateman"
		);
	echo heading($judulapp,2);
	echo form_open("c_dbmteman/filterteman");
	echo form_label("Nama teman : ");
	echo form_input($input);
	echo form_submit("btnFilter","Filter");
	echo form_close();
	?>
	<table style="margin:auto;width:80%;">
	<?
	$c=1;
	foreach($hslquery->result() as $row){
		echo "<tr>";
		echo "<td>";
		echo "No : ".$row->noteman;
		echo br();
		echo "Nama : ".$row->namateman;
		echo br();
		echo "No Telp : ".$row->notelp;
		echo br();
		echo "Email : ".$row->email;
		echo "<hr />";
		echo "</td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>

