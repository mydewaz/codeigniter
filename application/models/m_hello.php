<?php
class m_hello extends CI_Model{
	var $halo="Hello World!";
	var $akalimat=array(
				"EN"=>"Hello World!"
				,"ID"=>"Halo Dunia!"
				,"AR"=>"Ahlan Dunia!"
				);
	var $abahasa=array(
				"EN"=>"Inggris"
				,"ID"=>"Indonesia"
				,"AR"=>"Arab"
				);
	function katakan($langid){
		$alangid=array_keys($this->abahasa);
		$langid=in_array($langid,$alangid)?$langid:"EN";
		$kalimat=$this->abahasa[$langid].">>".$this->akalimat[$langid];
		return $kalimat;
	}
	function katakata(){
		$kalimat="Hello World, I'm from model!";
		return $kalimat;
	}
	function bilang($langid){
		$langname="English ";
		$kalimat=$langname.">>".$this->m_hello->halo;
		switch ($langid){
			case "ID":
				$langname="Indonesia ";
				$kalimat=$langname.">>"."Halo dunia!";
				break;
			case "AR":
				$langname="Arabian ";
				$kalimat=$langname.">>"."Ahlan dunia!";
				break;
		}
		return $kalimat;
	}
}
?>