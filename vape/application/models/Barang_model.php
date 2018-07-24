<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		
		  $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('kategori','kategori.id_kategori=barang.id_kategori');
            // $this->db->join('supplier','supplier.id_supplier=barang.id_supplier');
            $this->db->join('ukuran','ukuran.id_ukuran=barang.id_ukuran');
            // $this->db->join('ukuran','ukuran.id_ukuran=barang.id_ukuran');
             $this->db->order_by('kd_barang','DESC');
             $query = $this->db->get();
             return $query->result();   
        }

	public function detail($kd_barang){
		$query = $this->db->get_where('barang', array ('kd_barang'=>$kd_barang));
		return $query->row();
	}

	public function tambah($data) {
		$this->db->insert('barang',$data);
	}

	public function edit ($data){
		$this->db->where('kd_barang',$data['kd_barang']);
		$this->db->update('barang',$data);
	}

	public function delete($data) {
		$this->db->where('kd_barang',$data['kd_barang']);
		$this->db->delete('barang',$data);
	}

	}
