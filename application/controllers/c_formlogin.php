<?php
class c_formlogin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("html");
		$this->load->helper("form");
		$this->load->helper("text");
	}
	function manual(){
		$data["judulapp"]="Form login: cara manual";
		$this->load->view("v_c_formlogin_manual",$data);
	}
	function withhelper(){
		$data["judulapp"]="Form login: Dengan Helper";
		$this->load->view("v_c_formlogin_withhelper",$data);
	}
	function atribut(){
		$data["judulapp"]="Form login: Dengan Helper+Atribut";
		$this->load->view("v_c_formlogin_atribut",$data);
	}
	function frommodel(){
		$this->load->model("m_formlogin");
		$data=$this->m_formlogin->formuser();
		$data["judulapp"]="Form login: From Model";
		$this->load->view("v_c_formlogin_frommodel",$data);
	}
}
?>