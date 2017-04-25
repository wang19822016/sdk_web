<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boss</title>
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
                    <li class="">
                        <a href="<?php echo site_url('boss'); ?>">
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
                    <li class="active">
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
                    渠道
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">BOSS</li>
                    <li class="active">渠道</li>
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
                                <div class="row">
                                    <div class="col-xs-2">
                                        <form role="form" action="#" method="post">
                                            <div class="form-group">
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control" id="reservation">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>日期</th>
                                            <th>渠道</th>
                                            <th>展示</th>
                                            <th>点击</th>
                                            <th>CPC</th>
                                            <th>CPM</th>
                                            <th>安装</th>
                                            <th>CPI</th>
                                            <th>有效用户</th>
                                            <th>点击率</th>
                                            <th>安装率</th>
                                            <th>注册率</th>
                                            <th>有效转化率</th>
                                            <th>ROI</th>
                                            <th>花费</th>
                                            <th>次日留存</th>
                                            <th>三日留存</th>
                                            <th>七日留存</th>
                                            <th>三十日留存</th>
                                            <th>付费金额</th>
                                            <th>付费人数</th>
                                            <th>付费率</th>
                                            <th>ARPU</th>
                                            <th>ARPPU</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_body">

                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
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

    <script type="text/javascript">
        function showLoading() {
            var html = '<div class="loading"><div class="loading_wrap"><img src="<?php echo base_url() . 'static/images/loading.gif' ?>" alt=""></div></div>';
              $("body").append(html);
        }

        function hideLoading() {
            $(".loading").remove();
        }

        function fillTableData(start, end) {
            showLoading();
            $.post('<?php echo site_url("boss/channels"); ?>',
                {
                    'appid' : <?php echo $appid; ?>,
                    'begin' : start,
                    'end' : end
                },
                function(result) {
                    hideLoading();
                    if (result) {
                        // 删除旧数据
                        $("#table_body").empty();

                        for (var i = 0; i < result.length; i++) {

                            // 拼接新数据
                            var line = '<tr>';
                            line += '<td>';
                            line += result[i].date;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].channelType;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].showNum;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].clickNum;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].cpc;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].cpm;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].installNum;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].cpi;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].validNum;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].clickRate + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].installRate + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].regRate + "%";
                            line += '</td>';

                            line += '<td>';
                            line += result[i].validRate + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].roi;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].costMoney;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].remain2 + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].remain3 + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].remain7 + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].remain30 + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].payMoney;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].payNum;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].payRate + '%';
                            line += '</td>';

                            line += '<td>';
                            line += result[i].arpu;
                            line += '</td>';

                            line += '<td>';
                            line += result[i].arppu;
                            line += '</td>';

                            line += '</tr>';
                            $("#table_body").append(line);
                        }

                    }
                }
            );
        }

        $(document).ready(
            function () {
                // 初始化数据
                var now = new Date();
                var last = new Date(now.getTime() - 30 * 24 * 60 * 60 * 1000);
                var start = last.getFullYear() + "-";
                if (last.getMonth() < 9) {
                    start += '0' + (last.getMonth() + 1) + '-';
                } else {
                    start += (last.getMonth() + 1) + '-';
                }
                if (last.getDate() < 10) {
                    start += '0' + last.getDate() + '-';
                } else {
                    start += last.getDate();
                }

                var end = now.getFullYear() + "-";
                if (now.getMonth() < 9) {
                    end += '0' + (now.getMonth() + 1) + '-';
                } else {
                    end += (now.getMonth() + 1) + '-';
                }
                if (now.getDate() < 10) {
                    end += '0' + now.getDate() + '-';
                } else {
                    end += now.getDate();
                }

                $('#reservation').daterangepicker({
                    locale: {
                        format: 'YYYY-MM-DD'
                    }
                }, function(start, end, label) {
                    fillTableData(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));
                });
                $('#reservation').data('daterangepicker').setStartDate(start);
                $('#reservation').data('daterangepicker').setEndDate(end);

                fillTableData(start, end);
            }
        );
    </script>
</body>
</html>
