
	<div class="card ">
		<div class="card-header">
			<strong>TRANSAKSI</strong>
		</div>
			<div class="col-md-4">
				
		<div class="card-body">
			<div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>KASIR</strong></label></div>
			<div class="col-md-9"><input type="email" id="hf-email" name="hf-email" class="form-control" disabled="disabled" placeholder="kasir"> </div>
		</div>
			  <div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>Tanggal</strong></label></div>
			<div class="col-md-9"><input type="email" id="hf-email" name="hf-email" class="form-control"> </div>
		</div>
		</div>
</div>

<hr>
<?php 
echo form_open(base_url('test/tambah')); ?>
<div class="card-body">
<!-- 	<div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>No</strong></label></div>
			<div class="col-md-9"><input type="email" id="no" name="hf-email" class="form-control" placeholder="kasir"> </div>
		</div> -->
			<div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>Nama Barang</strong></label></div>
			<div class="col-md-9"><input type="text" id="nama_barang" name="nama" class="form-control" placeholder="kasir"> </div>
		</div>
			  <div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>JUMLAH</strong></label></div>
			<div class="col-md-9"><input type="text" id="jumlah" name="total" class="form-control"> </div>
		</div>
	<!-- 	 <div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>STOK</strong></label></div>
			<div class="col-md-9"><input type="email" id="stok" name="hf-email" class="form-control"> </div>
		</div> -->
		<div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>Harga Satuan</strong></label></div>
			<div class="col-md-9"><input type="text" id="harga" name="jumlah" class="form-control"> </div>
		</div>

		</div>

			<div class="form-group">
				<div class="col-md-6">
 					<input type="submit" name="submit" id="add_data" class="btn btn-success btn-md" value="Tambah">
 				

 				</div>
 			</div>

 			<?php
echo form_close();
?>

 <table id="bootstrap123" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th >NO</th>
                        <th>NAMA BARANG</th>
                        <th>JUMLAH</th>
                        <th >Total</th>
                        <th >AKSI</th>
                      </tr>


                    </thead>
                    <tbody>

               
<?php 
echo form_open(base_url('test/tambah12')); ?>
 <?php $no=1; foreach ($test as $test ) { 

 	?>

                      <tr>
                        <td><input type="text" name="no" value="<?php echo $no ?>" disabled="disabled"> </td>
                        <td><input type="text" name="nama[]" value="<?php echo $test->nama ?>" readonly ></td>
                        <td><input type="text" name="jumlah[]" value="<?php echo $test->jumlah ?>" readonly></td>
                        <td><input type="text" name="total[]" value="<?php echo $test->total ?>" readonly ></td>
                         <td align="center">
                                        <a href="<?php echo base_url('test/edit/'.$test->id_test) ?>" 
                                        > <i class="fa fa-edit"></i></a>

                                  

                                        </td>
                      </tr>


                 
                  
                   
                     <?php $no++; } ?>


                 
                    </tbody>
                  </table>
	 <input type="submit" name="save" id="save" class="btn btn-success btn-md" value="simpan">
	 		<?php
echo form_close();
?>


                  <strong>TOTAL BAYAR :</strong>
                   <h4><span id="subtotal" ><?php echo $sum->total; ?></span></h4>

</div>


