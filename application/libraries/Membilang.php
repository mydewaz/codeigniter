<?
class Membilang {
	function bilangcacah($angka){
		$satuan=array("nol","satu ","dua ","tiga ","empat ","lima ","enam ","tujuh ","delapan ","sembilan ");
		$angka=intval($angka);
		return $satuan[$angka];
	}
	function bilangangka($angka){
		$satuan=array("","se","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan");
		$angka=intval($angka);
		return $satuan[$angka];
	}
	function bilangbelasan($angka){
		return bilangangka($angka)."belas ";
	}

	function bilangtigadigit($angka){
		$retstr="";
		$seratus=100;
		$sepuluh=10;
		$sisa=$angka % $seratus;
		$ratusan=($angka-$sisa)/$seratus;
		$angka=$sisa;
		$sisa=$angka % $sepuluh;
		$puluhan=($angka-$sisa)/$sepuluh;
		$angka=$sisa; 
		if ($ratusan>1) $retstr.=$this->bilangangka($ratusan)."ratus ";
		elseif ($ratusan>0) $retstr.="seratus ";
		if ($puluhan>1) $retstr.=$this->bilangangka($puluhan)."puluh ";
		if ($angka>0) {
			if ($puluhan==1) $retstr.=$this->bilangbelasan($angka);
			else $retstr.=$this->bilangcacah($angka);
		} else {
			if ($puluhan==1) $retstr.="sepuluh ";
		}
		return $retstr;
	}

	function terbilang($bil){
		$retstr="";
		// periksa terlebih dahulu, apakah $angka kosong atau tidak
		if (!empty($bil)){
			// periksa terlebih dahulu apakah data yang menjadi parameter benar numerik atau bukan
			if (is_numeric($bil)){
				// $bil=abs($bil);
				$bil=trim($bil);
				$bil=(substr($bil,0,1)=="-")?substr($bil,0):$bil;
				// echo ":$bil:";
				// proses membilang baru bisa dilakukan di sini
				$bilang=array(
							array(-15,"trilyun "),
							array(-12,"milyar "),
							array(-9,"juta "),
							array(-6,"ribu "),
							array(-3,"")
						);
				$sz=strlen($bil) % 3;
				$bil=str_repeat("0",$sz+1).$bil;
				for($i=0;$i<sizeof($bilang);$i++) {
					$row=$bilang[$i];
					//$retstr.=abs($row[0])."<".strlen($bil).">";
					if (abs($row[0])<=strlen($bil)){
						$angka=substr($bil,$row[0],3);
						// $retstr.=$angka;
						if ($angka>1) $retstr.=$this->bilangtigadigit($angka).$row[1]." ";
						elseif ($angka>0)
								$retstr.=(empty($row[1])?$this->bilangcacah($angka):$this->bilangangka($angka)).$row[1];
					}
				}
			} else $retstr="Maaf bukan bilangan";
		}
		return ucfirst($retstr);
	}
	function membilanginteger($angka){
		$retstr="";
		// periksa terlebih dahulu, apakah $angka kosong atau tidak
		if (!empty($angka)){
			// periksa terlebih dahulu apakah data yang menjadi parameter benar numerik atau bukan
			if (is_numeric($angka)){
				$angka=($angka>0)?$angka:$angka*-1;
				// proses membilang baru bisa dilakukan di sini
				$bilang=array(
							array(1000000000000,"trilyun"),
							array(1000000000,"milyar"),
							array(1000000,"juta"),
							array(1000,"ribu"),
							array(1,"")
						);
				for($i=0;$i<sizeof($bilang);$i++) {
					$row=$bilang[$i];
					$sisa=$angka % $row[0];
					$angka=($angka - $sisa) /  $row[0];
					if ($angka>1) $retstr.=$this->bilangtigadigit($angka).$row[1]." ";
					elseif ($angka>0) 
							$retstr.=(($row[0]==1)?$this->bilangcacah($angka):$this->bilangangka($angka)).$row[1];
					$angka=$sisa;
				}
			} else $retstr="Maaf bukan bilangan";
		}
		return $retstr;
	}
	function rupiah($bil,$cbil="Rp. ",$jdec=0,$cth=".",$cdec=","){
		return $cbil.$this->number_format($bil,$jdec,$cdec,$cth);
	}
}
?>