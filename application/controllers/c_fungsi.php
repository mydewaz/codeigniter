<?php
class C_fungsi extends CI_Controller{
	private function _demoprivat1(){
		echo "Fungsi private dengan klausa private di depan function";
		echo "dan dengan underscore di depan nama fungsi!";
	}
	function _demoprivat2(){
		echo "Fungsi private dengan underscore di depan nama fungsi!";
	}
	private function demoprivat3(){
		echo "Fungsi private dengan klausa private di depan function!";
	}
	function demoprivat4(){
		echo "Fungsi tanpa klausa private di depan function!";
	}
	function demoprivat5(){
		$this->_demoprivat1();
		echo br();
		$this->_demoprivat2();
		echo br();
		$this->demoprivat3();
		echo br();
	}
	function demoredirect(){
		redirect("demouri/c_demouri/showuriseg");
		echo "Ini demo redirect";
	}
	function demooutput(){
		$this->_output("Ini hasil dari demo dengan menggunakan _output()!");
	}
	function _output($output){
		echo $output;
	}
}
?>