<?php
class m_userreg extends CI_Model{
	function userrulesext(){
		$arules=array(
					array(
						  "field"=>'username'
						  ,"label"=>'Nama User'
						  ,"rules"=>'trim|required|min_length[5]|max_length[15]|valid_username|xss_clean')   
					,array(
						  "field"=>'userpass'
						  ,"label"=>'Password'
						  ,"rules"=>'trim|required|matches[userpassv]|md5')
					,array(
						  "field"=>'userpassv'
						  ,"label"=>'Konfirmasi'
						  ,"rules"=>'trim|required')
					,array(
						  "field"=>'useremail'
						  ,"label"=>'Email'
						  ,"rules"=>'trim|required|valid_email')
				);
		return $arules;
	}
	function userrules(){
		$arules=array(
					array(
						  "field"=>'username'
						  ,"label"=>'Nama User'
						  ,"rules"=>'trim|required|min_length[5]|max_length[15]|xss_clean')   // valid_alphanumeric
					,array(
						  "field"=>'userpass'
						  ,"label"=>'Password'
						  ,"rules"=>'trim|required|matches[userpassv]|md5')
					,array(
						  "field"=>'userpassv'
						  ,"label"=>'Konfirmasi'
						  ,"rules"=>'trim|required')
					,array(
						  "field"=>'useremail'
						  ,"label"=>'Email'
						  ,"rules"=>'trim|required|valid_email')
				);
		return $arules;
	}
	function userdef(){
		// definisi elemen form untuk definisi user
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
		$userpassv=array(
				"name"=>"userpassv"
				,"id"=>"userpassv"
				,"maxlength"=>"15"
				,"size"=>"10"
				,"value"=>$this->input->post("userpassv")
				,"style"=>"background:red;"
			);
		$useremail=array(
				"name"=>"useremail"
				,"id"=>"useremail"
				,"maxlength"=>"50"
				,"size"=>"35"
				,"value"=>$this->input->post("useremail")
			);
		// end definisi
		$auser=array();
		$auser["username"]=$username;
		$auser["userpass"]=$userpass;
		$auser["userpassv"]=$userpassv;
		$auser["useremail"]=$useremail;
		return $auser;
	}
}
?>
