<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		
		$query = $this->db->get('supplier');
		return $query->result();
	}

	public function detail($id_supplier){
		$query = $this->db->get_where('supplier', array ('id_supplier'=>$id_supplier));
		return $query->row();
	}

	public function tambah($data) {
		$this->db->insert('supplier',$data);
	}

	public function edit ($data){
		$this->db->where('id_supplier',$data['id_supplier']);
		$this->db->update('supplier',$data);
	}

	public function delete($data) {
		$this->db->where('id_supplier',$data['id_supplier']);
		$this->db->delete('supplier',$data);
	}





	}
