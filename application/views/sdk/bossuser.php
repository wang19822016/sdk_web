<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            用户
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">BOSS</li>
            <li class="active">用户</li>
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
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>日期</th>
                                    <th>安装数</th>
                                    <th>注册数</th>
                                    <th>有效数</th>
                                    <th>DAU</th>
                                    <th>DOU</th>
                                    <th>付费金额</th>
                                    <th>付费人数</th>
                                    <th>付费率</th>
                                    <th>新增用户付费金额</th>
                                    <th>新增用户付费人数</th>
                                    <th>新增用户付费率</th>
                                    <th>ARPU</th>
                                    <th>ARPPU</th>
                                    <th>次留</th>
                                    <th>3留</th>
                                    <th>7留</th>
                                    <th>30留</th>
                                    <th>平均在线人数</th>
                                    <th>平均在线时长</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $item):?>
                                <tr>
                                    <td><?php echo $item->date; ?></td>
                                    <td><?php echo $item->installNum; ?></td>
                                    <td><?php echo $item->regNum; ?></td>
                                    <td><?php echo $item->validNum; ?></td>
                                    <td><?php echo $item->dau; ?></td>
                                    <td><?php echo $item->dou; ?></td>
                                    <td><?php echo $item->payMoney; ?></td>
                                    <td><?php echo $item->payNum; ?></td>
                                    <td><?php echo $item->payRate; ?></td>
                                    <td><?php echo $item->newUserPayMoney; ?></td>
                                    <td><?php echo $item->newUserPayNum; ?></td>
                                    <td><?php echo $item->newUserPayRate; ?></td>
                                    <td><?php echo $item->arpu / 100.0; ?></td>
                                    <td><?php echo $item->arppu / 100.0; ?></td>
                                    <td><?php echo $item->remain2; ?></td>
                                    <td><?php echo $item->remain3; ?></td>
                                    <td><?php echo $item->remain7; ?></td>
                                    <td><?php echo $item->remain30; ?></td>
                                    <td><?php echo $item->avgOnlineNum; ?></td>
                                    <td><?php echo $item->avgOnlineTime; ?></td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>日期</th>
                                    <th>安装数</th>
                                    <th>注册数</th>
                                    <th>有效数</th>
                                    <th>DAU</th>
                                    <th>DOU</th>
                                    <th>付费金额</th>
                                    <th>付费人数</th>
                                    <th>付费率</th>
                                    <th>新增用户付费金额</th>
                                    <th>新增用户付费人数</th>
                                    <th>新增用户付费率</th>
                                    <th>ARPU</th>
                                    <th>ARPPU</th>
                                    <th>次留</th>
                                    <th>3留</th>
                                    <th>7留</th>
                                    <th>30留</th>
                                    <th>平均在线人数</th>
                                    <th>平均在线时长</th>
                                </tr>
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
<!-- /.content-wrapper -->
<script type="text/javascript">
    $(function() {
        $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
});
</script>
