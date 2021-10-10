<script type="text/javascript">
$(document).ready(function(){
	$("#ajaxload").click(function(){
		$("#teks").load("<?=site_url();?>/c_jquery/simpleload");
	});
	$("#ajaxajax").click(function(){
		$.ajax({
		  url: '<?=site_url();?>/c_jquery/ajaxajax',
		  success: function(data) {
			$('#teks').html(data);
		  }
		});	
	});
});
</script>