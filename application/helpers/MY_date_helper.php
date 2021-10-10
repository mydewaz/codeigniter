<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
function namabulan($nobulan=""){
	$abulan=array(
			"01"=>"Januari"
			,"02"=>"Februari"
			,"03"=>"Maret"
			,"04"=>"April"
			,"05"=>"Mei"
			,"06"=>"Juni"
			,"07"=>"Juli"
			,"08"=>"Agustus"
			,"09"=>"September"
			,"10"=>"Oktober"
			,"11"=>"November"
			,"12"=>"Desember"
		);
	$anobulan=array_keys($abulan);
	$retval=(in_array($nobulan,$anobulan))?$abulan[$nobulan]:false;
	return $retval;
}
function namahari($nohari=-1){
	$ahari=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	$retval=(($nohari>=0) && ($nohari<=6))?$ahari[$nohari]:false;
	return $retval;
}
?>