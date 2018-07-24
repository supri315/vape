<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_penjualan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penjualan_model');
		
	}
               
	public function index()
	{

		$tanggal1 = $this->input->post('tanggal1');
		$tanggal2 =$this->input->post('tanggal2');
		$this->session->set_userdata('tanggal1', $tanggal1); 	
		$this->session->set_userdata('tanggal2', $tanggal2); 	
		$penjualan =$this->penjualan_model->laporanpenjualan($tanggal1,$tanggal2);
		$data = array (	'title' => 'Laporan Penjualan',
						'penjualan' => $penjualan,
						'tanggal1'	=> $tanggal1,
						'tanggal2'	=> $tanggal2,
						'isi' => 'manager/laporan_penjualan/list' );
		$this->load->view('manager/layout/wrapper',$data);
	}

}