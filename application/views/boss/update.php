<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BI</title>
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
    <link rel="stylesheet" href="<?php echo base_url() . 'static/css/loading.css'; ?>" />
</head>
<body class="hold-transition skin-blue sidebar-mini" id="loading">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>BI</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>BI</b></span>
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
                                <img src="<?php echo base_url() . 'static/images/logo.png'; ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->username; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url() . 'static/images/logo.png'; ?>" class="img-circle" alt="User Image">

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
                        <img src="<?php echo base_url() . 'static/images/logo.png'; ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $this->session->username; ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="<?php echo site_url('boss/views/' . $appid . '/all'); ?>">
                            <i class="fa fa-th"></i>
                            <span>总览</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('boss/views/' . $appid . '/daily'); ?>">
                            <i class="fa fa-th"></i>
                            <span>日报</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('boss/views/' . $appid . '/channels'); ?>">
                            <i class="fa fa-th"></i>
                            <span>渠道</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('boss/views/' . $appid . '/ltv'); ?>">
                            <i class="fa fa-th"></i>
                            <span>LTV</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('boss/views/' . $appid . '/roi'); ?>">
                            <i class="fa fa-th"></i>
                            <span>ROI</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('boss/views/' . $appid . '/remain'); ?>">
                            <i class="fa fa-th"></i>
                            <span>留存</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i>
                            <span>付费</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="<?php echo site_url('boss/views/' . $appid . '/pay2'); ?>"><i class="fa fa-circle-o"></i> 付费人数</a></li>
                            <li class=""><a href="<?php echo site_url('boss/views/' . $appid . '/pay3'); ?>"><i class="fa fa-circle-o"></i> 付费率</a></li>
                            <li class=""><a href="<?php echo site_url('boss/views/' . $appid . '/pay4'); ?>"><i class="fa fa-circle-o"></i> 付费人次</a></li>
                            <li class=""><a href="<?php echo site_url('boss/views/' . $appid . '/pay5'); ?>"><i class="fa fa-circle-o"></i> 鲸鱼用户</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="<?php echo site_url('boss/views/' . $appid . '/update'); ?>">
                            <i class="fa fa-th"></i>
                            <span>添加</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    添加渠道数据
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">BI</li>
                    <li class="active"> 渠道数据</li>
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
                        <div class="box box-info">
                            <div class="box-header">

                            </div>
                            <!-- /.box-header -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="showNum">展示数</label>
                                        <input type="text" class="form-control" id="showNum" name="showNum" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="clickNum">点击数</label>
                                        <input type="text" class="form-control" id="clickNum" name="clickNum" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="costMoney">花费</label>
                                        <input type="text" class="form-control" id="costMoney" name="costMoney" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker">日期</label>
                                        <div class="input-group date">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" class="form-control pull-right" id="datepicker" name="date" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>渠道</label>
                                        <select class="form-control" name="channel" id="channel">
                                            <option value="Fanpage">Fanpage</option>
                                            <option value="Facebook Ads">Facebook Ads</option>
                                            <option value="jjsgFanpage">jjsgFanpage</option>
                                            <option value="unityads_int">unityads_int</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary" name="button" id="submitbtn">submit</button>
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
            <strong>Copyright &copy; 2014-2017 <a href="http://almsaeedstudio.com">seastar</a>.</strong> All rights reserved.
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

    <script type="text/javascript">
        function showLoading() {
            var html = '<div class="loading"><div class="loading_wrap"><img src="<?php echo base_url() . 'static/images/loading.gif' ?>" alt=""></div></div>';
              $("body").append(html);
        }

        function hideLoading() {
            $(".loading").remove();
        }

        $(document).ready(
            function () {
                var now = new Date();
                var start = now.getFullYear() + "-";
                if (now.getMonth() < 9) {
                    start += '0' + (now.getMonth() + 1) + '-';
                } else {
                    start += (now.getMonth() + 1) + '-';
                }
                if (now.getDate() < 10) {
                    start += '0' + now.getDate() + '-';
                } else {
                    start += now.getDate();
                }

                $( "#datepicker" ).datepicker({
                    format: 'yyyy-mm-dd'
                });

                $("#submitbtn").click(function() {
                    if ($("#showNum").val() == "" || $("#showNum").val() == null) {
                        alert("请填写展示数");
                        return;
                    }

                    if ($("#clickNum").val() == "" || $("#clickNum").val() == null) {
                        alert("请填写点击数");
                        return;
                    }

                    if ($("#costMoney").val() == "" || $("#costMoney").val() == null) {
                        alert("请填写花费");
                        return;
                    }

                    if ($("#datepicker").val() == "" || $("#datepicker").val() == null) {
                        alert("请填写日期");
                        return;
                    }

                    showLoading();
                    $.ajax({
                        url : '<?php echo site_url("boss/update"); ?>',
                        timeout: 5000,
                        type: 'POST',
                        async: true,
                        data: {
                            appId: <?php echo $appid; ?>,
                            showNum: $("#showNum").val(),
                            clickNum: $("#clickNum").val(),
                            costMoney: $("#costMoney").val(),
                            date: $("#datepicker").val(),
                            channel: $("#channel").val()
                        },
                        dataType: 'text json',
                        success:function(result) {
                            hideLoading();
                            if (result.result == 'ok') {
                                alert("提交成功");
                            } else {
                                alert("提交失败");
                            }
                        },
                        complete: function(XHR, status) {
                            if (status == 'timeout') {
                                alert("提交失败");
                            }

                            hideLoading();
                        },
                        error: function(XHR) {
                        }
                    });
                });
            }
        );
    </script>
</body>
</html>
