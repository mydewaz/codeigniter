<?php
class C_tpl extends CI_Controller{
	function direct(){
		$data["judulapp"]="Demo Load Beberapa View Langsung";
		$this->load->view("common/v_apphead",$data);
		$this->load->view("common/v_appjudul",$data);
		$this->load->view("common/v_appmenu",$data);
		$this->load->view("v_ctpl_direct");
		$this->load->view("common/v_appfooter",$data);
	}
	function stream(){
		$data["judulapp"]="Demo Load Beberapa View Dengan Stream";
		$output=$this->load->view("common/v_apphead",$data,true);
		$output.=$this->load->view("common/v_appjudul",$data,true);
		$output.=$this->load->view("common/v_appmenu",$data,true);
		$output.=$this->load->view("v_ctpl_stream",$data,true);
		$output.=$this->load->view("common/v_appfooter",$data,true);
		// echo $output;
		$this->output->set_output($output);
	}
	function layout(){
		$data["judulapp"]="Demo Load Beberapa View Dengan Stream";
		// ditambah lagi proses untuk mendapatkan data yang akan ditampilkan
		$data["fileview"]="v_ctpl_content";
		$output=$this->load->view("common/v_applayout",$data);
	}
}
?>