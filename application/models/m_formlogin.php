<?php
class m_formlogin extends CI_Model{
	function formuser(){
		// definisi elemen form
		$username=array(
				"name"=>"username"
				,"id"=>"username"
				,"maxlength"=>"15"
				,"size"=>"10"
				,"value"=>$this->input->post("username")
				,"style"=>"background:cyan;"
			);
		$userpass=array(
				"name"=>"userpass"
				,"id"=>"userpass"
				,"maxlength"=>"15"
				,"size"=>"10"
				,"value"=>$this->input->post("userpass")
				,"style"=>"background:red;"
			);
		// end definisi
		$auser=array();
		$auser["username"]=$username;
		$auser["userpass"]=$userpass;
		return $auser;
	}
	function cekuser($username,$userpass){
		$errmessage="";
		if (!(empty($username) && empty($usepass))) {
			if (($username=="admin") && ($userpass=="nimda")){
				$errmessage="Sukses!";
			} else {
				$errmessage="Gagal! Nama pengguna atau kata kunci salah! Ulangi lagi!";
			}
		} else $errmessage="firsttime";
		return $errmessage;
	}
}
?>
