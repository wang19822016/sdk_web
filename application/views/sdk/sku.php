<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $appname; ?> 修改商品 <?php echo $sku; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">应用</li>
            <li class="active">添加</li>
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
                    <form role="form" action="<?php echo site_url('admin/skuview/' . $appid . '/' . $sku); ?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">名称</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                            </div>
                            <div class="form-group">
                                <label for="price">价格</label>
                                <input type="text" class="form-control" id="price" name="price" value="<?php echo $price ?>">
                            </div>
                            <div class="form-group">
                                <label for="currency">货币单位</label>
                                <input type="text" class="form-control" id="currency" name="currency" value="<?php echo $currency ?>">
                            </div>
                            <div class="form-group">
                                <label>平台</label>
                                <select class="form-control" name="platform">
                                    <?php if ($platform == 1): ?>
                                        <option value="1" selected>Google</option>
                                    <?php else: ?>
                                        <option value="1">Google</option>
                                    <?php endif; ?>

                                    <?php if ($platform == 2): ?>
                                        <option value="2" selected>Apple</option>
                                    <?php else: ?>
                                        <option value="2">Apple</option>
                                    <?php endif; ?>

                                    <?php if ($platform == 3): ?>
                                        <option value="3" selected>MyCard</option>
                                    <?php else: ?>
                                        <option value="3">MyCard</option>
                                    <?php endif; ?>

                                    <?php if ($platform == 4): ?>
                                        <option value="4" selected>PayPal</option>
                                    <?php else: ?>
                                        <option value="4">PayPal</option>
                                    <?php endif; ?>
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
