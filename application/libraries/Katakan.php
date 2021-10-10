<?
class Katakan {
	function bilangan($angka){
		$this->load->library("form_validation");
		$satuan=array("nol","satu ","dua ","tiga ","empat ","lima ","enam ","tujuh ","delapan ","sembilan ");
		$retval="";
		if ($this->form_validation->integer($angka)) {
			$angka=intval($angka);
			$retval=$satuan[$angka];
		} else $retval="Tidak Dapat Dikonversi!";
		return $retval;
	}
}