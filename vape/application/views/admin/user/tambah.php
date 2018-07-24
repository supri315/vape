<?php
echo validation_errors ('<div class="alert alert-danger">','</div');
echo form_open(base_url('user/tambah'));
?>
 <div class="col-lg-12">
 	<div class="card">
 		<div class="card-header">
 			<strong><?php echo $title ?></strong>
 		</div>
 		<div class="card-body card-block">
 			<div class="col-lg-6">
 				<div class="form-group ">
 					<label> Nama</label>
 					<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo set_value('nama')?>">
 				</div>
 				<div class="form-group form-group-lg">
 					<label> Jenis Kelamin</label>
 					<select class="form-control" name="jk">
 						<option value="laki-laki" name="laki-laki">Laki-laki</option>
 						<option value="perempuan" name="perempuan">Perempuan</option>
 					</select>
 				</div>
 				<div class="form-group form-group-lg">
 					<label> Nomor HP</label>
 					<input type="text" name="no_hp" class="form-control" placeholder="Nomor HP" value="<?php echo set_value('no_hp')?>">
 				</div>
 				<div class="form-group form-group-lg">
 					<label> Username</label>
 					<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username')?>">
 				</div>
 				<div class="form-group form-group-lg">
 					<label> Password</label>
 					<input type="text" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password')?>">
 				</div>
 				<div class="form-group form-group-lg">
 					<label> Level </label>
 					<select class="form-control" name="level">
 						<option value="admin" name="admin">admin</option>
 						<option value="kasir" name="kasir">kasir</option>
 					</select>
 				</div>
 				<div class="form-group form-group-lg">
 					<input type="submit" name="submit" class="btn btn-success btn-md" value="Simpan">
 					<a href="<?php echo base_url('user')  ?>" class="btn btn-danger btn-md" >Kembali</a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

<?php
echo form_close();
?>