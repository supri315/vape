 </div><!-- /#right-panel -->
    

    <!-- Right Panel -->

    <script src="<?php echo base_url(); ?>assets/admin/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/plugins.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/main.js"></script>


    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/lib/data-table/datatables-init.js"></script>
     <script src="<?php echo base_url(); ?>assets/admin/js/jquery-ui.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
   
    <script type="text/javascript">
    $(document).ready(function () {
        $(function () {
            $( "#kd_barang" ).autocomplete({
                source: function(request, response) {
                    $.ajax({ 
                        url: "<?php echo site_url('penjualan/get_autocomplete'); ?>",
                        data: { kode: $("#kd_barang").val()},
                        dataType: "json",
                        type: "POST",
                        success: function(data){
                            response(data);
                        }    
                    });
                },
            });
        });
    });
    </script>


<!-- <script type="text/javascript">
     $(document).ready(function(){
             $('#nama1').on('input',function(){
                var nama_barang=$(this).val();
                alert(nama_barang);
                $.ajax({
                     type : "POST",
                     url  : "<?php echo base_url('auto/get_barang')?>",
                     dataType : "JSON",
                     data : {nama_barang: nama_barang},
                     cache:false,
                     success: function(data){
                         $.each(data,function(nama_barang, jenis){
                             $('[name="jenis1"]').val(data.jenis);
                         });
                     }
                 });
                 return false;
           });
         });
  </script> -->

 <script type="text/javascript">
      function auto() {
        var kd_barang = $('#kd_barang').val();
        $.ajax({
            url  : "<?php echo base_url('penjualan/get_barang')?>",
            data : "kd_barang="+kd_barang,
        }).success(function(data){
            var json = data,
            obj = JSON.parse(json);
            $('#nama_barang').val(obj.nama_barang);
            $('#ukuran').val(obj.ukuran);
            $('#harga').val(obj.harga);
            $('#stok').val(obj.stok);
        });

      }
  </script>  

<!--  -->
</body>
</html>

