<?php
class c_dbteman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));

		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysql";
		$config['database'] = "dbcibook";
		$config['username'] = "root";
		$config['password'] = "";
		$this->load->database($config);
	}
	function loopobj(){
		$sqlstr="select * from tblteman";
		$hslquery=$this->db->query($sqlstr);
		echo "Tampil Hasil Pembacaan Dengan foreach()";
		echo br();
		foreach($hslquery->result() as $row){
			echo $row->noteman;
			echo $row->namateman;
			echo $row->notelp;
			echo $row->email;
			echo br();
		}
	}
	function libtabel(){
		$this->load->library("table");
		$sqlstr="select * from tblteman";
		$hslquery=$this->db->query($sqlstr);
		echo "Tampil Hasil Pembacaan Dengan Librari Table";
		echo br();
		$datatabel=$this->table->generate($hslquery);
		echo $datatabel;
	}
	function baca(){
		$sqlstr="select * from tblteman";
		$hslquery=$this->db->query($sqlstr);
		echo "Hasil Pembacaan Data Tabel Teman";
		echo br();
		echo "print_r:";
		echo br();
		print_r($hslquery);
		echo br();
		echo "var_dump:";
		echo br();
		var_dump($hslquery);
	}
}
