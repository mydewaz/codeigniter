<?php
class M_dbcibook extends CI_Model{
	function __construct(){
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysql";
		$config['database'] = "dbcibook";
		$config['username'] = "root";
		$config['password'] = "";
		$this->load->database($config);
	}
	function filterteman($namateman){
		$sqlstr="select * from tblteman where namateman LIKE '$namateman'";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
	function contohfilterteman(){
		$sqlstr="select * from tblteman where namateman = 'Ilham'";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
	function uruttblteman(){
		$sqlstr="select * from tblteman order by namateman DESC";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
	function gettblteman(){
		$sqlstr="select * from tblteman";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
	function gettemanlimit($n=1){
		$sqlstr="select * from tblteman LIMIT $n";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
	function getjrecord(){
		$jrec=$this->db->count_all("tblteman");
		return $jrec;
	}
	function gettemanpage($p=1,$jppage=2){
		$sqlstr="select * from tblteman ";
		$sqlstr.=" limit $p, $jppage ";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
}
?>