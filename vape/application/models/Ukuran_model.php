<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ukuran_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		
		$query = $this->db->get('ukuran');
		return $query->result();
	}

	public function detail($id_ukuran){
		$query = $this->db->get_where('ukuran', array ('id_ukuran'=>$id_ukuran));
		return $query->row();
	}

	public function tambah($data) {
		$this->db->insert('ukuran',$data);
	}

	public function edit ($data){
		$this->db->where('id_ukuran',$data['id_ukuran']);
		$this->db->update('ukuran',$data);
	}

	public function delete($data) {
		$this->db->where('id_ukuran',$data['id_ukuran']);
		$this->db->delete('ukuran',$data);
	}





	}
