<?php
echo validation_errors ('<div class="alert alert-danger">','</div');
echo form_open(base_url('pembelian/tambah'));
?>
 <div class="col-lg-12">
 	<div class="card">
 		<div class="card-header">
 			<strong><?php echo $title ?></strong>
 		</div>
 		<div class="card-body card-block">
 			<div class="col-lg-6">
 				<div class="form-group ">
 					<label> Tanggal</label>
 					<input type="date" name="tgl_transaksi" class="form-control" value="<?php echo set_value('tgl_transaksi')?>">
 				</div>

 				<div class="form-group form-group-lg">
 					<label> Nama Barang</label>
 					<select class="form-control" name="kd_barang">
 						<?php foreach ($barang as $barang ) { ?>
 						<option value="<?php echo $barang->kd_barang ?>">
 							<?php echo $barang->nama_barang ?>
 							</option>
 							<?php }?>
 					</select>
 				</div>
 			
 				 <div class="form-group form-group-lg">
 					<label> Supplier</label>
 					<select class="form-control" name="id_supplier">
 						<?php foreach ($supplier as $supplier ) { ?>
 						<option value="<?php echo $supplier->id_supplier ?>">
 							<?php echo $supplier->nama_supplier ?>
 							</option>
 							<?php }?>
 					</select>
 				</div>
 				<div class="form-group ">
 					<label> Jumlah </label>
 					<input type="text" name="jumlah" class="form-control" value="<?php echo set_value('jumlah')?>">
 				</div>
 					<div class="form-group ">
 					<label> harga </label>
 					<input type="text" name="harga" class="form-control" value="<?php echo set_value('harga')?>">
 				</div>
 			
 				<div class="form-group form-group-lg">
 					<input type="submit" name="submit" class="btn btn-success btn-md" value="Simpan">
 					<a href="<?php echo base_url('pembelian')  ?>" class="btn btn-danger btn-md" >Kembali</a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

<?php
echo form_close();
?>