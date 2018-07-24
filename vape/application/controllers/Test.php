<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('test_model');
		
	}

               
	public function index()
	{
		$test =$this->test_model->listing();
		$sum = $this->test_model->sum();
		$data = array (	'title' => 'Data',
						'test' => $test,
						'sum' => $sum,
						'isi' => 'admin/test/list' );
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function tambah()
	{
	// 	$test =$this->test_model->listing();
	// 	$valid =$this->form_validation;
	// 	// $valid->set_rules('username','username','required',
	// 	// 	array('required' => 'Username Harus Diisi'));
	// 	// $valid->set_rules('password','password','required',
	// 	// 	array('required' => 'password Harus Diisi'));
	// 	$valid->set_rules('nama','nama','required',
	// 		array('required' => 'nama Harus Diisi'));
	// 	if ($valid->run()===FALSE) {
	// 	$data = array (	'test' => $test,
						
	// 					'isi' => 'admin/test/list' );
	// 	$this->load->view('admin/layout/wrapper',$data);

	// }else {
		$i = $this->input;
		$data =array ( 	'nama'		=> $i->post('nama'),
						'jumlah'		=> $i->post('jumlah'),
						'total'		=> $i->post('total'),
						'status'		=> 1,
						// 'username'	=> $i->post('username'),
						// 'password'	=> $i->post('password'),
						// 'level'		=> $i->post('level')
						
			);
		$this->test_model->tambah($data); 
		// $this->session->set_flashdata('sukses','Data User telah ditambah');
		redirect (base_url('test'));
	}
	
public function tambah12()
	{
	// 	$test =$this->test_model->listing();
	// 	$valid =$this->form_validation;
	// 	// $valid->set_rules('username','username','required',
	// 	// 	array('required' => 'Username Harus Diisi'));
	// 	// $valid->set_rules('password','password','required',
	// 	// 	array('required' => 'password Harus Diisi'));
	// 	$valid->set_rules('nama','nama','required',
	// 		array('required' => 'nama Harus Diisi'));
	// 	if ($valid->run()===FALSE) {

		$i = $this->input->post();
		$data = array();
		// $data =array ( 	'nama'		=> $i->post('nama'),
		// 				'jumlah'		=> $i->post('jumlah'),
		// 				'total'		=> $i->post('total'),
		// 				// 'status'		=> 1,
		// 				// 'username'	=> $i->post('username'),
		// 				// 'password'	=> $i->post('password'),
		// 				// 'level'		=> $i->post('level')
						
		// 	);
		
		foreach ($i['nama'] AS $key => $val)
			{
				$data[] = array(
					"nama" => $i['nama'][$key],
					"jumlah" => $i['jumlah'][$key],
					"total" => $i['total'][$key]
				);
			}
		$this->test_model->insert($data);
		$this->test_model->delete($data);

		// $this->session->set_flashdata('sukses','Data User telah ditambah');
		redirect (base_url('test'));
	}
	
	public function edit($id_test)
	{
		$test = $this->test_model->detail($id_user);
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

	// public function delete($id_user){
	// 	$data = array('id_user'		=>$id_user);
	// 	$this->user_model->delete($data);
	// 	$this->session->set_flashdata('sukses','Data User telah dihapus');
	// 	redirect (base_url('admin/user'));
	// }

}