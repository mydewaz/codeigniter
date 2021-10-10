<?php
class C_dbmore extends CI_Controller{
	function index(){
		// $db1=$this->load->database('default',TRUE);
		$db2=$this->load->database('kedua',TRUE);
		// $data["q1"]=$db1->get('tblteman');
		$data["q1"]=$this->db->get('tblteman');
		$data["q2"]=$db2->get('cds');
		$data["judulapp"]="Menggunakan 2 Database";
		$this->load->view("v_cdbmore",$data);
	}
}
?>