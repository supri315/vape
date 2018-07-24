<?php
echo validation_errors ('<div class="alert alert-warning">','</div');
echo form_open_multipart(base_url('kategori/edit/'.$kategori->id_kategori));
?>

<div class="col-lg-12">
 	<div class="card">
 		<div class="card-header">
 			<strong><?php echo $title ?></strong>
 		</div>
<div class="col-md-6">
   		<div class="card-body card-block">


<div class="form-group ">
<label> Nama kategori</label>
<input type="text" name="nama_kategori" class="form-control" placeholder="nama" value="<?php 
echo $kategori->nama_kategori ?>">
</div>



<div class="form-group form-group-lg">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
<!-- <input type="reset" name="reset" class="btn btn- btn-lg" value="Reset"> -->
<a href="<?php echo base_url('kategori')  ?>" class="btn btn-warning btn-lg" >Kembali</a>
</div>
</div>
</div>
</div>

<?php
echo form_close();
?>