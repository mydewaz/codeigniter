<?php
class C_session extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->helper(array("html","form","url","text"));
	}
	function showmysession($data=array()){
		$data["varsession"]=$this->session->all_userdata();
		$data["judulapp"]="Demo Show Session";
		$this->load->view("v_csession_mysession",$data);
	}
	function showmyid(){
		$data=array();
		$data["item"]="session_id";
		$data["value"]=$this->session->userdata($data["item"]);
		$data["judulapp"]="Demo Show Session ID";
		$this->load->view("v_csession_myid",$data);
	}
	function showitem($myitem=''){
		$data=array();
		$data["item"]=$myitem;
		$data["value"]=$this->session->userdata($data["item"]);
		$data["judulapp"]="Demo Show Item $myitem";
		$this->load->view("v_csession_myid",$data);
	}
	function showmyitem(){
		$data=array();
		$this->session->set_userdata("user_data","mydata");
		$this->session->set_userdata("myitem","myvalue");
		$data["varsession"]=$this->session->all_userdata();
		$data["judulapp"]="Demo Show MyItem";
		$this->load->view("v_csession_mysession",$data);
	}
	function removemyitem(){
		$data=array();
		$this->session->unset_userdata('myitem');
		$data["varsession"]=$this->session->all_userdata();
		$data["judulapp"]="Demo Remove Session";
		$this->load->view("v_csession_mysession",$data);
	}
}
?>