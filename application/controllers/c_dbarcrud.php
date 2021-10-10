<?php
class C_dbarcrud extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_dbarcrud","tabel");
	}
	function findrecto($aksi="update"){
		$data["aksi"]=$aksi;
		$data["judulapp"]="Find data to $aksi!";
		$data["scriptaksi"]="c_dbarcrud/showrecto/$aksi";
		$this->load->view("v_cdbarcrud_getnoteman",$data);
	}
	function showrecto($aksi="update"){
		$data["noteman"]=$this->input->post("noteman");
		$jrow=0;
		if (!empty($data["noteman"])) {
			$hslquery=$this->tabel->getrecord($data);
			$jrow=$hslquery->num_rows();
		} 
		if($jrow>0){
			$data=$this->tabel->defform();
			$row=$hslquery->row_array(0);
			$data["noteman"]["value"]=$row["noteman"];
			$data["namateman"]["value"]=$row["namateman"];
			$data["notelp"]["value"]=$row["notelp"];
			$data["email"]["value"]=$row["email"];
			$data["judulapp"]="$aksi Data";
			$data["aksi"]=$aksi;
			$data["scriptaksi"]="c_dbarcrud/$aksi"."data";
			$this->load->view("v_cdbarcrud_form",$data);
		}else {
			$this->findrecto($aksi);
		}
	}
	function updatedata(){
		$data["adata"]=$this->tabel->readinput();
		$data["hslquery"]=$this->tabel->updaterec($data["adata"]);
		$data["judulapp"]="Update Data";
		$data["message"]=($data["hslquery"])?"Berhasil diupdate!":"Gagal diupdate!";
		$this->load->view("v_cdbarcrud_message",$data);
	}
	function deletedata(){
		$data["adata"]=$this->tabel->readinput();
		$data["hslquery"]=$this->tabel->deleterec($data["adata"]);
		$data["judulapp"]="Delete Data";
		$data["message"]=($data["hslquery"])?"Berhasil didelete!":"Gagal didelete!";
		$this->load->view("v_cdbarcrud_message",$data);
	}
	function adddata(){
		$data["adata"]=$this->tabel->readinput();
		$data["hslquery"]=$this->tabel->addrec($data["adata"]);
		$data["judulapp"]="Tambah Data";
		$data["message"]=($data["hslquery"])?"Berhasil ditambahkan!":"Gagal ditambahkan!";
		$this->load->view("v_cdbarcrud_message",$data);
	}
	function showform($aksi="add"){
		$data=$this->tabel->defform();
		$data["judulapp"]="$aksi Data";
		$data["aksi"]="$aksi";
		$data["scriptaksi"]="c_dbarcrud/$aksi"."data";
		$viewform="v_cdbarcrud_form";
		if ($aksi!="add"){
			$data["hslquery"]=$this->tabel->getfilteredrec($data);
		}
		$this->load->view($viewform,$data);
	}
	function showfilter(){
		$data=$this->tabel->readfilter();
		$data["hslquery"]=$this->tabel->getfilteredrec($data);
		$data["judulapp"]="Input Filter Untuk Active Record";
		$data["scriptaksi"]="c_dbarcrud/showfilter";
		$this->load->view("v_cdbarcrud_filterform",$data);
	}
	function showallrecord(){
		$data["hslquery"]=$this->tabel->getallrecord();
		$data["judulapp"]="Show All With Active Record";
		$this->load->view("v_cdbarcrud_allrec",$data);
	}
	function showgrid(){
		$data=$this->tabel->readfilter();
		$data["hslquery"]=$this->tabel->getfilteredrec($data);
		$data["judulapp"]="Filter Data Dan Grid!";
		$data["scriptaksi"]="c_dbarcrud/showgrid";
		$data["scriptupdate"]="c_dbarcrud/showrecto/update";
		$data["scriptdelete"]="c_dbarcrud/showrecto/delete";
		$this->load->view("v_cdbarcrud_grid",$data);
	}
	function shownamaemail(){
		$data["hslquery"]=$this->tabel->getnamaemail();
		$data["judulapp"]="Show Nama & Email With Active Record";
		$this->load->view("v_cdbarcrud_namaemail",$data);
	}
}
?>