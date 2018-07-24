<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_model extends CI_Model {

 public function cari_judul($nama_barang)
 {
  $this->db->like('nama_barang',$nama_barang);
  $query=$this->db->get('barang');
  return $query->result();
 }

public function get_data_barang_bykode($kode){
        // $hsl=$this->db->query("SELECT * FROM barang WHERE nama_barang='$kode'");
    //     if($hsl->num_rows()>0){
    //         foreach ($hsl->result() as $data) {
    //             $hasil=array(
    //                 'nama_barang' => $data->nama_barang,
    //                 'jenis' => $data->jenis,
    //                 );
    //         }
    //     }
    //     return $hasil;
    // }

		
		  $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('ukuran','ukuran.id_ukuran=barang.id_ukuran');
             $this->db->WHERE('nama_barang',$kode);
             $query = $this->db->get();
             return $query->result();   
        

}
}