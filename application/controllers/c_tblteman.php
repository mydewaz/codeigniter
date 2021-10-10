<?php
class c_tblteman extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array("html","form","url","text"));
	}
	function index(){
		$this->load->library('table');
		$atelpteman=array(
				array("Nama","No Telp")
				,array("Ilham","0856122211")
				,array("Sultoni Tegal","0857122233")
				,array("Rathomi","085666666")
				,array("Unieeee","0813333333")
				,array("Parjoko","081222788")
				,array("Wardoyo","081888887")
			);
		$data["vartbl"]=$this->table->generate($atelpteman);
		$data["judulapp"]="Tabel Data Teman!";
		$this->load->view("v_c_tblteman",$data);
	}
	function withheading(){
		$this->load->library('table');
		$atelpteman=array(
				array("Ilham","0856122211")
				,array("Sultoni Tegal","0857122233")
				,array("Rathomi","085666666")
				,array("Unieeee","0813333333")
				,array("Parjoko","081222788")
				,array("Wardoyo","081888887")
			);
		$this->table->set_heading(array("Nama","No Telp"));
		$data["vartbl"]=$this->table->generate($atelpteman);
		$data["judulapp"]="Tabel Data Teman!";
		$this->load->view("v_c_tblteman",$data);
	}
	function usingaddrow(){
		$this->load->library('table');

		$this->table->set_heading("Nama","No Telp");
		$this->table->add_row("Ilham","0856122211");
		$this->table->add_row("Sultoni Tegal","0857122233");
		$this->table->add_row("Rathomi","085666666");
		$this->table->add_row("Unieeee","0813333333");
		$this->table->add_row("Parjoko","081222788");
		$this->table->add_row("Wardoyo","081888887");
		$data["vartbl"]=$this->table->generate();
		
		$data["judulapp"]="Tabel Data Teman!";
		$this->load->view("v_c_tblteman",$data);
	}
	function usingtemplate(){
		$this->load->library('table');

		$tmpl = array (
							'table_open'          => '<table border="1" cellpadding="4" cellspacing="0">',

							'heading_row_start'   => '<tr>',
							'heading_row_end'     => '</tr>',
							'heading_cell_start'  => '<th>',
							'heading_cell_end'    => '</th>',

							'row_start'           => '<tr>',
							'row_end'             => '</tr>',
							'cell_start'          => '<td>',
							'cell_end'            => '</td>',

							'row_alt_start'       => '<tr>',
							'row_alt_end'         => '</tr>',
							'cell_alt_start'      => '<td>',
							'cell_alt_end'        => '</td>',

							'table_close'         => '</table>'
					  );

		$this->table->set_template($tmpl); 	

		$this->table->set_heading("Nama","No Telp");
		$this->table->add_row("Ilham","0856122211");
		$this->table->add_row("Sultoni Tegal","0857122233");
		$this->table->add_row("Rathomi","085666666");
		$this->table->add_row("Unieeee","0813333333");
		$this->table->add_row("Parjoko","081222788");
		$this->table->add_row("Wardoyo","081888887");
		$data["vartbl"]=$this->table->generate();
		
		$data["judulapp"]="Tabel Data Teman!";
		$this->load->view("v_c_tblteman",$data);
	}
	function usingparttemplate(){
		$this->load->library('table');

		$tmpl = array (
							'heading_cell_start'  => '<th style="background:cyan;">'
					  );

		$this->table->set_template($tmpl); 	

		$this->table->set_heading("Nama","No Telp");
		$this->table->add_row("Ilham","0856122211");
		$this->table->add_row("Sultoni Tegal","0857122233");
		$this->table->add_row("Rathomi","085666666");
		$this->table->add_row("Unieeee","0813333333");
		$this->table->add_row("Parjoko","081222788");
		$this->table->add_row("Wardoyo","081888887");
		$data["vartbl"]=$this->table->generate();
		
		$data["judulapp"]="Tabel Data Teman!";
		$this->load->view("v_c_tblteman",$data);
	}
}
?>