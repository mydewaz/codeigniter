<?php 
	echo heading($judulapp,2);
	echo form_open("$scriptaksi");
	echo form_label("No Teman : ");
	if ($aksi!="add"){
		echo form_hidden($noteman["name"],$noteman["value"]).$noteman["value"];
	} else {
		echo form_input($noteman);
	}
	echo br();
	echo form_label("Nama teman : ");
	echo form_input($namateman);
	echo br();
	echo form_label("No Telp : ");
	echo form_input($notelp);
	echo br();
	echo form_label("Email : ");
	echo form_input($email);
	echo br();
	echo form_submit("btnSimpan","$aksi");
	echo form_close();
?>

<script type="text/javascript">
$(document).ready(function(){
	$("form").submit(function(){
		vardata=$("form").serialize();
		$.ajax({
		  url: '<?=site_url()."/".$scriptaksi;?>',
		  type: 'POST',
		  data: vardata,
		  success: function(data) {
			alert(data);
			$("#datateman").load("<?=site_url();?>/c_jquery/crudbrowse");
		  }
		});	
		// alert("submitted!"+vardata);
		return false;
	});
});
</script>
