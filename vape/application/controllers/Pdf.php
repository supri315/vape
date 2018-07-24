<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->Library('Pdf_library');
		$this->load->model('pembelian_model');

	}

	public function index() {

		$pembelian = $this->pembelian_model->laporan();
		$data = array (	'title' => 'Laporan Pembelian',
						'pembelian' => $pembelian,
					);
		$this->load->view('coba',$data);
	}
}