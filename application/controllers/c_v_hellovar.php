<?php
class c_v_hellovar extends CI_Controller{
	function index(){
		$data["halo"]="Hello World!";
		$this->load->view("v_c_hello",$data);
	}
}
?>