  <div class="container">
  <a href="<?php echo base_url('admin/supplier/tambah')?>" class="btn btn-primary"> 
 <i class="fa fa-plus"></i> Tambah </a>  </div>

 <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?php echo $title;?></strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NAMA SUPPLIER</th>
                        <th>STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php $no=1; foreach ($supplier as $supplier ) {
                                     
                                     ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $supplier->nama_supplier ?></td>
                        <td> <a href="<?php echo base_url('admin/supplier/tambah')?>" class="btn btn-info btn-sm">  
 <i class="fa fa-edit"></i> </a>
 <a href="<?php echo base_url('admin/supplier/tambah')?>" class="btn btn-danger btn-sm">  
 <i class="fa fa-trash"></i> </a>  
</td>
                      </tr>
                   
                 
                  
                   
                     <?php $no++; } ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
