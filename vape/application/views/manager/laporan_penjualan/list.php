 
 <?php
 echo form_open(base_url('manager/laporan_penjualan')); 
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
                        <th width="1%">NO</th>
                        <th width="3%">TANGGAL</th>
                        <th width="3%">KODE BARANG</th>
                        <th width="3%">UNIT MASUK</th>
                        <th width="3%">HARGA MASUK</th>
                        <th width="3%">JUMLAH MASUK</th>
                        <th width="3%">UNIT KELUAR</th>
                        <th width="5%">HARGA KELUAR</th>
                        <th width="3%">JUMLAH KELUAR</th>
                        <th width="1%">SALDO</th>
                        <!-- <th>SALDO</th> -->
                      </tr>
                    </thead>
                    <tbody>
                  <?php $no=1; foreach ($penjualan as $penjualan ) {
                                     
                                     ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $penjualan->tanggal ?></td>
                        <td><?php echo $penjualan->kd_barang ?></td>
                        <td><?php echo $penjualan->unit_masuk ?></td>
                        <td>Rp.<?php echo number_format($penjualan->harga_masuk) ?></td>
                        <td>Rp.<?php echo number_format($penjualan->jumlah_masuk) ?></td>
                        <td><?php echo $penjualan->unit_keluar ?></td>
                        <td>Rp.<?php echo number_format($penjualan->harga_keluar) ?></td>
                        <td>Rp.<?php echo number_format($penjualan->jumlah_keluar) ?></td>
                        <td align="center"><?php echo $penjualan->unit_saldo ?></td>
        <!--                 <td> <a href="<?php echo base_url('admin/barang/tambah')?>" class="btn btn-info btn-sm">  
 <i class="fa fa-edit"></i> </a>
 <a href="<?php echo base_url('admin/barang/tambah')?>" class="btn btn-danger btn-sm">  
 <i class="fa fa-trash"></i> </a>  
</td> -->
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
