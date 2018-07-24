<?php
echo validation_errors ('<div class="alert alert-warning">','</div');
echo form_open_multipart(base_url('user/edit/'.$user->id_user));
?>

<div class="col-lg-12">
 	<div class="card">
 		<div class="card-header">
 			<strong><?php echo $title ?></strong>
 		</div>
<div class="col-md-6">
   		<div class="card-body card-block">


<div class="form-group ">
<label> Nama</label>
<input type="text" name="nama" class="form-control" placeholder="nama" value="<?php 
echo $user->nama ?>">
</div>

<div class="form-group form-group-lg">
<label> Username</label>
<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user->username ?>">
</div>

<div class="form-group form-group-lg">
<label> Password</label>
<input type="text" name="password" class="form-control" placeholder="Password" value="<?php echo $user->password ?>">
</div>


<div class="form-group form-group-lg">
<label> Level </label>
<select name="level" class="form-control">
	<option value="admin" > admin </option>
	<option value="user">user</option>

</select>
</div>

<div class="form-group form-group-lg">
<input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
<!-- <input type="reset" name="reset" class="btn btn- btn-lg" value="Reset"> -->
<a href="<?php echo base_url('user')  ?>" class="btn btn-warning btn-lg" >Kembali</a>
</div>
</div>
</div>
</div>

<?php
echo form_close();
?>