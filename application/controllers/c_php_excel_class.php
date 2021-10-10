<?php
class c_php_excel_class extends CI_Controller {
	public function __construct(){
		parent::__construct();
   }
	function index(){
		echo "Start!";
		$sT = microtime(1);
		$this->load->library('PHPXl');
		//*
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setTitle("title")->setDescription("description");
					   
		// Assign cell values
		$objPHPExcel->setActiveSheetIndex(0);
		for ($i = 0; $i < 1000; $i++) {
			for ($j = 0; $j < 10; $j++) {
				$nomorkol=chr(65+$j);
				$hasil=$i * $j;
				$objPHPExcel->getActiveSheet()->setCellValue($nomorkol.$i, $hasil);
			}
		}

		// Save it as an excel 2003 file
		$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save("excelfromclass.xls");
		/**/
		echo "<br />";
		echo "Done!".date('Y-m-d H:i:s');
		echo "<br />";

		$eT = microtime(1);

		var_dump(($eT - $sT), memory_get_usage(1), memory_get_peak_usage(1));
	}
	function justOneCell(){
		echo "Start!".date('Y-m-d H:i:s');
		$this->load->library('PHPXl');
		//*
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->getProperties()->setTitle("title")->setDescription("description");
					   
		// Assign cell values
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'cell value here');

		// Save it as an excel 2003 file
		$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save("excelfromclass.xls");
		/**/
		echo "<br />";
		echo "Done!".date('Y-m-d H:i:s');
	}
}
?>