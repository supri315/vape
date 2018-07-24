<div class="content">
  <a href="<?php echo base_url('user/tambah')?>" class="btn btn-primary">  
 <i class="fa fa-plus"></i> Tambah </a>  
 <?php 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
    }
 ?>
</div>
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
                        <th>NAMA</th>
                        <th>JENIS KELAMIN</th>
                        <th>NOMOR HP</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>LEVEL</th>
                        <th>STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php $no=1; foreach ($user as $user ) {
                                     
                                     ?>
                      <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $user->nama ?></td>
                        <td><?php echo $user->jk ?></td>
                        <td><?php echo $user->no_hp ?></td>
                        <td><?php echo $user->username ?></td>
                        <td><?php echo $user->password ?></td>
                        <td><?php echo $user->level ?></td>
                        <td> <a href="<?php echo base_url('user/edit/'.$user->id_user)?>" class="btn btn-info btn-sm">  
                          <i class="fa fa-edit"></i> </a>
                          <a href="<?php echo base_url('admin/user/tambah')?>" class="btn btn-danger btn-sm">  
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
