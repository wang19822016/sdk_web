<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $name; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">应用</li>
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
                        <form role="form" action="<?php echo site_url('admin/app/' . $id); ?>" method="post">
                            <div class="form-group">
                                <label for="key">Key</label>
                                <input type="text" class="form-control" id="key" name="key" value="<?php echo $key; ?>" readonly="true">
                            </div>
                            <div class="form-group">
                                <label for="secret">Secret</label>
                                <input type="text" class="form-control" id="secret" name="secret" value="<?php echo $secret; ?>" readonly="true">
                            </div>
                            <div class="form-group">
                                <label for="notify">推送地址</label>
                                <input type="text" class="form-control" id="notify" name="notify_url" value="<?php echo $notify_url; ?>">
                            </div>
                            <div class="form-group">
                                <label>Google Key</label>
                                <textarea class="form-control" rows="3" name="google"><?php echo $google; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>充值方式</label>
                                <select class="form-control" name="pay_type">
                                    <?php if ($pay_type == 0): ?>
                                        <option value="0" selected>无</option>
                                    <?php else: ?>
                                        <option value="0">无</option>
                                    <?php endif; ?>

                                    <?php if ($pay_type == 1): ?>
                                        <option value="1" selected>Google & Apple</option>
                                    <?php else: ?>
                                        <option value="1">Google & Apple</option>
                                    <?php endif; ?>

                                    <?php if ($pay_type == 2): ?>
                                        <option value="2" selected>MyCard & Apple</option>
                                    <?php else: ?>
                                        <option value="2">MyCard & Apple</option>
                                    <?php endif; ?>

                                    <?php if ($pay_type == 3): ?>
                                        <option value="3" selected>PayPal & Apple</option>
                                    <?php else: ?>
                                        <option value="3">PayPal & Apple</option>
                                    <?php endif; ?>

                                    <?php if ($pay_type == 4): ?>
                                        <option value="4" selected>Google & MyCard & Apple</option>
                                    <?php else: ?>
                                        <option value="4">Google & MyCard & Apple</option>
                                    <?php endif; ?>

                                    <?php if ($pay_type == 5): ?>
                                        <option value="5" selected>Google & PayPal & Apple</option>
                                    <?php else: ?>
                                        <option value="5">Google & PayPal & Apple</option>
                                    <?php endif; ?>

                                    <?php if ($pay_type == 6): ?>
                                        <option value="6" selected>Google & MyCard & PayPal & Apple</option>
                                    <?php else: ?>
                                        <option value="6">Google & MyCard & PayPal & Apple</option>
                                    <?php endif; ?>
                                </select>
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

    </section>
    <!-- /.content -->
</div>
