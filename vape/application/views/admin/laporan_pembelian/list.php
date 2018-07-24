 
 <?php
 echo form_open(base_url('laporan_pembelian')); 
 ?>
 <div class="content mt-3"><!--  	 					<input type="date" name="nama" class="form-control" placeholder="Nama" value=" supriyanto">

 -->
 <div class="col-md-12">
 <div class="form-group">
 	<div class="col-md-2">
 <Label><b> PILIH TANGGAL : </b></Label>
</div>
<div class="col-md-3">

 <input type="date" name="tanggal1" class="form-control" value="<?php echo $tanggal1 ?>"> 
</div>
<div class="col-md-3">
 <input type="date" name="tanggal2" class="form-control" value="<?php echo $tanggal2 ?>"> 
</div>
<div class="col-md-2">
<input type="submit" name="submit" class="btn btn-primary btn-md" value="submit"> 
</div>
</div>
</div>
</div>

<?php
echo form_close();
?>

<br><br><br>
 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?php echo $title;?></strong>
                        </div>
                        <div class="card-body">
                  <table id="boot" class="table table-striped table-bordered">
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
                        <td> <a href="<?php echo base_url('admin/barang/tambah')?>" class="btn btn-info btn-sm">  
 <i class="fa fa-edit"></i> </a>
 <a href="<?php echo base_url('admin/barang/tambah')?>" class="btn btn-danger btn-sm">  
 <i class="fa fa-trash"></i> </a>  
</td>
                      </tr>
                     <?php $no++; } ?>
                    </tbody>
                  </table>

                        </div>

                        <a href="<?php echo base_url('pdf') ?>" class="btn btn-primary btn-md" target=_blank> <i class="fa fa-print"> CETAK </i> </a>

                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
