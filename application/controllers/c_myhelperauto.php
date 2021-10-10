<?php
class c_myhelperauto extends CI_Controller{
	function demomessage(){
		$data["judulapp"]="Contoh Helper Format: showmessage()";
		$data["errmessage"]='Error!!!';
		$data["warnmessage"]='Warning!';
		$data["normalmessage"]='Just normal text, common text!';
		$this->load->view("v_c_myhelperformat_message",$data);
	}
}
?>