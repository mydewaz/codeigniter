<?php
class c_db extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function cekkoneksi(){
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysql";
		$config['database'] = "dbcibook";
		$config['username'] = "root";
		$config['password'] = "";

		$this->load->database($config);
		echo "DB OK";
	}
	function dumprecset(){
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysql";
		$config['database'] = "dbcibook";
		$config['username'] = "root";
		$config['password'] = "";

		$this->load->database($config);
		$sqlstr="select * from tblteman";
		$queryresult=$this->db->query($sqlstr);
		echo "Dengan print_r: ";
		echo br();
		print_r($queryresult);
		echo br();
		echo "Dengan var_dump: ";
		echo br();
		var_dump($queryresult);
	}
	function errkoneksi(){
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysql";
		$config['database'] = "dbcibook";
		$config['username'] = "root";
		$config['password'] = "x";
		$config['db_debug'] = FALSE;

		if ($this->load->database($config))	echo "DB OK";
		else echo "Err DB connection!";
	}
}
