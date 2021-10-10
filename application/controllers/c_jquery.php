<?php
class C_jquery extends CI_Controller{
	function classjs(){
		$this->load->library("javascript");
		$data=array();
		$data["judulapp"]="Event Dari Lib Class jQuery";
		$this->load->view("demojquery/v_cjquery_classjs",$data);
	}
	function showrecto($aksi="update"){
		$this->load->model("m_dbarcrud","tabel");
		$data["noteman"]=$this->input->post("noteman");
		$jrow=0;
		if (!empty($data["noteman"])) {
			$hslquery=$this->tabel->getrecord($data);
			$jrow=$hslquery->num_rows();
		} 
		// print_r($hslquery);
		if($jrow>0){
			$data=$this->tabel->defform();
			$row=$hslquery->row_array(0);
			$data["noteman"]["value"]=$row["noteman"];
			$data["namateman"]["value"]=$row["namateman"];
			$data["notelp"]["value"]=$row["notelp"];
			$data["email"]["value"]=$row["email"];
			$data["judulapp"]="$aksi Data";
			$data["aksi"]=$aksi;
			$data["scriptaksi"]="c_jquery/$aksi"."data";
			$this->showform($aksi,$data);
		}else {
			echo "Data sudah tidak ada!";
		}
	}
	function crud(){
		$data=array();
		$data["judulapp"]="CRUD And jQuery";
		$data["dview"]="demojquery/v_cjquery_crud";
		$this->load->view("demojquery/v_cjquery_layout",$data);
	}
	function crudbrowse(){
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_dbarcrud","tabel");
		$data=array();
		$data["hslquery"]=$this->tabel->getallrecord();
		$data["judulapp"]="List Of Data Teman!";
		$data["scriptaksi"]="c_jquery/grid";
		$data["scriptupdate"]="c_jquery/showrecto/update";
		$data["scriptdelete"]="c_jquery/showrecto/delete";
		$data["dview"]="demojquery/v_cjquery_grid";
		$this->load->view($data["dview"],$data);
	}
	function adddata(){
		$this->load->model("m_dbarcrud","tabel");
		$data["adata"]=$this->tabel->readinput();
		$data["hslquery"]=$this->tabel->addrec($data["adata"]);
		echo ($data["hslquery"])?"Berhasil ditambahkan!":"Gagal ditambahkan!";
	}
	function updatedata(){
		$this->load->model("m_dbarcrud","tabel");
		$data["adata"]=$this->tabel->readinput();
		$data["hslquery"]=$this->tabel->updaterec($data["adata"]);
		$data["judulapp"]="Update Data";
		echo ($data["hslquery"])?"Berhasil diupdate!":"Gagal diupdate!";
	}
	function deletedata(){
		$this->load->model("m_dbarcrud","tabel");
		$data["adata"]=$this->tabel->readinput();
		$data["hslquery"]=$this->tabel->deleterec($data["adata"]);
		$data["judulapp"]="Delete Data";
		echo ($data["hslquery"])?"Berhasil didelete!":"Gagal didelete!";
	}
	function crudadd(){
		$this->load->model("m_dbarcrud","tabel");
		$aksi="add";
		$data=array();
		$data=array_merge($data,$this->tabel->defform());
		$data["judulapp"]="$aksi Data";
		$data["aksi"]="$aksi";
		$data["scriptaksi"]="c_jquery/$aksi"."data";
		$this->showform($aksi,$data);
	}
	function showform($aksi="add",$data=array()){
		$this->load->helper(array("html","form","url","text"));
		$viewform="demojquery/v_cjquery_form";
		$this->load->view($viewform,$data);
	}
	function simple(){
		$data=array();
		$data["judulapp"]="Demo Simple jQuery";
		$data["dview"]="demojquery/v_cjquery_simple";
		$this->load->view("demojquery/v_cjquery_layout",$data);
	}
	function simpleajax(){
		$data=array();
		$data["judulapp"]="Demo Simple AJAX Dengan jQuery";
		$data["dview"]="demojquery/v_cjquery_simpleajax";
		$this->load->view("demojquery/v_cjquery_layout",$data);
	}
	function simpleload(){
		echo "Hai.. ini dari ".current_url();
	}
	function ajaxajax(){
		echo "Hai.. ini dari ".current_url();
	}
}
?>
