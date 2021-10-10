<? echo doctype("html5");?>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
echo heading($judulapp,2);
?>
<div>
Selamat datang.. <?=$this->session->userdata("user_data");?>
<br />
Anda telah berhasil melakukan login..
<p>
Sila klik menu yang tersaji di bawah ini..
</div>
<?php
$this->load->view("v_csesapp_menu");
?>
</body>
</html>

