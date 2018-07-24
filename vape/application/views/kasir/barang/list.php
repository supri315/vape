<div class="content">
  <a href="<?php echo base_url('barang/tambah')?>" class="btn btn-primary">  
 <i class="fa fa-plus"></i> Tambah </a>  
 <?php 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
    }
 ?>
</div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?php echo $title;?></strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>KODE BARANG</th>
                        <th>NAMA BARANG</th>
                        <th>KATEGORI</th>
                        <th>JENIS</th>
                        <th>UKURAN</th>
                        <!-- <th>SUPPLIER</th> -->
                        <!-- <th>STOK</th> -->
                        <th>STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php $no=1; foreach ($barang as $barang ) {
                                     
                                     ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $barang->kd_barang ?></td>
                        <td><?php echo $barang->nama_barang ?></td>
                        <td><?php echo $barang->nama_kategori ?></td>
                        <td><?php echo $barang->jenis ?></td>
                        <td><?php echo $barang->ukuran ?></td>
                        <!-- <td><?php echo $barang->nama_supplier ?></td> -->
                        <!-- <td><?php echo $barang->stok ?></td> -->
                        <td> <a href="<?php echo base_url('barang/edit/'.$barang->kd_barang)?>" class="btn btn-info btn-sm">  
 <i class="fa fa-edit"></i> </a>
 <a href="<?php echo base_url('admin/barang/tambah')?>" class="btn btn-danger btn-sm">  
 <i class="fa fa-trash"></i> </a>  
</td>
                      </tr>
                   
                 
                  
                   
                     <?php $no++; } ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
