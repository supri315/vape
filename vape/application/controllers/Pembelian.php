<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pembelian_model');
		$this->load->model('barang_model');
		$this->load->model('supplier_model');
		
	}
               
	public function index()
	{
		$pembelian =$this->pembelian_model->listing();
		$data = array (	'title' => 'Data pembelian',
						'pembelian' => $pembelian,
						'isi' => 'admin/pembelian/list' );
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function tambah()
	{
		$barang = $this->barang_model->listing();
		$supplier = $this->supplier_model->listing();
		$valid =$this->form_validation;
		$valid->set_rules('jumlah','jumlah','required',
			array('required' => 'jumlah Harus Diisi'));
		if ($valid->run()===FALSE) {
		$data = array (
						'title' => 'Tambah pembelian',
						'barang' => $barang,
						'supplier' => $supplier,
						'isi' => 'admin/pembelian/tambah' );
		$this->load->view('admin/layout/wrapper',$data);

	}else {
		$i = $this->input;
		$data =array ( 	'tgl_transaksi'		=> $i->post('tgl_transaksi'),
						'kd_barang'	=> $i->post('kd_barang'),
						// 'id_kategori'	=> $i->post('id_kategori'),
						// 'jenis'			=> $i->post('jenis'),
						'id_supplier'	=> $i->post('id_supplier'),
						'id_user'		=> 	$this->session->userdata('id'),
						'jumlah'			=> $i->post('jumlah'),
						'harga'			=> $i->post('harga'),
						
			);
		$this->pembelian_model->tambah($data);
		$this->session->set_flashdata('sukses','Data pembelian telah ditambah');
		redirect (base_url('pembelian'));
	}
	}
	

}