<?php
class c_membilang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function index(){
		$this->load->library('membilang');
		$data["angka"]=5678123;
		$data["terbilang"]=$this->membilang->terbilang($data["angka"]);
		$data["judulapp"]="Penggunaan Librari Membilang!";
		$this->load->view("v_c_membilang",$data);
	}
}
?>