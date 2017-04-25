<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'static/bootstrap/css/bootstrap.min.css'; ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'static/dist/css/AdminLTE.min.css'; ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'static/dist/css/skins/_all-skins.min.css'; ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'static/plugins/datatables/dataTables.bootstrap.css'; ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'static/plugins/daterangepicker/daterangepicker.css'; ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'static/plugins/datepicker/datepicker3.css'; ?>">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'static/plugins/timepicker/bootstrap-timepicker.min.css'; ?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
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
                                <img src="<?php echo base_url() . 'static/dist/img/user2-160x160.jpg'; ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->username; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url() . 'static/dist/img/user2-160x160.jpg'; ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->username; ?>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo base_url() . 'static/dist/img/user2-160x160.jpg'; ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $this->session->username; ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="treeview active">
                        <a href="#">
                            <i class="fa fa-dashboard"></i>
                            <span>应用</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?php echo site_url('sdk'); ?>"><i class="fa fa-circle-o"></i> 列表</a></li>
                            <li class=""><a href="<?php echo site_url('sdk/app/0'); ?>"><i class="fa fa-circle-o"></i> 添加</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('sdk/account'); ?>">
                            <i class="fa fa-th"></i>
                            <span>帐号查询</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('sdk/purchase'); ?>">
                            <i class="fa fa-th"></i>
                            <span>支付查询</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    添加商品&nbsp;-&nbsp;<?php echo $name; ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">应用</li>
                    <li class="active">添加</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                            </div>
                            <!-- /.box-header -->
                            <!-- /.box-header -->
                            <form role="form" action="<?php echo site_url('sdk/sku/' . $id . '/add'); ?>" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">名称</label>
                                        <input type="text" class="form-control" id="name" name="name" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="sku">SKU</label>
                                        <input type="text" class="form-control" id="sku" name="sku" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">价格</label>
                                        <input type="text" class="form-control" id="price" name="price" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="currency">货币单位</label>
                                        <input type="text" class="form-control" id="currency" name="currency" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>平台</label>
                                        <select class="form-control" name="platform">
                                            <option value="1">Google</option>
                                            <option value="2">Apple</option>
                                            <option value="3">MyCard</option>
                                            <option value="4">PayPal</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" name="button">submit</button>
                                </div>
                                <!-- /.box-header -->

                            </form>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.12
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">seastar</a>.</strong> All rights reserved.
        </footer>
        <!-- ./wrapper -->

    </div>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() . 'static/plugins/jQuery/jquery-2.2.3.min.js'; ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() . 'static/bootstrap/js/bootstrap.min.js'; ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() . 'static/plugins/datatables/jquery.dataTables.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'static/plugins/datatables/dataTables.bootstrap.min.js'; ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url() . 'static/plugins/slimScroll/jquery.slimscroll.min.js'; ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() . 'static/plugins/fastclick/fastclick.js'; ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'static/dist/js/app.min.js'; ?>"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url() . 'static/plugins/input-mask/jquery.inputmask.js'; ?>"></script>
    <script src="<?php echo base_url() . 'static/plugins/input-mask/jquery.inputmask.date.extensions.js'; ?>"></script>
    <script src="<?php echo base_url() . 'static/plugins/input-mask/jquery.inputmask.extensions.js'; ?>"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="<?php echo base_url() . 'static/plugins/daterangepicker/daterangepicker.js'; ?>"></script>
    <!-- bootstrap datepicker -->
    <script src="<?php echo base_url() . 'static/plugins/datepicker/bootstrap-datepicker.js'; ?>"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url() . 'static/plugins/colorpicker/bootstrap-colorpicker.min.js'; ?>"></script>
    <!-- bootstrap time picker -->
    <script src="<?php echo base_url() . 'static/plugins/timepicker/bootstrap-timepicker.min.js'; ?>"></script>
</body>
</html>
