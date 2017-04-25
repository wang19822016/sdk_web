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
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>日期</th>
                                    <th>渠道</th>
                                    <th>展示数</th>
                                    <th>点击数</th>
                                    <th>CPC</th>
                                    <th>CPM</th>
                                    <th>安装数</th>
                                    <th>CPI</th>
                                    <th>有效数</th>
                                    <th>点击率</th>
                                    <th>安装率</th>
                                    <th>注册率</th>
                                    <th>有效转化率</th>
                                    <th>ROI</th>
                                    <th>累计收入</th>
                                    <th>花费</th>
                                    <th>次留</th>
                                    <th>3留</th>
                                    <th>7留</th>
                                    <th>30留</th>
                                    <th>付费金额</th>
                                    <th>付费人数</th>
                                    <th>付费率</th>
                                    <th>ARPU</th>
                                    <th>ARPPU</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($channels as $item):?>
                                <tr>
                                    <td><?php echo $item->date; ?></td>
                                    <td><?php echo $item->channelType; ?></td>
                                    <td><?php echo $item->showNum; ?></td>
                                    <td><?php echo $item->clickNum; ?></td>
                                    <td><?php echo $item->cpc; ?></td>
                                    <td><?php echo $item->cpm; ?></td>
                                    <td><?php echo $item->installNum; ?></td>
                                    <td><?php echo $item->cpi; ?></td>
                                    <td><?php echo $item->validNum; ?></td>
                                    <td><?php echo $item->clickRate; ?></td>
                                    <td><?php echo $item->installRate; ?></td>
                                    <td><?php echo $item->regRate; ?></td>
                                    <td><?php echo $item->validRate; ?></td>
                                    <td><?php echo $item->roi; ?></td>
                                    <td><?php echo $item->grossIncome; ?></td>
                                    <td><?php echo $item->costMoney; ?></td>
                                    <td><?php echo $item->remain2; ?></td>
                                    <td><?php echo $item->remain3; ?></td>
                                    <td><?php echo $item->remain7; ?></td>
                                    <td><?php echo $item->remain30; ?></td>
                                    <td><?php echo $item->payMoney; ?></td>
                                    <td><?php echo $item->payNum; ?></td>
                                    <td><?php echo $item->payRate; ?></td>
                                    <td><?php echo $item->arpu; ?></td>
                                    <td><?php echo $item->arppu; ?></td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>渠道</th>
                                    <th>展示数</th>
                                    <th>点击数</th>
                                    <th>CPC</th>
                                    <th>CPM</th>
                                    <th>安装数</th>
                                    <th>CPI</th>
                                    <th>有效数</th>
                                    <th>点击率</th>
                                    <th>安装率</th>
                                    <th>注册率</th>
                                    <th>有效转化率</th>
                                    <th>ROI</th>
                                    <th>累计收入</th>
                                    <th>花费</th>
                                    <th>次留</th>
                                    <th>3留</th>
                                    <th>7留</th>
                                    <th>30留</th>
                                    <th>付费金额</th>
                                    <th>付费人数</th>
                                    <th>付费率</th>
                                    <th>ARPU</th>
                                    <th>ARPPU</th>
                                    <th>日期</th>
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
