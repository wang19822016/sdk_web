<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            支付查询
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">支付</li>
            <li class="active">详情</li>
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
                        <form role="form" action="<?php echo site_url('admin/pay/'); ?>" method="post">
                            <div class="form-group">
                                <label>查询方式</label>
                                <select class="form-control" name="type">
                                    <option value="0" <?php if ($type == 0) { echo 'selected'; }?>>SDK订单</option>
                                    <option value="1" <?php if ($type == 1) { echo 'selected'; }?>>SDK帐号ID</option>
                                    <option value="2" <?php if ($type == 2) { echo 'selected'; }?>>SDK帐号名</option>
                                    <option value="3" <?php if ($type == 3) { echo 'selected'; }?>>游戏帐号ID</option>
                                    <option value="4" <?php if ($type == 4) { echo 'selected'; }?>>谷歌订单</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">查找内容</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                            </div>

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" name="button">submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row (main row) -->

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
                                    <th>订单</th>
                                    <th>应用</th>
                                    <th>SDK帐号ID</th>
                                    <th>游戏帐号ID</th>
                                    <th>服务器ID</th>
                                    <th>商品ID</th>
                                    <th>价格</th>
                                    <th>配置单位</th>
                                    <th>实际单位</th>
                                    <th>充值渠道</th>
                                    <th>渠道订单</th>
                                    <th>充值时间</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pays as $item):?>
                                <tr>
                                    <td><?php echo $item->order; ?></td>
                                    <td><?php echo $item->app_id; ?></td>
                                    <td><?php echo $item->user_id; ?></td>
                                    <td><?php echo $item->customer_id; ?></td>
                                    <td><?php echo $item->server_id; ?></td>
                                    <td><?php echo $item->sku; ?></td>
                                    <td><?php echo $item->price; ?></td>
                                    <td><?php echo $item->currency; ?></td>
                                    <td><?php echo $item->currency_used; ?></td>
                                    <td><?php echo $item->channel_type; ?></td>
                                    <td><?php echo $item->channel_order; ?></td>
                                    <td><?php echo $item->create_time; ?></td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>订单</th>
                                    <th>应用</th>
                                    <th>SDK帐号ID</th>
                                    <th>游戏帐号ID</th>
                                    <th>服务器ID</th>
                                    <th>商品ID</th>
                                    <th>价格</th>
                                    <th>配置单位</th>
                                    <th>实际单位</th>
                                    <th>充值渠道</th>
                                    <th>渠道订单</th>
                                    <th>充值时间</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

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
