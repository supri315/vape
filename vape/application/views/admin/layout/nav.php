<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url(); ?>assets/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("user"); ?>"> <i class="menu-icon ti-user"></i>User </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url("barang"); ?>"> <i class="menu-icon ti-briefcase"> </i> Barang </a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url("Kategori"); ?>"> <i class="menu-icon ti-tag"></i>Kategori </a>
                    </li>   
                    <li>
                        <a href="<?php echo base_url("supplier"); ?>"><i class="menu-icon ti-shopping-cart"></i>  Supllier </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("pembelian"); ?>"> <i class="menu-icon ti-email"></i>Pembelian </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("penjualan"); ?>"> <i class="menu-icon ti-shopping-cart"></i>Penjualan </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("test"); ?>"> <i class="menu-icon ti-email"></i>test </a>
                    </li>

                     <h3 class="menu-title">LAPORAN</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="<?php echo base_url("laporan_pembelian");?>">Pembelian</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Penjualan</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->