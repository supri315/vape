<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier_model');
		
	}

               
	public function index()
	{
		$supplier =$this->supplier_model->listing();
		$data = array (	'title' => 'Data supplier',
						'supplier' => $supplier,
						'isi' => 'admin/supplier/list' );
		$this->load->view('admin/layout/wrapper',$data);
	}

}