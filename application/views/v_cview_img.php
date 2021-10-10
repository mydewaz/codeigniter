<html>
<head>
	<title><?=$judulapp;?></title>
</head>
<body>
	<h2><?=$judulapp;?></h2>
	echo img("asset/images/ci_logo2.gif")
	<br />
	<?=img("asset/images/ci_logo2.gif");?>
	<hr />
	<?=img("http://l.yimg.com/a/i/ww/met/unsupprtd_brwsr/yahoo_logo_id_083109.gif");?>
	<hr />
	<pre>
	$myimage=array(
		"src"=>"asset/images/ci_logo2.gif"
		,"alt"=>"Logo CodeIgniter - Api menyala!"
        ,'width' => '200'
        ,'height' => '200'
        ,'title' => 'Logo CodeIgniter'
		);
	echo img($myimage)
	</pre>
	<?
	$myimage=array(
		"src"=>"asset/images/ci_logo2.gif"
		,"alt"=>"Logo CodeIgniter - Api menyala!"
        ,'width' => '200'
        ,'height' => '200'
        ,'title' => 'Logo CodeIgniter'
		);
	echo img($myimage);
	?>
	<br />
</body>
</html>