<? echo doctype("html5");?>
<head>
	<title><?php echo $judulapp;?></title>
</head>
<body>
<?php 
echo heading($judulapp,2);
?>
<div>
<p>
Teks pada halaman ini sekedar untuk menunjukkan halaman yang akan bisa diakses setelah pengguna berhasil melakukan login.
<p>
Jadi tidak ada apa-apa, karena hanya untuk demo saja bagaimana kita bisa menggunakan session dari CI.
</div>
<?php
$this->load->view("v_csesapp_menu");
?>
</body>
</html>

