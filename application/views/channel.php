<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>入口</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body class="hold-transition skin-blue">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success" style="margin-top: 50px">
                    <div class="panel-heading"><h1>选择入口</h1></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h3>应用管理</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p><a href="<?php echo site_url('sdk'); ?>"><strong>SDK</strong></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <h3>BI</h3>
                            </div>
                        </div>

                        <?php foreach ($apps as $item_array):?>
                            <div class="row">
                            <?php foreach ($item_array as $item):?>
                                <div class="col-md-3">
                                    <p><a href="<?php echo site_url('boss/views/' . $item->id . '/all'); ?>"><strong><?php echo $item->name; ?></strong></a></p>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>

                        <div class="row">
                            <div class="col-md-3">
                                <p></p>
                            </div>
                            <div class="col-md-3">
                                <p></p>
                            </div>
                            <div class="col-md-3">
                                <p></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <p></p>
                            </div>
                            <div class="col-md-3">
                                <p></p>
                            </div>
                            <div class="col-md-3">
                                <p></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <p></p>
                            </div>
                            <div class="col-md-3">
                                <p></p>
                            </div>
                            <div class="col-md-3">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
