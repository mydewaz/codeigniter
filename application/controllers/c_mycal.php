<?php
class c_mycal extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function index(){
		$this->load->library('calendar');
		$data["varkal"]=$this->calendar->generate();
		$data["judulapp"]="Kalendar Dengan Librari calendar!";
		$this->load->view("v_c_mycal",$data);
	}
	function mytpl(){
		$prefs = array (
					   'show_next_prev'  => TRUE,
					   'next_prev_url'   => site_url().'/c_mycal/mytpl/'
					 );
		$prefs['template'] = '

			{table_open}<table border="0" cellpadding="0" cellspacing="0" width="400px" height="400px">{/table_open}

			{heading_row_start}<tr>{/heading_row_start}
			   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
			   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
			   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
			{heading_row_end}</tr>{/heading_row_end}

			{week_row_start}<tr>{/week_row_start}
				{week_day_cell}<th>{week_day}</th>{/week_day_cell}
			{week_row_end}</tr>{/week_row_end}

			{cal_row_start}<tr>{/cal_row_start}
				{cal_cell_start}<td>{/cal_cell_start}

				{cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
				{cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

				{cal_cell_no_content}{day}{/cal_cell_no_content}
				{cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

				{cal_cell_blank}&nbsp;{/cal_cell_blank}

				{cal_cell_end}</td>{/cal_cell_end}
			{cal_row_end}</tr>{/cal_row_end}

			{table_close}</table>{/table_close}
		';

		$this->load->library('calendar', $prefs);
		$data["varkal"]=$this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
		$data["judulapp"]="Template Kalendar!";
		$this->load->view("v_c_mycal",$data);
	}
	function show(){
		$prefs = array (
					   'show_next_prev'  => TRUE,
					   'next_prev_url'   => site_url().'/c_mycal/show/'
					 );
		$this->load->library('calendar', $prefs);
		$data["varkal"]=$this->calendar->generate($this->uri->segment(3), $this->uri->segment(4));
		$data["judulapp"]="Navigasi Kalendar!";
		$this->load->view("v_c_mycal",$data);
	}
	function haribesar(){
		$this->load->library('calendar');
		$tahun=2012;
		$bulan='04';
		$aharibesar=array(
				21 => site_url()."/c_mycal/infohari/$tahun/$bulan/21"
			);
		$data["varkal"]=$this->calendar->generate($tahun,$bulan,$aharibesar);
		$data["judulapp"]="Kalendar Dengan Hari Besar!";
		$this->load->view("v_c_mycal",$data);
	}
	function infohari($tahun,$bulan,$tgl){
		$ainfohari=array(
				'20120421' => "Hari Kartini"
				,'20120502' => "Hari Pendidikan Nasional"
				,'20120520' => "Hari Kebangkitan Nasional"
			);
		$data["infohari"]=$ainfohari[$tahun.$bulan.$tgl];
		$data["tahun"]=$tahun;
		$data["bulan"]=$bulan;
		$data["tgl"]=$tgl;
		$data["judulapp"]="Info Hari Besar!";
		$this->load->view("v_c_mycal_infohari",$data);
	}
	function tahun($tahun=2012){
		$this->load->library('calendar');
		$abulan=array();
		for($i=1;$i<13;$i++){
			$bulan=str_pad($i,2,'0',STR_PAD_LEFT);
			$abulan[$bulan]=$this->calendar->generate($tahun,$bulan);
		}
		$data["varkal"]=$abulan;
		$data["judulapp"]="Kalendar Tahun $tahun";
		$this->load->view("v_c_mycal_tahun",$data);
	}
}
?>