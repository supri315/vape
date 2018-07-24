<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing(){
		
		  $this->db->select('*');
            $this->db->from('penjualan_temp');
             $query = $this->db->get();
             return $query->result();   
        }

         public function laporanpenjualan($tanggal1,$tanggal2){
		
		  $this->db->select('*');
            $this->db->from('average');
            // $this->db->join('user','user.id_user=pembelian.id_user');
            // $this->db->join('barang','barang.kd_barang=pembelian.kd_barang');
            // $this->db->join('supplier','supplier.id_supplier=pembelian.id_supplier');
            $this->db->where('tanggal BETWEEN "'. date('Y-m-d', strtotime($tanggal1)). '" and "'. date('Y-m-d', strtotime($tanggal2)).'"');
             $this->db->order_by('tanggal','ASC');
             // $q = mysql_query("SELECT * from pembelian join user on user.id_user=pembelian.id_user join barang on barang.kd_barang=pembelian.kd_barang join supplier on supplier.id_supplier=pembelian.id_supplier where (tgl_transaksi BETWEEN '$tanggal1' AND '$tanggal2' order_by tgl_transaksi DESC");
              $query = $this->db->get();
             return $query->result();   
        }

  	public function cari_judul($kd_barang)
 	{
  		$this->db->like('kd_barang',$kd_barang);
		$query=$this->db->get('barang');
		return $query->result();
	}

		public function sum(){
		$this->db->select_sum('total');
		$this->db->from('penjualan_temp');
		 $query = $this->db->get('');
          return $query->row();

	}
		public function insert($data = array()) {
		$this->db->insert_batch('penjualan',$data);
	}
	
	public function get_data_barang_bykode($kode){
		  $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('pembelian','barang.kd_barang=pembelian.kd_barang');
            $this->db->join('ukuran','ukuran.id_ukuran=barang.id_ukuran');
             $this->db->WHERE('barang.kd_barang',$kode);
             $query = $this->db->get();
             return $query->result();   
        

}
	public function get_penjualan(){
		  $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('penjualan_temp','barang.kd_barang=penjualan_temp.kd_barang');
            // $this->db->join('ukuran','ukuran.id_ukuran=barang.id_ukuran');
             // $this->db->WHERE('barang.kd_barang',$kode);
             $query = $this->db->get();
             return $query->result();   
        

}

	// public function detail($id_penjualan){
	// 	$query = $this->db->get_where('penjualan', array ('id_penjualan'=>$id_penjualan));
	// 	return $query->row();
	// }

	public function tambah($data) {
		$this->db->insert('penjualan_temp',$data);
	}

	// public function edit ($data){
	// 	$this->db->where('id_penjualan',$data['id_penjualan']);
	// 	$this->db->update('penjualan',$data);
	// }

	// public function delete($data) {
	// 	$this->db->where('id_penjualan',$data['id_penjualan']);
	// 	$this->db->delete('penjualan',$data);
	// }
		public function delete() {
		$this->db->query('DELETE from penjualan_temp');
	}

	}
