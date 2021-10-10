<?php
class c_view extends CI_Controller{
	function normal(){
		$data["judulapp"]="Menampilkan Variabel Cara Normal";
		$data["var1"]="Isi variabel 1";
		$data["ekstrakvar"]=array(
				"versi"=>"Versi"
				,"frm"=>"Framework CodeIgniter"
				,"no"=>"2.1.0"
			);
		$this->load->view("v_cview_normal",$data);
	}
	function short(){
		$data["judulapp"]="Menampilkan Variabel Cara short_open_tag";
		$data["var1"]="Isi variabel 1";
		$data["ekstrakvar"]=array(
				"versi"=>"Versi"
				,"frm"=>"Framework CodeIgniter"
				,"no"=>"2.1.0"
			);
		$this->load->view("v_cview_short",$data);
	}
	function htmlhelper(){
		$data["judulapp"]="Demo Helper HTML!";
		$this->load->view("v_cview_pureci",$data);
	}
	function img(){
		$data["judulapp"]="Menampilkan Gambar Dengan img()";
		$this->load->view("v_cview_img",$data);
	}
	function link(){
		$data["judulapp"]="Menampilkan Link Dengan anchor() dan anchor_popup()";
		$this->load->view("v_cview_link",$data);
	}
}
?>