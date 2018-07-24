<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="navbar-brand">
                    <img src="<?php echo base_url(); ?>assets/images/a.png" >
                </div>
               
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

               
                 <!--    <li>
                        <a href="<?php echo base_url("user"); ?>"> <i class="menu-icon ti-email"></i>User </a>
                    </li> -->
                     <li>
                        <a href="<?php echo base_url("kasir/barang"); ?>"> <i class="menu-icon ti-email"></i>Barang </a>
                    </li> 
                   <!--  <li>
                        <a href="<?php echo base_url("Kategori"); ?>"> <i class="menu-icon ti-email"></i>Kategori </a>
                    </li>   
                    <li>
                        <a href="<?php echo base_url("supplier"); ?>"> <i class="menu-icon ti-email"></i>Supllier </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("pembelian"); ?>"> <i class="menu-icon ti-email"></i>Pembelian </a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url("kasir/penjualan"); ?>"> <i class="menu-icon ti-email"></i>Penjualan </a>
                    </li>
                <!--     <li>
                        <a href="<?php echo base_url("test"); ?>"> <i class="menu-icon ti-email"></i>test </a>
                    </li> -->

                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->