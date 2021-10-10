<?php
class C_sesapp extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_login","login");
	}
	function index(){
		$this->welcome();
	}
	function _formlogin($data=array()){
		$data["pesan"]=(isset($data["pesan"]))?$data["pesan"]:"";
		$data["scriptaksi"]="c_sesapp/dologin";
		$data["username"]="";
		$data["userpass"]="";
		$this->load->view("v_csesapp_formlogin",$data);
	}
	function dologin($data=array()){
		$data=$this->login->readinput();
		if ($this->login->cekuser($data["username"],$data["userpass"])){
			$this->session->set_userdata('logged_in','OK');
			$this->session->set_userdata('user_data',$data["username"]);
			$this->welcome($data);
		} else {
			$data["judulapp"]="Demo Aplikasi Dengan Session";
			$data["pesan"]="Nama user atau password tidak cocok!<br />Ulangi login!";
			$this->_formlogin($data);
		}
	}
	function welcome($data=array()){
		$data=array();
		$data["judulapp"]="Demo Aplikasi Dengan Session";
		$logged_in=$this->session->userdata('logged_in');
		if ($logged_in!="OK"){
			$this->_formlogin($data);
		} else {
			$this->load->view("v_csesapp_welcome",$data);
		}
	}
	function about($data=array()){
		$data=array();
		$data["judulapp"]="Demo Aplikasi Dengan Session";
		$logged_in=$this->session->userdata('logged_in');
		if ($logged_in!="OK"){
			$this->_formlogin($data);
		} else {
			$this->load->view("v_csesapp_about",$data);
		}
	}
	function logout(){
		$data=array();
		$this->session->unset_userdata('logged_in');
		$this->welcome();
	}
	function usedb(){
		echo "Session telah aktif dengan database";
	}
}
?>