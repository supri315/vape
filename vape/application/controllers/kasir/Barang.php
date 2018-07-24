<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->model('kategori_model');
		$this->load->model('supplier_model');
		$this->load->model('ukuran_model');
	}

	public function index()
	{
		$barang =$this->barang_model->listing();		
		$data = array (	'title' => 'Data Barang',
						'barang' => $barang,
						'isi' => 'kasir/barang/list' );
		$this->load->view('kasir/layout/wrapper',$data);
	}

	public function tambah()
	{
		$kategori = $this->kategori_model->listing();
		$supplier = $this->supplier_model->listing();
		$ukuran = $this->ukuran_model->listing();
		$valid =$this->form_validation;
		$valid->set_rules('nama_barang','nama_barang','required',
			array('required' => 'nama barang Harus Diisi'));
		if ($valid->run()===FALSE) {
		$data = array (
						'title' => 'Tambah Barang',
						'kategori' => $kategori,
						'supplier' => $supplier,
						'ukuran' => $ukuran,
						'isi' => 'kasir/barang/tambah' );
		$this->load->view('kasir/layout/wrapper',$data);

	}else {
		$i = $this->input;
		$data =array ( 	'kd_barang'		=> $i->post('kd_barang'),
						'nama_barang'	=> $i->post('nama_barang'),
						'id_kategori'	=> $i->post('id_kategori'),
						'jenis'			=> $i->post('jenis'),
						// 'id_supplier'	=> $i->post('id_supplier'),
						'id_ukuran'		=> $i->post('id_ukuran'),
						'stok'			=> 0,
						
			);
		$this->barang_model->tambah($data);
		$this->session->set_flashdata('sukses','Data barang telah ditambah');
		redirect (base_url('barang'));
	}
	}
	
public function edit($kd_barang){
		$kategori = $this->kategori_model->listing();
		$supplier = $this->supplier_model->listing();
		$ukuran = $this->ukuran_model->listing();
		$barang = $this->barang_model->detail($kd_barang);
		$valid =$this->form_validation;
		$valid->set_rules('nama_barang','nama_barang','required',
			array('required' => 'nama barang Harus Diisi'));
		if ($valid->run()===FALSE) {

		$data = array ('title' => 'Edit barang',
						'barang' => $barang,
						'kategori' => $kategori,
						'supplier' => $supplier,
						'ukuran' => $ukuran,
						'isi' => 'kasir/barang/edit' );
		$this->load->view('kasir/layout/wrapper',$data);

	}else {
		$i = $this->input;
		$data =array ( 
						'kd_barang'		=> $i->post('kd_barang'),
						'nama_barang'	=> $i->post('nama_barang'),
						'id_kategori'	=> $i->post('id_kategori'),
						'jenis'			=> $i->post('jenis'),
						'id_supplier'	=> $i->post('id_supplier'),
						'id_ukuran'		=> $i->post('id_ukuran'),
						'stok'			=> $i->post('stok'),
					);
		$this->barang_model->edit($data);
		$this->session->set_flashdata('sukses','Data barang telah diubah');
		redirect (base_url('barang'));
	}

}

}