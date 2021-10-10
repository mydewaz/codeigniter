<?php
class c_userreg extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function form(){
		$this->load->library('form_validation');
		$this->load->model("m_userreg");
		$data=$this->m_userreg->userdef();
		$userrules=$this->m_userreg->userrules();
		$this->form_validation->set_rules($userrules);
		$data["aksi"]="c_userreg/form";
		if ($this->form_validation->run() == FALSE)
		{
			$data["judulapp"]="Registrasi Pengguna!";
			$this->load->view("v_c_userreg_form",$data);
		}
		else
		{
			$data["judulapp"]="Registrasi berhasil dilakukan!";
			$this->load->view("v_c_userreg_sukses",$data);
		}
	}
	function formextval(){
		$this->load->library('form_validation');
		$this->load->model("m_userreg");
		$data=$this->m_userreg->userdef();
		$userrules=$this->m_userreg->userrulesext();
		$this->form_validation->set_rules($userrules);
		$data["aksi"]="c_userreg/formextval";
		if ($this->form_validation->run() == FALSE)
		{
			$data["judulapp"]="Registrasi Dengan Extend Validation!";
			$this->load->view("v_c_userreg_form",$data);
		}
		else
		{
			$data["judulapp"]="Registrasi berhasil dilakukan!";
			$this->load->view("v_c_userreg_sukses",$data);
		}
	}
}
?>