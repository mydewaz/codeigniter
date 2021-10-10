<?php
class c_hellohelper extends CI_Controller{
	function noloadhelper(){
		$this->load->model("m_hello");
		$data=array();
		$judulapp="Daftar Bahasa Dan Kosa Kalimat";
		$data["judulapp"]=$judulapp;
		$data["abahasa"]=$this->m_hello->abahasa;
		$data["akalimat"]=$this->m_hello->akalimat;
		$this->load->view("v_c_hellohelper_daftar",$data);
	}
	function withloadhelper(){
		$this->load->helper("html");
		$this->load->model("m_hello");
		$data=array();
		$judulapp="Daftar Bahasa Dan Kosa Kalimat";
		$data["judulapp"]=$judulapp;
		$data["abahasa"]=$this->m_hello->abahasa;
		$data["akalimat"]=$this->m_hello->akalimat;
		$this->load->view("v_c_hellohelper_daftar",$data);
	}
	function loadhelperonview(){
		$this->load->model("m_hello");
		$data=array();
		$judulapp="Daftar Bahasa Dan Kosa Kalimat";
		$data["judulapp"]=$judulapp;
		$data["abahasa"]=$this->m_hello->abahasa;
		$data["akalimat"]=$this->m_hello->akalimat;
		$this->load->view("v_c_hellohelper_daftar_onview",$data);
	}
}
?>