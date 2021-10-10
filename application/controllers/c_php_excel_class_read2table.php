<?php
class c_php_excel_class_read2table extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('html');
		$this->load->library('PHPXl');
   }
	function index(){
		echo heading("Excel HTML Table",2);
		echo "Start!".date('Y-m-d H:i:s');
		//*
		$inputFileName="./data/bukutelp.xls";
		$inputFileType="Excel5";
		$objReader=IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$objPHPExcel = $objReader->load($inputFileName);
		
		$objWorksheet = $objPHPExcel->getActiveSheet();

		$this->load->library('table');
		$i=1;
		foreach ($objWorksheet->getRowIterator() as $row)
		{
			  $cellIterator = $row->getCellIterator();
			  $cellIterator->setIterateOnlyExistingCells(false);

			  $abaris=array();
			  foreach ($cellIterator as $cell)
			  {
				$abaris[]=$cell->getValue();
			  }
			  if ($i==1) $this->table->set_heading($abaris);
			  else $this->table->add_row($abaris);
			  $i++;
		}
		echo $this->table->generate();
		/**/
		echo "Done!".date('Y-m-d H:i:s');
	}
}
?>