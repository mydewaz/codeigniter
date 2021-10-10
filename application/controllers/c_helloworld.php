<?php
class c_helloworld extends CI_Controller{
	function index(){
		?>
		<html>
		<head>
			<title>Hello World!</title>
		</head>
		<body>
		<?php echo "Hello world!";?>
		</body>
		</html>
		<?php
	}
	function daftar(){
		$this->load->model("m_hello");
		$data=array();
		$judulapp="Daftar Bahasa Dan Kosa Kalimat";
		$data["judulapp"]=$judulapp;
		$data["abahasa"]=$this->m_hello->abahasa;
		$data["akalimat"]=$this->m_hello->akalimat;
		$this->load->view("v_c_hello_daftar",$data);
	}
	function kamus(){
		$this->load->model("m_hello");
		$data=array();
		$data["abahasa"]=$this->m_hello->abahasa;
		$data["akalimat"]=$this->m_hello->akalimat;
		$this->load->view("v_c_hello_kamus",$data);
	}
	function talkmix($langid="EN"){
		$this->load->model("m_hello");
		$data=array();
		$data["halo"]=$this->m_hello->katakan($langid);
		$this->load->view("v_c_hello",$data);
	}
	function talka($langid){
		$this->load->model("m_hello");
		$data=array();
		$data["halo"]=$this->m_hello->abahasa[$langid];
		$data["halo"]=$data["halo"].">>".$this->m_hello->akalimat[$langid];
		$this->load->view("v_c_hello",$data);
	}
	function talk($langid){
		$this->load->model("m_hello");
		$data=array();
		$data["halo"]=$this->m_hello->bilang($langid);
		$this->load->view("v_c_hello",$data);
	}
	function says($langid){
		$this->load->model("m_hello");
		$data=array();
		$langname="English ";
		$data["halo"]=$langname.">>".$this->m_hello->halo;
		switch ($langid){
			case "ID":
				$langname="Indonesia ";
				$data["halo"]=$langname.">>"."Halo dunia!";
				break;
			case "AR":
				$langname="Arabian ";
				$data["halo"]=$langname.">>"."Ahlan dunia!";
				break;
		}
		$this->load->view("v_c_hello",$data);
	}
	function viewpure(){
		$this->load->view("v_hello");
	}
	function viewvar(){
		$data["halo"]="Hello World!";
		$this->load->view("v_c_hello",$data);
	}
	function modelproperty(){
		$this->load->model("m_hello");
		$data=array();
		$data["halo"]=$this->m_hello->halo;
		$this->load->view("v_c_hello",$data);
	}
	function modelmethod(){
		$this->load->model("m_hello");
		$data=array();
		$data["halo"]=$this->m_hello->katakata();
		$this->load->view("v_c_hello",$data);
	}
}
?>