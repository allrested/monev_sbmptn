<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo isset($title) ? $title . ' | ' : '' ?>Aplikasi PDSS SNMPTN</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon.png" />
    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/ionicons-2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/jquery-upload-file/uploadfile.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var site_url = '<?php echo site_url() ?>';
    </script>


    <script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/plugins/morris/morris.min.js"></script> -->
    <!-- Sparkline -->
    <script src="<?php echo base_url()?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url()?>assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url()?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
    <!-- Upload File -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-upload-file/jquery.uploadfile.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

    <!-- Upload File -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-upload-file/main.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo site_url() ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SNMPTN</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b> &nbsp;PDSS SNMPTN</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url()?>assets/favicon.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">
                                    <?php echo $nama?>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url()?>assets/logo_upi75.png" class="img-circle" alt="User Image">
                                    <p>
                                    <?php echo $kode; echo " - " ;echo $nama ?>
                                       
                                        <small></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    
                                    <div class="pull-right">
                                        <a href="<?php echo base_url() ?>Welcome/Logout" class="btn btn-default btn-flat"><i class="fa fa-power-off"></i> Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    
                  
                        <li class="header">MENU</li>
                        <li class="<?php echo isset($menu_active) ? ($menu_active == 'Dashboard_humas' ? 'active' : '') : '' ?>" >
                            <a href="<?php echo site_url() ?>"><i class="fa fa-dashboard"></i> <span><?php if($this->session->userdata('logged_admin')){ echo "Dashboard Humas";}else {echo "Humas";} ?></span></a>
                        </li>
                        <?php if($this->session->userdata('logged_admin')){?>
                        <li class="<?php echo isset($menu_active) ? ($menu_active == 'Dashboard_pbt' ? 'active' : '') : '' ?>" >
                            <a href="<?php echo site_url('Dashboard_pbt') ?>"><i class="fa fa-dashboard"></i> <span> Dashboard PBT</span></a>
                        </li>
                        <li class="<?php echo isset($menu_active) ? ($menu_active == 'Dashboard_cbt' ? 'active' : '') : '' ?>" >
                            <a href="<?php echo site_url('CBT') ?>"><i class="fa fa-dashboard"></i> <span> Dashboard CBT</span></a>
                        </li>
                        <?php } ?>
                        <li class="<?php echo isset($menu_active) ? ($menu_active == 'Peserta_sbm' ? 'active' : '') : '' ?><?php echo isset($menu_active) ? ($menu_active == 'Penanggung_jawab' ? 'active' : '') : '' ?><?php echo isset($menu_active) ? ($menu_active == 'Petugas_monev' ? 'active' : '') : '' ?> treeview">
                          <a href="#">
                            <i class="fa fa-dashboard"></i> <span>PBT</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li class="<?php echo isset($menu_active) ? ($menu_active == 'Peserta_sbm' ? 'active' : '') : '' ?>"><a href="<?php echo site_url('/') ?>peserta_sbm"><i class="fa fa-circle-o"></i> Peserta SBMPTN</a></li>
                            <li class="<?php echo isset($menu_active) ? ($menu_active == 'Penanggung_jawab' ? 'active' : '') : '' ?>"><a href="<?php echo site_url('/') ?>Penanggung_jawab"><i class="fa fa-circle-o"></i> Penanggung Jawab Lokasi</a></li>
                            <li class="<?php echo isset($menu_active) ? ($menu_active == 'Petugas_monev' ? 'active' : '') : '' ?>"><a href="<?php echo site_url('/Petugas_monev') ?>"><i class="fa fa-circle-o"></i> Petugas Monev</a></li>
                          </ul>
                        </li>
                        <li class="<?php echo isset($menu_active) ? ($menu_active == 'CBT_Peserta_sbm' ? 'active' : '') : '' ?><?php echo isset($menu_active) ? ($menu_active == 'CBT_Penanggung_jawab' ? 'active' : '') : '' ?><?php echo isset($menu_active) ? ($menu_active == 'CBT_Petugas_monev' ? 'active' : '') : '' ?> treeview">
                          <a href="#">
                            <i class="fa fa-dashboard"></i> <span>CBT</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li class="<?php echo isset($menu_active) ? ($menu_active == 'CBT_Peserta_sbm' ? 'active' : '') : '' ?>"><a href="<?php echo site_url('/') ?>CBT/peserta_sbm"><i class="fa fa-circle-o"></i> Peserta SBMPTN</a></li>
                            <li class="<?php echo isset($menu_active) ? ($menu_active == 'CBT_Penanggung_jawab' ? 'active' : '') : '' ?>"><a href="<?php echo site_url('/') ?>CBT/Penanggung_jawab"><i class="fa fa-circle-o"></i> Penanggung Jawab Lokasi</a></li>
                            <li class="<?php echo isset($menu_active) ? ($menu_active == 'CBT_Petugas_monev' ? 'active' : '') : '' ?>"><a href="<?php echo site_url('CBT/Petugas_monev') ?>"><i class="fa fa-circle-o"></i> Petugas Monev</a></li>
                          </ul>
                        </li>

                        
                    
                </ul>
            </section>

            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            
            <?php $this->load->view($view);?>
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>PDSS & SNMPTN</b>
            </div>
            <strong>Copyright &copy; 2016</strong>
        </footer>
    </div>
</body>
</html>