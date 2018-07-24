<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		
	}

               
	public function index()
	{
		$user =$this->user_model->listing();
		$data = array (	'title' => 'Data User',
						'user' => $user,
						'isi' => 'admin/user/list' );
		$this->load->view('admin/layout/wrapper',$data);
	}
	public function tambah()
	{

		$valid =$this->form_validation;
		$valid->set_rules('username','username','required',
			array('required' => 'Username Harus Diisi'));
		$valid->set_rules('password','password','required',
			array('required' => 'password Harus Diisi'));
		$valid->set_rules('nama','nama','required',
			array('required' => 'nama Harus Diisi'));
		if ($valid->run()===FALSE) {
		$data = array (
						'title' => 'Tambah User',
						'isi' => 'admin/user/tambah' );
		$this->load->view('admin/layout/wrapper',$data);

	}else {
		$i = $this->input;
		$data =array ( 	'nama'		=> $i->post('nama'),
						'jk'		=> $i->post('jk'),
						'no_hp'		=> $i->post('no_hp'),
						'username'	=> $i->post('username'),
						'password'	=> $i->post('password'),
						'level'		=> $i->post('level')
						
			);
		$this->user_model->tambah($data);
		$this->session->set_flashdata('sukses','Data User telah ditambah');
		redirect (base_url('user'));
	}
	}

	public function edit($id_user)
	{
		$user = $this->user_model->detail($id_user);
		$valid =$this->form_validation;
		$valid->set_rules('username','username','required',
			array('required' => 'Username Harus Diisi'));
		$valid->set_rules('password','password','required',
			array('required' => 'password Harus Diisi'));
		$valid->set_rules('nama','nama','required',
			array('required' => 'nama Harus Diisi'));
		if ($valid->run()===FALSE) {

		$data = array ('title' => 'Edit User',
						'user' => $user,
						'isi' => 'admin/user/edit' );
		$this->load->view('admin/layout/wrapper',$data);

	}else {
		$i = $this->input;
		$data =array ( 'id_user'   	=> $id_user,
						'nama'		=> $i->post('nama'),
						'jk'		=> $i->post('jk'),
						'no_hp'		=> $i->post('no_hp'),
						'username'	=> $i->post('username'),
						'password'	=> $i->post('password'),
						'level'		=> $i->post('level')
					

			);
		$this->user_model->edit($data);
		$this->session->set_flashdata('sukses','Data User telah diubah');
		redirect (base_url('user'));
	}
	}

	public function delete($id_user){
		$data = array('id_user'		=>$id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses','Data User telah dihapus');
		redirect (base_url('admin/user'));
	}

}