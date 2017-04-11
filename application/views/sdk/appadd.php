<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            添加应用
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
                    <form role="form" action="<?php echo site_url('admin/appadd/'); ?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">名称</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="notify">推送地址</label>
                                <input type="text" class="form-control" id="notify" name="notify_url" >
                            </div>
                            <div class="form-group">
                                <label>Google Key</label>
                                <textarea class="form-control" rows="3" name="google"></textarea>
                            </div>
                            <div class="form-group">
                                <label>充值方式</label>
                                <select class="form-control" name="pay_type">
                                    <option value="0">无</option>
                                    <option value="1">Google & Apple</option>
                                    <option value="2">MyCard & Apple</option>
                                    <option value="3">PayPal & Apple</option>
                                    <option value="4">Google & MyCard & Apple</option>
                                    <option value="5">Google & PayPal & Apple</option>
                                    <option value="6">Google & MyCard & PayPal & Apple</option>
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
