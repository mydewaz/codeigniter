<?php
class c_dbqcrud extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
		$this->load->model("m_dbqcrud");
	}
	function index(){
		$data["judulapp"]="Aplikasi CRUD Data Teman";
		$data["message"]="";
		$this->load->view("v_cdbqcrud_message",$data);
	}
	function getnoteman($aksi="update"){
		$data["aksi"]=$aksi;
		$data["judulapp"]="Masukkan No Teman Untuk Di$aksi";
		$data["scriptaksi"]="c_dbqcrud/form$aksi";
		$this->load->view("v_cdbqcrud_getnoteman",$data);
	}
	function formdelete(){
		$noteman=$this->input->post("noteman");
		$jrow=0;
		if (!empty($noteman)) {
			$hslquery=$this->m_dbqcrud->getrecord($noteman);
			$jrow=$hslquery->num_rows();
		} 
		if($jrow>0){
			$data=array();
			$row=$hslquery->row_array(0);
			$data["noteman"]=$row["noteman"];
			$data["namateman"]=$row["namateman"];
			$data["notelp"]=$row["notelp"];
			$data["email"]=$row["email"];
			$data["judulapp"]="Delete Data";
			$data["scriptaksi"]="c_dbqcrud/deletedariform";
			$this->load->view("v_cdbqcrud_todel",$data);
		}else {
			$this->getnoteman("delete");
		}
	}
	function deletedariform(){
		$btn2Del=$this->input->post("btn2Del");
		$data["noteman"]=$this->input->post("noteman");
		if ($btn2Del=="Hapus"){
			$hslquery=$this->m_dbqcrud->getrecord($data["noteman"]);
			$row=$hslquery->row_array(0);
			$data["adata"]["noteman"]=$row["noteman"];
			$data["adata"]["namateman"]=$row["namateman"];
			$data["adata"]["notelp"]=$row["notelp"];
			$data["adata"]["email"]=$row["email"];
			$data["hslquery"]=$this->m_dbqcrud->delete($data["noteman"]);
			$data["judulapp"]="Delete Data";
			$data["message"]=($data["hslquery"])?"Berhasil dihapus!":"Gagal dihapus!";
			$this->load->view("v_cdbqcrud_message",$data);
		} else {
			$this->getnoteman("delete");
		}
	}
	function formupdate(){
		$noteman=$this->input->post("noteman");
		$jrow=0;
		if (!empty($noteman)) {
			$hslquery=$this->m_dbqcrud->getrecord($noteman);
			$jrow=$hslquery->num_rows();
		} 
		if($jrow>0){
			$data=$this->m_dbqcrud->defform();
			$row=$hslquery->row_array(0);
			$data["noteman"]["value"]=$row["noteman"];
			$data["namateman"]["value"]=$row["namateman"];
			$data["notelp"]["value"]=$row["notelp"];
			$data["email"]["value"]=$row["email"];
			$data["judulapp"]="Update Data";
			$data["scriptaksi"]="c_dbqcrud/updatedariform";
			$this->load->view("v_cdbqcrud_form",$data);
		}else {
			$this->getnoteman("update");
		}
	}
	function updatedariform(){
		$data["adata"]=$this->m_dbqcrud->readinput();
		$data["hslquery"]=$this->m_dbqcrud->update($data["adata"]);
		$data["judulapp"]="Update Data";
		$data["message"]=($data["hslquery"])?"Berhasil diupdate!":"Gagal diupdate!";
		$this->load->view("v_cdbqcrud_message",$data);
	}
	function formadd(){
		$data=$this->m_dbqcrud->defform();
		$data["judulapp"]="Tambah Data";
		$data["scriptaksi"]="c_dbqcrud/tambahdariform";
		$this->load->view("v_cdbqcrud_form",$data);
	}
	function tambahdariform(){
		$data["adata"]=$this->m_dbqcrud->readinput();
		$data["hslquery"]=$this->m_dbqcrud->tambah($data["adata"]);
		$data["judulapp"]="Tambah Data";
		$data["message"]=($data["hslquery"])?"Berhasil ditambahkan!":"Gagal ditambahkan!";
		$this->load->view("v_cdbqcrud_message",$data);
	}
	function tambahdata(){
		$adata=array(
				"noteman"=>7
				,"namateman"=>"Sabiq"
				,"notelp"=>"0855555555"
				,"email"=>"sabiq@gmail.com"
			);
		$data["hslquery"]=$this->m_dbqcrud->tambah($adata);
		$data["judulapp"]="Tambah Data";
		$hsltambah=($data["hslquery"])?"Berhasil ditambahkan!":"Gagal ditambahkan!";
		echo $data["judulapp"];
		echo $hsltambah;
		echo anchor("c_dbmteman/baca","Tampilan Seluruh Data");
	}
}
