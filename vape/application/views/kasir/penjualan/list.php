
	<div class="card ">
		<div class="card-header">
			<strong>TRANSAKSI</strong>
		</div>
			<div class="col-md-4">
			<?php 
echo form_open(base_url('penjualan/tambah')); ?>	
		<div class="card-body">
			<div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>KASIR</strong></label></div>
			<div class="col-md-9"><input type="email" id="hf-email" name="hf-email" class="form-control" disabled="disabled" placeholder="kasir"> </div>
		</div>
			  <div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>Tanggal</strong></label></div>
			<div class="col-md-9"><input type="date" name="tgl_transaksi" class="form-control"> </div>
		</div>
		</div>
</div>

<hr>

<div class="card-body">
<div class="col-md-6">
<div class="card-body">
	<div class="row form-group">
			<div class="col-md-4"><label class=" form-control-label"><strong>Kode Barang</strong></label></div>
			<div class="col-md-8"><input type="text" id="kd_barang" name="kd_barang" class="form-control" onkeyup="auto()"> </div>
		</div>
			<div class="row form-group">
			<div class="col-md-4"><label class=" form-control-label"><strong>Nama Barang</strong></label></div>
			<div class="col-md-8"><input type="text" id="nama_barang" name="nama_barang" class="form-control" > </div>
		</div>
		<div class="row form-group">
			<div class="col-md-4"><label class=" form-control-label"><strong>Ukuran</strong></label></div>
			<div class="col-md-8"><input type="text" id="ukuran" name="ukuran" class="form-control"> </div>
		</div>
			  <div class="row form-group">
			<div class="col-md-4"><label class=" form-control-label"><strong>JUMLAH</strong></label></div>
			<div class="col-md-5"><input type="text" id="jumlah" name="jumlah" class="form-control"> </div>
			<div class="col-md-3"> <strong>stok</strong> <input type="button" name="stok" id="stok" class="btn btn-primary btn-sm" >
</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4"><label class=" form-control-label"><strong>Harga Satuan</strong></label></div>
			<div class="col-md-8"><input type="text" id="harga" name="harga" class="form-control"> </div>
		</div>
</div>
<div class="form-group">
				<div class="col-md-8">
 					<input type="submit" name="add_data" id="add_data" class="btn btn-success btn-md" value="Tambah">
				</div>
 				
 			</div>
		</div>
					<?php
echo form_close();
?>
		
		
		<br>
		<br>

			
 <table id="bootstrap123" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th id="no">NO</th>
                        <th>NAMA BARANG</th>
                        <th>JUMLAH</th>
                        <th>HARGA SATUAN</th>
                        <th >Total</th>
                  
                      
                    
                      
                      </tr>

                    </thead>
                    <tbody>
                     <?php 
echo form_open(base_url('test/tambah12')); ?>
 <?php $no=1; foreach ($penjualan as $penjualan ) { 

 	?>

                      <tr>
                        <td><input type="text" name="no" value="<?php echo $no ?>" disabled="disabled"> </td>
                        <td><input type="text" name="nama[]" value="<?php echo $penjualan->nama_barang ?>" readonly ></td>
                        <td><input type="text" name="jumlah[]" value="<?php echo $penjualan->jumlah ?>" readonly></td>
                        <td><input type="text" name="total[]" value="<?php echo $penjualan->harga ?>" readonly ></td>
                        <td><input type="text" name="total[]" value="<?php echo $penjualan->total ?>" readonly ></td>
                        
                       
                       
                        <!--  <td align="center">
                                        <a href="<?php echo base_url('penjualan/edit/'.$penjualan->id_test) ?>" 
                                        > <i class="fa fa-edit"></i></a>

                                  

                                        </td> -->
                      </tr>


                 
                   
                     <?php $no++; } ?>


                 
                    </tbody>
                  </table>

	 <input type="submit" name="save" id="save" class="btn btn-success btn-md" value="simpan">
	 		<?php
echo form_close();
?>
<br>
                  <strong>TOTAL BAYAR :</strong>
                            <h4><span id="subtotal" ><?php echo $sum->total; ?></span></h4>

</div>
