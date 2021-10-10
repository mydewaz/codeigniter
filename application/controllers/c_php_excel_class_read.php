<?php
class c_php_excel_class_read extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('PHPXl');
   }
	function index(){
		echo "Start!".date('Y-m-d H:i:s');
		//*
		$inputFileName="./data/bukutelp.xls";
		$inputFileType="Excel5";
		$objReader=IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($inputFileName);
		
		$objWorksheet = $objPHPExcel->getActiveSheet();

		foreach ($objWorksheet->getRowIterator() as $row)
		{
			  $cellIterator = $row->getCellIterator();
			  $cellIterator->setIterateOnlyExistingCells(false);

			  echo "<br />";
			  foreach ($cellIterator as $cell)
			  {
				echo $cell->getValue();
			  }
		}
		/**/
		echo "<br />";
		echo "Done!".date('Y-m-d H:i:s');
	}
	function worksheet(){
		echo "Start!".date('Y-m-d H:i:s');
		//*
		$inputFileName="./data/bukutelp.xls";
		$inputFileType="Excel5";
		$objReader=IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($inputFileName);
		
		$objWorksheet = $objPHPExcel->getActiveSheet();
		//*
		echo "<pre>";
		print_r($objWorksheet);
		echo "</pre>";
		/**/
		$highestColumm = $objPHPExcel->setActiveSheetIndex(0)->getHighestColumn(); // e.g. "EL" 
		$highestRow = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();  

		$highestColumm++;
		for ($row = 1; $row < $highestRow + 1; $row++) {     
			$dataset = array();     
			for ($column = 'A'; $column != $highestColumm; $column++) {
				$dataset[] = $objPHPExcel->setActiveSheetIndex(0)->getCell($column . $row)->getValue();
			}
			$this->datasets[] = $dataset;
		}
		echo "<pre>";
		print_r($datasets);
		echo "</pre>";
		echo "<br />";
		echo "Done!".date('Y-m-d H:i:s');
	}
}
?>