<?php
class Auto extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Auto_model');
    }
 
    public function index(){
        // $user =$this->user_model->listing();
        $data = array ( 'title' => 'Data User',
                        'isi' => 'admin/auto/list' );
        $this->load->view('admin/layout/wrapper',$data);
    }
 
    public function get_autocomplete(){
         $kode=$this->input->post('kode',TRUE);

            $query=$this->Auto_model->cari_judul($kode);
            $json_array = array();
              foreach ($query as $row)
            $json_array[]=$row->nama_barang;
             echo json_encode($json_array);
 }

  public function get_barang() {
        $kode=$this->input->get('nama_barang');
        $data=$this->Auto_model->get_data_barang_bykode($kode);
        foreach ($data as $row ) 
            $hasil['jenis'] = $row->jenis;
            $hasil['nama_barang'] = $row->nama_barang;
            $hasil['ukuran'] = $row->ukuran;
        echo json_encode($hasil);
    }

 
}
 

