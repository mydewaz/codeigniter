<?php
class c_myhelpertanggal extends CI_Controller{
	function hariini(){
		$this->load->helper("html");
		$this->load->helper("date");
		$data["judulapp"]="Contoh Helper Tanggal";
		$data["tglhariini"]=date('d-m-Y');
		$data["nohari"]=date('w');
		list($data["tgl"],$data["bln"],$data["thn"])=explode("-",$data["tglhariini"]);
		$this->load->view("v_c_myhelpertanggal",$data);
	}
}
?>