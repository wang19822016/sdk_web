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
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
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
                                <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url() . 'static/dist/img/user2-160x160.jpg'; ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $_SESSION['username']; ?>
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
                        <p><?php echo $_SESSION['username']; ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
