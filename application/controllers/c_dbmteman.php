<?php
class c_dbmteman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_dbcibook");
	}
	function filterteman(){
		$data["namateman"]=$this->input->post("namateman");
		$data["hslquery"]=$this->m_dbcibook->filterteman($data["namateman"]);
		$data["judulapp"]="Filter Teman Interaktif";
		$this->load->view("v_cdbmteman_filter",$data);
	}
	function contohfilter(){
		$data["hslquery"]=$this->m_dbcibook->contohfilterteman();
		$data["judulapp"]="Baca Tabel Dengan Difilter";
		$this->load->view("v_cdbmteman",$data);
	}
	function urutnamamundur(){
		$data["hslquery"]=$this->m_dbcibook->uruttblteman();
		$data["judulapp"]="Baca Tabel Dengan Diurut DESC";
		$this->load->view("v_cdbmteman",$data);
	}
	function page($p=0,$jppage=2){
		$this->load->library('pagination');
		$config['base_url'] = site_url().'/c_dbmteman/page/';
		$config['total_rows'] = $this->m_dbcibook->getjrecord();
		$config['per_page'] = $jppage; 
		$this->pagination->initialize($config); 

		$data["pagination"]=$this->pagination->create_links();
		$data["hslquery"]=$this->m_dbcibook->gettemanpage($p,$jppage);
		$data["judulapp"]="Baca Tabel Dengan Pagination ";
		$this->load->view("v_cdbmteman_pagination",$data);
	}
	function baca(){
		$data["hslquery"]=$this->m_dbcibook->gettblteman();
		$data["judulapp"]="Baca Tabel Dengan Model Dan View";
		$this->load->view("v_cdbmteman",$data);
	}
	function bacalimit($n=1){
		$data["hslquery"]=$this->m_dbcibook->gettemanlimit($n);
		$data["judulapp"]="Baca Tabel Dengan LIMIT $n";
		$this->load->view("v_cdbmteman_array",$data);
	}
	function baca2arr(){
		$data["hslquery"]=$this->m_dbcibook->gettblteman();
		$data["judulapp"]="Baca Tabel Diproses Dengan Array";
		$this->load->view("v_cdbmteman_array",$data);
	}
	function usingrow(){
		$data["hslquery"]=$this->m_dbcibook->gettblteman();
		$data["judulapp"]="Baca Tabel Tampil Dengan Method row()";
		$this->load->view("v_cdbmteman_usingrow",$data);
	}
}
