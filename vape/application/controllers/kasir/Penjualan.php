<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penjualan_model');
		
	}
               
	public function index()
	{
		$sum = $this->penjualan_model->sum();
		$penjualan =$this->penjualan_model->get_penjualan();
		$data = array (	'title' => 'Data penjualan',
						'sum' => $sum,
						'penjualan' => $penjualan,
						'isi' => 'kasir/penjualan/list' );
		$this->load->view('kasir/layout/wrapper',$data);
	}

	public function save()
	{
		$this->output->set_content_type('application/json');
		echo json_encode(array('check' => 'check'));
	}

	 public function get_autocomplete()
	 {
	 	$kode=$this->input->post('kode',TRUE);
	 	$query=$this->penjualan_model->cari_judul($kode);
	 	$json_array = array();
	 	foreach ($query as $row)
	 		$json_array[]=$row->kd_barang;
	 	echo json_encode($json_array);
 }

   public function get_barang() {
        $kode=$this->input->get('kd_barang');
        $data=$this->penjualan_model->get_data_barang_bykode($kode);
        foreach ($data as $row ) 
            $hasil['jenis'] = $row->jenis;
            $hasil['nama_barang'] = $row->nama_barang;
            $hasil['ukuran'] = $row->ukuran;
            $hasil['stok'] = $row->stok;
            $hasil['harga'] = $row->harga;
        echo json_encode($hasil);
    }


    public function tambah() {
    	$i = $this->input;
		$data =array ( 	'kd_barang'		=> $i->post('kd_barang'),
						'jumlah'		=> $i->post('jumlah'),
						'harga'		=> $i->post('harga'),
						'tgl_transaksi'		=> $i->post('tgl_transaksi'),
						'total'		=> $i->post('harga') * $i->post('jumlah'),
						
			);
		$this->penjualan_model->tambah($data); 
		// $this->session->set_flashdata('sukses','Data User telah ditambah');
		redirect (base_url('penjualan'));
    }
}