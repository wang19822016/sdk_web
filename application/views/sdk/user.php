<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            帐号查询
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">账号</li>
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
                        <form role="form" action="<?php echo site_url('admin/user/'); ?>" method="post">
                            <div class="form-group">
                                <label>帐号方式</label>
                                <select class="form-control" name="type">
                                    <option value="0"  <?php if ($type == 0) { echo 'selected'; }?>>帐号ID</option>
                                    <option value="1" <?php if ($type == 0) { echo 'selected'; }?>>帐号名</option>
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
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>创建时间</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $item):?>
                                <tr>
                                    <td><?php echo $item->id; ?></td>
                                    <td><?php echo $item->name; ?></td>
                                    <td><?php echo $item->email; ?></td>
                                    <td><?php echo $item->create_time; ?></td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>Email</th>
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
