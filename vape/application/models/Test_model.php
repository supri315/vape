<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		
		$query = $this->db->get('test');
		return $query->result();
	}

		public function sum(){
		$this->db->select_sum('total');
		$this->db->from('test');
		 $query = $this->db->get('');
          return $query->row();

	}

	public function detail($id_test){
		$query = $this->db->get_where('test', array ('id_test'=>$id_test));
		return $query->row();
	}

	public function tambah($data) {
		$this->db->insert('test',$data);
	}
		public function insert($data = array()) {
		$this->db->insert_batch('test2',$data);
	}

	public function edit ($data){
		$this->db->where('id_test',$data['id_test']);
		$this->db->update('test',$data);
	}

	public function delete() {
		$this->db->query('DELETE from test');
	}





	}
