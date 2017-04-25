<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            添加花费
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">BOSS</li>
            <li class="active">花费</li>
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
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="<?php echo site_url('admin/bossupdate'); ?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="showNum">展示数</label>
                                <input type="text" class="form-control" id="showNum" name="showNum" value="<?php echo $showNum; ?>">
                            </div>
                            <div class="form-group">
                                <label for="clickNum">点击数</label>
                                <input type="text" class="form-control" id="clickNum" name="clickNum" value="<?php echo $clickNum; ?>">
                            </div>
                            <div class="form-group">
                                <label for="costMoney">花费</label>
                                <input type="text" class="form-control" id="costMoney" name="costMoney" value="<?php echo $costMoney; ?>">
                            </div>
                            <div class="form-group">
                                <label for="datepicker">日期</label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="text" class="form-control pull-right" id="datepicker" name="date" value="<?php echo $date; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>渠道</label>
                                <select class="form-control" name="channel">
                                    <option value="Fanpage" <?php if ($channel == 'Fanpage') echo 'selected'; ?>>Fanpage</option>
                                    <option value="Facebook Ads" <?php if ($channel == 'Facebook Ads') echo 'selected'; ?>>Facebook Ads</option>
                                    <option value="jjsgFanpage" <?php if ($channel == 'jjsgFanpage') echo 'selected'; ?>>jjsgFanpage</option>
                                    <option value="unityads_int" <?php if ($channel == 'unityads_int') echo 'selected'; ?>>unityads_int</option>
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

<!-- /.content-wrapper -->
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });

        <?php
            if (strlen($message) > 0) echo 'alert("' . $message . '");';
         ?>
    });
</script>
