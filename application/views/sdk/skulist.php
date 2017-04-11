<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $appname; ?> 商品列表
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">应用</li>
            <li class="active">列表</li>
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
                        <form class="" action="<?php echo site_url('admin/skuadd/' . $appid); ?>" method="get">
                            <button class="btn btn-primary" type="submit" name="button">添加商品</button>
                        </form>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>sku</th>
                                    <th>名称</th>
                                    <th>价格</th>
                                    <th>货币单位</th>
                                    <th>创建时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($skus as $item):?>
                                <tr>
                                    <td><?php echo $item->sku; ?></td>
                                    <td><?php echo $item->name; ?></td>
                                    <td><?php echo $item->price; ?></td>
                                    <td><?php echo $item->currency; ?></td>
                                    <td><?php echo $item->create_time; ?></td>
                                    <td><a href="<?php echo site_url('admin/skuview/' . $appid . '/' . $item->sku); ?>">修改</a></td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>名称</th>
                                    <th>Key</th>
                                    <th>Secret</th>
                                    <th>创建时间</th>
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
