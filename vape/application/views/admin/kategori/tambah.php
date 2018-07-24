<?php
echo validation_errors ('<div class="alert alert-danger">','</div');
echo form_open(base_url('kategori/tambah'));
?>
 <div class="col-lg-12">
 	<div class="card">
 		<div class="card-header">
 			<strong><?php echo $title ?></strong>
 		</div>
 		<div class="card-body card-block">
 			<div class="col-lg-6">
 				<div class="form-group ">
 					<label> Nama Kategori</label>
 					<input type="text" name="nama_kategori" class="form-control" placeholder="kode barang" value="<?php echo set_value('nama_kategori')?>">
 				</div>
 				
 				<div class="form-group form-group-lg">
 					<input type="submit" name="submit" class="btn btn-success btn-md" value="Simpan">
 					<a href="<?php echo base_url('kategori')  ?>" class="btn btn-danger btn-md" >Kembali</a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

<?php
echo form_close();
?>