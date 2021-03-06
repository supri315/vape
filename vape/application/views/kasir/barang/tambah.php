<?php
echo validation_errors ('<div class="alert alert-danger">','</div');
echo form_open(base_url('barang/tambah'));
?>
 <div class="col-lg-12">
 	<div class="card">
 		<div class="card-header">
 			<strong><?php echo $title ?></strong>
 		</div>
 		<div class="card-body card-block">
 			<div class="col-lg-6">
 				<div class="form-group ">
 					<label> kode Barang</label>
 					<input type="text" name="kd_barang" class="form-control" placeholder="kode barang" value="<?php echo set_value('kd_barang')?>">
 				</div>
 				<div class="form-group ">
 					<label> Nama Barang</label>
 					<input type="text" name="nama_barang" class="form-control" placeholder="Nama" value="<?php echo set_value('nama_barang')?>">
 				</div>

 				<div class="form-group form-group-lg">
 					<label> Kategori</label>
 					<select class="form-control" name="id_kategori">
 						<?php foreach ($kategori as $kategori ) { ?>
 						<option value="<?php echo $kategori->id_kategori ?>">
 							<?php echo $kategori->nama_kategori ?>
 							</option>
 							<?php }?>
 					</select>
 				</div>
 				<div class="form-group form-group-lg">
 					<label> Jenis </label>
 					<select class="form-control" name="jenis">
 						<option value="lokal" name="lokal">lokal</option>
 						<option value="non" name="non">Non Lokal</option>
 					</select>
 				</div>
 				<!-- <div class="form-group form-group-lg">
 					<label> Supplier</label>
 					<select class="form-control" name="id_supplier">
 						<?php foreach ($supplier as $supplier ) { ?>
 						<option value="<?php echo $supplier->id_supplier ?>">
 							<?php echo $supplier->nama_supplier ?>
 							</option>
 							<?php }?>
 					</select>
 				</div> -->
 				<div class="form-group form-group-lg">
 					<label> Ukuran</label>
 					<select class="form-control" name="id_ukuran">
 						<?php foreach ($ukuran as $ukuran ) { ?>
 						<option value="<?php echo $ukuran->id_ukuran ?>">
 							<?php echo $ukuran->ukuran ?>
 							</option>
 							<?php }?>
 					</select>
 				</div>
 				<div class="form-group form-group-lg">
 					<input type="submit" name="submit" class="btn btn-success btn-md" value="Simpan">
 					<a href="<?php echo base_url('barang')  ?>" class="btn btn-danger btn-md" >Kembali</a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

<?php
echo form_close();
?>