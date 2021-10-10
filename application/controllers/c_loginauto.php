<?php
class c_loginauto extends CI_Controller{
	function newform(){
		$data=$this->m_formlogin->formuser();
		$data["errmessage"]=$this->m_formlogin->cekuser($data["username"]["value"],$data["userpass"]["value"]);
		if ($data["errmessage"]=="Sukses!") redirect("c_helloworld");
		else {
			$data["aksi"]="c_login/newform";
			$data["judulapp"]="Autoload for Login!";
			$this->load->view("v_c_login_message",$data);
		}
	}
}
?>