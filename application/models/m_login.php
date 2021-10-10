<?php
class m_login extends CI_Model{
	function readinput(){
		$username=$this->input->post("username");
		$userpass=$this->input->post("userpass");
		$auser["username"]=$username;
		$auser["userpass"]=$userpass;
		return $auser;
	}
	function cekuser($username,$userpass){
		$retval=false;
		if (($username=="admin") && ($userpass=="nimda")) $retval=true;
		return $retval;
	}
}
?>
