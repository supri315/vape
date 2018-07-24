<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pembelian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pembelian_model');
		
	}
               
	public function index()
	{

		$tanggal1 = $this->input->post('tanggal1');
		$tanggal2 =$this->input->post('tanggal2');
		$this->session->set_userdata('tanggal1', $tanggal1); 	
		$this->session->set_userdata('tanggal2', $tanggal2); 	
		$pembelian =$this->pembelian_model->listinglaporan($tanggal1,$tanggal2);
		$data = array (	'title' => 'Data pembelian',
						'pembelian' => $pembelian,
						'tanggal1'	=> $tanggal1,
						'tanggal2'	=> $tanggal2,
						'isi' => 'manager/laporan_pembelian/list' );
		$this->load->view('manager/layout/wrapper',$data);
	}

}