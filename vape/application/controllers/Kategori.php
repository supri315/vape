<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
		
	}

               
	public function index()
	{
		$kategori =$this->kategori_model->listing();
		$data = array (	'title' => 'Data kategori',
						'kategori' => $kategori,
						'isi' => 'admin/kategori/list' );
		$this->load->view('admin/layout/wrapper',$data);
	}

		public function tambah()
	{

		$valid =$this->form_validation;
		$valid->set_rules('nama_kategori','nama_kategori','required',
			array('required' => 'nama_kategori Harus Diisi'));
		if ($valid->run()===FALSE) {
		$data = array (
						'title' => 'Tambah kategori',
						'isi' => 'admin/kategori/tambah' );
		$this->load->view('admin/layout/wrapper',$data);

	}else {
		$i = $this->input;
		$data =array ( 	'nama_kategori'		=> $i->post('nama_kategori'),
			);
		$this->kategori_model->tambah($data);
		$this->session->set_flashdata('sukses','Data kategori telah ditambah');
		redirect (base_url('kategori'));
	}
	}

	public function edit($id_kategori)
	{
		$kategori = $this->kategori_model->detail($id_kategori);
		$valid =$this->form_validation;
		$valid->set_rules('nama_kategori','nama_kategori','required',
			array('required' => 'Nama kategori Harus Diisi'));
		if ($valid->run()===FALSE) {

		$data = array ('title' => 'Edit Kategori',
						'kategori' => $kategori,
						'isi' => 'admin/kategori/edit' );
		$this->load->view('admin/layout/wrapper',$data);

	}else {
		$i = $this->input;
		$data =array ( 'id_kategori'   	=> $id_kategori,
						'nama_kategori'		=> $i->post('nama_kategori'),
			);
		$this->kategori_model->edit($data);
		$this->session->set_flashdata('sukses','Data kategori telah diubah');
		redirect (base_url('kategori'));
	}
	}

}