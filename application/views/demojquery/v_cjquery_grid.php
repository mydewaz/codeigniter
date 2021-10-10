<script type="text/javascript">
	function editRec(norec){
		vardata="noteman="+norec;
		$.ajax({
		  url: '<?=site_url();?>/c_jquery/showrecto/update',
		  type: 'POST',
		  data: vardata,
		  success: function(data) {
			alert(data);
		  }
		});	
	}
</script>
<?php 
	if (!empty($hslquery)){
	?>
	<div>
	<table style="margin:auto;width:80%;border:solid 1px;">
		<tr>
			<th style="border-bottom:solid 1px;">No</th>
			<th style="border-bottom:solid 1px;">Nama Teman</th>
			<th style="border-bottom:solid 1px;">No Telp</th>
			<th style="border-bottom:solid 1px;">Email</th>
			<th style="border-bottom:solid 1px;">&nbsp;</th>
			<th style="border-bottom:solid 1px;">&nbsp;</th>
		</tr>
	<?
	foreach($hslquery->result_array() as $row){
		echo "<tr>";
		echo "<td>{$row["noteman"]}</td>";
		echo "<td>{$row["namateman"]}</td>";
		echo "<td>{$row["notelp"]}</td>";
		echo "<td>{$row["email"]}</td>";
		echo "<td>".anchor("#","Edit",array("onClick"=>"editRec({$row["noteman"]});return false;"))."</td>";
		echo "<td>".anchor("#","Delete",array("onClick"=>"delRec({$row["noteman"]});return false;"))."</td>";
		echo "</tr>";
	}
	?>
	</table>
	<br />
	</div>
	<?
	}
?>
<script type="text/javascript">
	function editRec(norec){
		vardata="noteman="+norec;
		$.ajax({
			url: '<?=site_url();?>/c_jquery/showrecto/update',
			type: 'POST',
			data: vardata,
			success: function(data) {
				$("#datateman").html(data);
			}
		});	
	}
	function delRec(norec){
		vardata="noteman="+norec;
		$.ajax({
			url: '<?=site_url();?>/c_jquery/showrecto/delete',
			type: 'POST',
			data: vardata,
			success: function(data) {
				$("#datateman").html(data);
			}
		});	
	}
</script>
