<?php
class C_dbauto extends CI_Controller{
	function index(){
		$data["hslquery"]=$this->db->get('tblteman');
		$data["judulapp"]="Menggunakan Autoload";
		$this->load->view("v_cdbarcrud_allrec",$data);
	}
}
?>