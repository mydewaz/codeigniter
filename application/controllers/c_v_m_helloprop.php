<?php
class c_v_m_helloprop extends CI_Controller{
	function index(){
		$this->load->model("m_hello");
		$data=array();
		$data["halo"]=$this->m_hello->halo;
		$this->load->view("v_c_hello",$data);
	}
}
?>