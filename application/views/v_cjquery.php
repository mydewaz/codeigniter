<?
// a simple js script
$script = "alert('hello world!');";
$params = array(
			'height' => 80,
			'width' => '50%',
			'marginLeft' => 125
);
?>
<html>
<head>
	<title>Demo jQuery</title>
	<script type="text/javascript" src='<?=base_url()."asset/js/jquery-1.6.4.min.js";?>'></script>
	<script type="text/javascript">
		$(document).ready(function(){
			<?
			echo $this->javascript->click('#clickme', $script);
			?>
		})
	</script>
<head>
<body>
<div id="clickme">
  Click here
</div>
<img id="book" src="<?=base_url();?>asset/images/book.png" alt="" style="position: relative; left: 10px;" />
</body>
</html>
