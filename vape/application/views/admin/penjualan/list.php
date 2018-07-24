
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
			<div class="col-md-9"><input type="email" id="hf-email" name="hf-email" class="form-control" disabled="disabled" placeholder="<?php echo $this->session->userdata('username')?>"> </div>
		</div>
			  <div class="row form-group">
			<div class="col-md-3"><label class=" form-control-label"><strong>Tanggal</strong></label></div>
			<div class="col-md-9"><input type="date" name="tgl_transaksi" id="tanggal" class="form-control" required="required"> </div>
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
			<div class="col-md-5"><input type="text" id="jumlah" name="jumlah" class="form-control" required="required"> </div>
			<div class="col-md-3"> <strong>stok</strong> <input type="button" name="stok" id="stok" class="btn btn-primary btn-sm" >
</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4"><label class=" form-control-label"><strong>Harga Satuan</strong></label></div>
			<div class="col-md-8"><input type="text" id="harga" name="harga" class="form-control"> </div>
		</div>
</div>

		</div>
		<div class="container">
			  <button type="submit" class="btn btn-success btn-block"><i class="menu-icon ti-shopping-cart"></i> ADD TO CART</button>

		</div>
					<?php
echo form_close();
?>
		

<br>
			
 <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th width="1%">NO</th>
                        <th width="1%">TGL TRANSAKSI</th>
                        <th width="1%">KODE BARANG</th>
                        <th width="1%">NAMA BARANG</th>
                        <th width="1%">JUMLAH</th>
                        <th width="2%">HARGA SATUAN</th>
                        <th width="1%">Total</th>                    
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
echo form_open(base_url('penjualan/gettambah')); ?>
 <?php $no=1; foreach ($penjualan as $penjualan ) { 

 	?>

                      <tr>
                        <td><input type="text" name="no" value="<?php echo $no ?>" disabled="disabled" size="1"> </td>
                        <td><input type="text" name="tgl_transaksi[]" value="<?php echo $penjualan->tgl_transaksi ?>" readonly size="14"></td>
                        <td><input type="text" name="kd_barang[]" value="<?php echo $penjualan->kd_barang ?>" readonly size="14"></td>
                        <td><input type="text" name="nama[]" value="<?php echo $penjualan->nama_barang ?>" readonly size="11"></td>
                        <td><input type="text" name="jumlah[]" value="<?php echo $penjualan->jumlah ?>" readonly size="2"></td>
                        <td><input type="text" name="harga[]" value="<?php echo $penjualan->harga ?>" readonly size="13"></td>
                        <td><input type="text" name="total[]" value="<?php echo $penjualan->total ?>" readonly size="10"></td>
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


