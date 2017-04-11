<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $appname; ?> 添加商品
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
                <div class="box box-primary">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="<?php echo base_url() . 'admin/skuadd/' . $appid; ?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">名称</label>
                                <input type="text" class="form-control" id="name" name="name" value="">
                            </div>
                            <div class="form-group">
                                <label for="sku">SKU</label>
                                <input type="text" class="form-control" id="sku" name="sku" value="">
                            </div>
                            <div class="form-group">
                                <label for="price">价格</label>
                                <input type="text" class="form-control" id="price" name="price" value="">
                            </div>
                            <div class="form-group">
                                <label for="currency">货币单位</label>
                                <input type="text" class="form-control" id="currency" name="currency" value="">
                            </div>
                            <div class="form-group">
                                <label>平台</label>
                                <select class="form-control" name="platform">
                                    <option value="1">Google</option>
                                    <option value="2">Apple</option>
                                    <option value="3">MyCard</option>
                                    <option value="4">PayPal</option>
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
