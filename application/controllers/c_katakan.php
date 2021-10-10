<?php
class c_katakan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function index(){
		$this->load->library('katakan');
		$data["angka"]=2;
		$data["terbilang"]=$this->katakan->bilangan($data["angka"]);
		$data["judulapp"]="Penggunaan Librari Katakan!";
		$this->load->view("v_c_membilang",$data);
	}
}
?>