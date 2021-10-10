<?php
class C_dbartest extends CI_Controller{
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
	function chaining(){
		$q=$this->db->select("namateman,email")->from("tblteman")->get();
		var_dump($q);
	}
	function showlastsql(){
		$this->db->select("namateman,email");
		$q=$this->db->get("tblteman");
		echo $this->db->last_query();
	}
	function showwhereisnull(){
		$this->db->where("noteman");
		$q=$this->db->get("tblteman");
		echo $this->db->last_query();
	}
}
?>