<?php
class c_testxss extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("html");
		$this->load->helper("form");
		$this->load->helper("text");
	}
	function directxss(){
		$data=array();
		$data["judulapp"]="Contoh XSS Tanpa Filter!";
		// membaca input dengan helper
		$data["teks"]='<IMG SRC="javascript:alert(\'XSS\');">';
		$this->load->view("v_c_testxss",$data);
	}
	function getteks($cfilter=""){
		$data=array();
		$data["judulapp"]="Input Teks Dengan XSS!";
		$data["aksi"]="c_testxss/postteks/".$cfilter;
		$data["teks"]=array(
				"name"=>"teks"
				,"id"=>"teks"
				,"rows"=>3
				,"cols"=>40
			);
		$this->load->view("v_c_testxss_input",$data);
	}
	function postteks($cfilter=""){
		$data=array();
		$data["judulapp"]="Show Teks Dengan XSS!";
		// membaca input dengan helper
		$data["teks"]=$this->input->post('teks');
		if ($cfilter=="clean") $data["teks"]=$this->security->xss_clean($data["teks"]);
		$this->load->view("v_c_testxss",$data);
	}
}
?>