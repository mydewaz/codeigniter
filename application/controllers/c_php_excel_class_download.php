<?php
class c_php_excel_class_download extends CI_Controller {
	public function __construct(){
		parent::__construct();
   }
	function index(){
		$sT = microtime(1);
		$this->load->library('PHPXl');
		//*
		$objPHPExcel = new PHPExcel();
					   
		// Assign cell values
		$objPHPExcel->setActiveSheetIndex(0);
		for ($i = 0; $i < 1000; $i++) {
			for ($j = 0; $j < 10; $j++) {
				$nomorkol=chr(65+$j);
				$hasil=$i * $j;
				// $objPHPExcel->getActiveSheet()->setCellValue($nomorkol.$i, $hasil);
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($j, $i, $hasil);
			}
		}

		// redirect output to client browser
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="myfile.xls"');
		header('Cache-Control: max-age=0');

		$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output'); 
	}
}
?>
