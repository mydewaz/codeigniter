<?php
class c_login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("html");
		$this->load->helper("form");
		$this->load->helper("text");
	}
	function index(){
		// membaca data
		$data=array();
		$data["judulapp"]="Baca Data Dari Form!";
		$data["username"]=$_POST["username"];
		$data["userpass"]=$_POST["userpass"];
		$this->load->view("v_c_login_showdata",$data);
	}
	function newform(){
		$this->load->helper("url");
		$this->load->model("m_formlogin");
		$data=$this->m_formlogin->formuser();
		$data["errmessage"]=$this->m_formlogin->cekuser($data["username"]["value"],$data["userpass"]["value"]);
		if ($data["errmessage"]=="Sukses!") redirect("c_helloworld");
		else {
			$data["aksi"]="c_login/newform";
			$data["judulapp"]="Login To Get The Application";
			$this->load->view("v_c_login_message",$data);
		}
	}
	function showform(){
		$this->load->model("m_formlogin");
		$data=$this->m_formlogin->formuser();
		$data["aksi"]="c_login/withhelper";
		$data["judulapp"]="Login With Helper";
		$this->load->view("v_c_login_showform",$data);
	}
	function withhelper(){
		$data=array();
		$data["judulapp"]="Baca Data Dari Form dengan Helper!";
		// membaca input dengan helper
		$data["username"]=$this->input->post("namauser");
		$data["userpass"]=$this->input->post("passuser");
		$this->load->view("v_c_login_showdata",$data);
	}
	function valshowform(){
		$this->load->model("m_formlogin");
		$data=$this->m_formlogin->formuser();
		$data["aksi"]="c_login/postshowform";
		$data["judulapp"]="Login Dengan Nilai Default!";
		$this->load->view("v_c_login_showform",$data);
	}
	function postshowform(){
		$this->load->model("m_formlogin");
		$data=$this->m_formlogin->formuser();
		$data["aksi"]="c_login/postshowform";
		$data["judulapp"]="Login Dengan Nilai Hasil Post!";
		$this->load->view("v_c_login_showform",$data);
	}
}
?>