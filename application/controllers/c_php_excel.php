<?php
class c_php_excel extends CI_Controller {
	public function __construct(){
		parent::__construct();
   }
	function index(){
		$sT = microtime(1);

		$x = new ExcelBook();
		$s = $x->addSheet("Sheet 1");

		for ($i = 0; $i < 1000; $i++) {
		for ($j = 0; $j < 10; $j++) {
		$s->write($i, $j, ($i * $j));
		}
		}

		$x->save("bench.xls");

		$eT = microtime(1);

		var_dump(($eT - $sT), memory_get_usage(1), memory_get_peak_usage(1));
	}
}
?>