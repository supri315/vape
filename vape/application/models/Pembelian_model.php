<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		
		  $this->db->select('*');
            $this->db->from('pembelian');
            $this->db->join('user','user.id_user=pembelian.id_user');
            $this->db->join('barang','barang.kd_barang=pembelian.kd_barang');
            $this->db->join('supplier','supplier.id_supplier=pembelian.id_supplier');
            // $this->db->join('ukuran','ukuran.id_ukuran=pembelian.id_ukuran');
             $this->db->order_by('id_pembelian','DESC');
             $query = $this->db->get();
             return $query->result();   
        }


	
        public function laporan(){
		
		  $this->db->select('*');
            $this->db->from('pembelian');
            $this->db->join('user','user.id_user=pembelian.id_user');
            $this->db->join('barang','barang.kd_barang=pembelian.kd_barang');
            $this->db->join('supplier','supplier.id_supplier=pembelian.id_supplier');
            $this->db->where('tgl_transaksi BETWEEN "'. date('Y-m-d', strtotime($this->session->userdata('tanggal1'))). '" and "'. date('Y-m-d', strtotime($this->session->userdata('tanggal2'))).'"');
             $this->db->order_by('tgl_transaksi','ASC');
             // $q = mysql_query("SELECT * from pembelian join user on user.id_user=pembelian.id_user join barang on barang.kd_barang=pembelian.kd_barang join supplier on supplier.id_supplier=pembelian.id_supplier where (tgl_transaksi BETWEEN '$tanggal1' AND '$tanggal2' order_by tgl_transaksi DESC");
              $query = $this->db->get();
             return $query->result_array();   
        }

        public function listinglaporan($tanggal1,$tanggal2){
		
		  $this->db->select('*');
            $this->db->from('pembelian');
            $this->db->join('user','user.id_user=pembelian.id_user');
            $this->db->join('barang','barang.kd_barang=pembelian.kd_barang');
            $this->db->join('supplier','supplier.id_supplier=pembelian.id_supplier');
            $this->db->where('tgl_transaksi BETWEEN "'. date('Y-m-d', strtotime($tanggal1)). '" and "'. date('Y-m-d', strtotime($tanggal2)).'"');
             $this->db->order_by('tgl_transaksi','ASC');
             // $q = mysql_query("SELECT * from pembelian join user on user.id_user=pembelian.id_user join barang on barang.kd_barang=pembelian.kd_barang join supplier on supplier.id_supplier=pembelian.id_supplier where (tgl_transaksi BETWEEN '$tanggal1' AND '$tanggal2' order_by tgl_transaksi DESC");
              $query = $this->db->get();
             return $query->result();   
        }

	public function detail($id_pembelian){
		$query = $this->db->get_where('pembelian', array ('id_pembelian'=>$id_pembelian));
		return $query->row();
	}

	public function tambah($data) {
		$this->db->insert('pembelian',$data);
	}

	public function edit ($data){
		$this->db->where('id_pembelian',$data['id_pembelian']);
		$this->db->update('pembelian',$data);
	}

	public function delete($data) {
		$this->db->where('id_pembelian',$data['id_pembelian']);
		$this->db->delete('pembelian',$data);
	}

	}
