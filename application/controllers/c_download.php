<?php
class C_download extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function showfiles(){
		$this->load->helper("directory");
		$data=array();
		$data["files"] = directory_map('./files', 1);
		$data["judulapp"]="Demo Show dan Download File!";
		$this->load->view("v_cdownload",$data);
	}
	function showdata($namafile){
		$path_parts = pathinfo($namafile); 
		$ext = strtolower($path_parts["extension"]); 
		
		// Determine Content Type 
		switch ($ext) { 
		  case "gif": $ctype="image/gif"; break; 
		  case "png": $ctype="image/png"; break; 
		  case "jpeg": 
		  case "jpg": $ctype="image/jpg"; break; 
		  default: $ctype="application/force-download"; 
		} 
		echo header("Content-Type: $ctype");
		echo header('Content-Disposition: attachment; filename="'.$namafile.'"');
		ob_clean(); 
		flush(); 
		readfile("./files/".$namafile );
	}
	function download($namafile){
		$this->load->helper("download");
		$data=file_get_contents("./files/".$namafile);
		force_download($namafile,$data);
	}
}
?>