<?php
	// $data=array();
	$data["dummy"]="dummy";
	$this->load->view("common/v_apphead",$data);
	$this->load->view("common/v_appjudul",$data);
	$this->load->view("common/v_appmenu",$data);
	$this->load->view($fileview,$data);
	$this->load->view("common/v_appfooter",$data);
?>