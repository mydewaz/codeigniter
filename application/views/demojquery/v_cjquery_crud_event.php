<script type="text/javascript">
$(document).ready(function(){
	$("#datateman").load("<?=site_url();?>/c_jquery/crudbrowse");
	$("#crudadd").click(function(){
		$("#datateman").load("<?=site_url();?>/c_jquery/crudadd");
	});
	$("#crudbrowse").click(function(){
		$("#datateman").load("<?=site_url();?>/c_jquery/crudbrowse");
	});
});
</script>