<?php
class M_dbarcrud extends CI_Model{
	function __construct(){
		parent::__construct();
		$config['hostname'] = "localhost";
		$config['dbdriver'] = "mysql";
		$config['database'] = "dbcibook";
		$config['username'] = "root";
		$config['password'] = "";
		$this->load->database($config);
	}
	function readnoteman(){
		$noteman=array(
				"name"=>"noteman"
				,"value"=>$this->input->post("noteman")
			);
		return $noteman;
	}
	function getrecord($data){
		$this->db->where($data);
		return $this->db->get("tblteman");
	}
	function updaterec($adata){
		$this->db->where("noteman",$adata["noteman"]);
		$this->db->update("tblteman",$adata);
		return (($this->db->affected_rows()>0)?TRUE:FALSE);
	}
	function deleterec($adata){
		$this->db->where("noteman",$adata["noteman"]);
		$this->db->delete("tblteman");
		return (($this->db->affected_rows()>0)?TRUE:FALSE);
	}
	function addrec($arec){
		$this->db->insert("tblteman",$arec);
		return (($this->db->affected_rows()>0)?TRUE:FALSE);
	}
	function readinput(){
		$atbltemn=array();
		$atblteman["noteman"]=	$this->input->post("noteman");
		$atblteman["namateman"]=$this->input->post("namateman");
		$atblteman["notelp"]=	$this->input->post("notelp");
		$atblteman["email"]=	$this->input->post("email");
		return $atblteman;
	}
	function defform(){
		// definisi elemen form untuk data teman
		$noteman=array(
				"name"=>"noteman"
				,"id"=>"noteman"
				,"maxlength"=>"4"
				,"size"=>"3"
				,"value"=>""
				,"style"=>"background:red;"
			);
		$namateman=array(
				"name"=>"namateman"
				,"id"=>"namateman"
				,"maxlength"=>"50"
				,"size"=>"35"
				,"value"=>""
				,"style"=>"background:cyan;"
			);
		$notelp=array(
				"name"=>"notelp"
				,"id"=>"notelp"
				,"maxlength"=>"15"
				,"size"=>"13"
				,"value"=>""
				,"style"=>"background:cyan;"
			);
		$email=array(
				"name"=>"email"
				,"id"=>"email"
				,"maxlength"=>"35"
				,"size"=>"25"
				,"value"=>""
				,"style"=>"background:cyan;"
			);
		// end definisi
		$atbltemn=array();
		$atblteman["noteman"]=$noteman;
		$atblteman["namateman"]=$namateman;
		$atblteman["notelp"]=$notelp;
		$atblteman["email"]=$email;
		return $atblteman;
	}
	function readfilter(){
		$namafield=$this->input->post("namafield");
		$valfilter=$this->input->post("valfilter");
		return array(
				"namafield"=>$namafield
				,"valfilter"=>$valfilter
			);
	}
	function getfilteredrec($data){
		$this->db->like($data["namafield"],$data["valfilter"]);
		return $this->db->get("tblteman");
	}
	function getallrecord(){
		return $this->db->get("tblteman");
	}
	function getnamaemail(){
		$this->db->select("namateman,email");
		$this->db->from("tblteman");
		$hslquery=$this->db->get();
		return $hslquery;
	}
}
?>