<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		
		$query = $this->db->get('kategori');
		return $query->result();
	}

	public function detail($id_kategori){
		$query = $this->db->get_where('kategori', array ('id_kategori'=>$id_kategori));
		return $query->row();
	}

	public function tambah($data) {
		$this->db->insert('kategori',$data);
	}

	public function edit ($data){
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->update('kategori',$data);
	}

	public function delete($data) {
		$this->db->where('id_kategori',$data['id_kategori']);
		$this->db->delete('kategori',$data);
	}





	}
