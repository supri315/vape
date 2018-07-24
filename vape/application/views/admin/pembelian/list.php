  <div class="container">
  <a href="<?php echo base_url('pembelian/tambah')?>" class="btn btn-primary"> 
 <i class="fa fa-plus"></i> Tambah </a>  </div>

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
                        <th>NAMA BARANG</th>
                        <th>SUPPLIER</th>
                        <th>USER</th>
                        <th>TANGGAL</th>
                        <th>JUMLAH</th>
                        <th>STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php $no=1; foreach ($pembelian as $pembelian ) {
                                     
                                     ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $pembelian->nama_barang ?></td>
                        <td><?php echo $pembelian->nama_supplier ?></td>
                        <td><?php echo $pembelian->nama ?></td>
                        <td><?php echo $pembelian->tgl_transaksi ?></td>
                        <td><?php echo $pembelian->jumlah ?></td>
                        <td> <a href="<?php echo base_url('admin/pembelian/tambah')?>" class="btn btn-info btn-sm">  
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
