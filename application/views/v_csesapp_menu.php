<?php
$amenu=array(
		"c_sesapp/welcome"=>"Welcome"
		,"c_sesapp/about"=>"About"
		,"c_sesapp/logout"=>"Logout"
	);
foreach($amenu as $key=>$val){
	echo " | ".anchor($key,$val)." | ";
}
?>
