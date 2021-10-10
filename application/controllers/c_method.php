<?php
class C_method extends CI_Controller{
	function _remap($metod){
		if ($metod=="tampiltukardata"){
			$this->$metod();
		} else $this->nomethod();
	}
	function nomethod(){
		echo "Maaf tidak ada yang bisa diproses!";
	}
	function tampiltukardata(){
		$bil1=5;
		$bil2=19;
		echo "Bil1 : $bil1 -- Bil2 : $bil2";
		echo br();
		$this->tukardata($bil1,$bil2);
		echo "Isi hasil penukaran : ";
		echo br();
		echo "Bil1 : $bil1 -- Bil2 : $bil2";
	}
	function tukardata(&$bil1,&$bil2){
		$t=$bil1;
		$bil1=$bil2;
		$bil2=$bil1;
	}
}
?>