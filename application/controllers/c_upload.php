<?php
class C_upload extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function showform($data=array()){
		$data["judulapp"]="Demo Upload File";
		$data["scriptaksi"]="c_upload/uploadfile";
		$data["aksi"]="Upload";
		$data["error"]=(isset($data["error"]))?$data["error"]:"";
		$viewfile="v_cupload_form";
		$this->load->view($viewfile,$data);
	}
	function uploadfile(){
		$config['upload_path'] = './files';
        $config['allowed_types'] = 'csv|txt|gif|jpg|png|pdf|doc|docx|xls|xlsx|ppt|pptx|ini';
        $config['overwrite']= true;
        $config['max_size']	= '20000000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $this->load->library('upload', $config);
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
			$this->showform($error);
		} else{
			$data = array('upload_data' => $this->upload->data());
			$data["judulapp"]="Demo Upload File";
			$this->load->view('v_cupload_hasil', $data);
		}
	}
}
?>