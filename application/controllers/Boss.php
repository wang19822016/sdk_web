<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);
//date_default_timezone_set('Asia/ShangHai');
//require __DIR__.'/../libraries/PHPExcel-1.8/PHPExcel/IOFactory.php';

class Boss extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
    }

    public function index() {
        $appId = $this->input->post('id');
        //$appId = 3;
        $this->views($appId, "all");
    }

    public function views($platform, $appId, $page) {
        if ($appId && is_numeric($appId)) {
            $this->load->model('sdk/App', 'app');
            $app = $this->app->get($appId);
            $data['appid'] = $appId;
            $data['platform'] = $platform;
            $data['appname'] = $app[0]->name;
            $this->load->view('boss/' . $page, $data);
            return;
        } else {
            echo "应用不存在";
        }
    }

    public function upload() {
        $error = $_FILES["userfile"]["error"];
        $upload_ret = false;
        $targetFile = '';

        if ($error <= 0) {
            $tmpfilename = $_FILES['userfile']['tmp_name'];
            $filename = $_FILES["userfile"]["name"];
            $filetype = $_FILES["userfile"]["type"];
            $fileSizeBytes = $_FILES["userfile"]["size"];

            $allowedExts = array("csv", "xml", "xls", "xlsx");
            $temp = explode(".", $filename);
            $extension = end($temp);        // 获取文件后缀名

            if (($filetype == "application/octet-stream") && ($fileSizeBytes < 204800) && in_array($extension, $allowedExts)) {
                $uploadDir = './upload';
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777);
                }
                $targetFile = $uploadDir . '/' . $filename;
                // 将临时文件 移动到我们指定的路径，返回上传结果
                $upload_ret = move_uploaded_file($tmpfilename, $targetFile) ? true : false;
            }
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('result' => $targetFile)));

        if ($upload_ret) {
            /*
            $excelReader = PHPExcel_IOFactory::createReaderForFile($targetFile);
            $PHPExcel = $excelReader->load($targetFile);
            $PHPExcel->setActiveSheetIndex(0); // 确定读取哪个sheet
            $sheet = $PHPExcel->getActiveSheet();
            $allRow = $sheet->getHighestRow();
            $allCol = $sheet->getHighestColumn();

            $table = array();
            for ($row = 1; $row <= $allRow; $row++) {
                $rowArray = array();
                for ($col = 'A'; $col <= $allCol; $col++) {
                    $addr = $col.$row;
                    if ($col == 'A') {
                        $cell = gmdate("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($sheet->getCell($addr)->getValue()));
                        array_push($rowArray, $cell);
                    } else {
                        $cell = $sheet->getCell($addr)->getValue();
                        array_push($rowArray, $cell);
                    }
                }
                array_push($table, $rowArray);
            }*/
        }
    }

    public function all() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getAll($platform, $appId, $begin, $end)));
    }

    public function daily() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getDaily($platform, $appId, $begin, $end)));
    }

    public function channels() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getChannels($platform, $appId, $begin, $end)));
    }

    public function ltv() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getLTV($platform, $appId, $begin, $end)));
    }

    public function roi() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getROI($platform, $appId, $begin, $end)));
    }

    public function remain() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getRemain($platform, $appId, $begin, $end)));
    }

    public function pay() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getPay($platform, $appId, $begin, $end)));
    }

    public function payTop() {
        $platform = $this->input->post('platform');
        $appId = $this->input->post('appid');
        if (strcmp($platform, 'all') == 0)
        $platform = '';
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($this->getPayTop($platform, $appId)));
    }

    public function update() {
        if ($this->input->post('channel')) {
            $platform = $this->input->post('platform');
            $appId = $this->input->post('appId');
            $showNum = $this->input->post('showNum');
            $clickNum = $this->input->post('clickNum');
            $costMoney = $this->input->post('costMoney');
            $date = $this->input->post('date');
            $channel = $this->input->post('channel');
            if (strcmp($platform, 'all') == 0)
                $platform = '';

            if (!is_numeric($appId)) {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result' =>'appid')));
                return;
            }

            if (!is_numeric($showNum)) {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result' =>'shownum')));
                return;
            }

            if (!is_numeric($clickNum)) {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result' =>'clicknum')));
                return;
            }

            if (!is_numeric($costMoney)) {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result' =>'costmoney')));
                return;
            }

            $this->load->model('boss/BI', 'bi');
            if ($this->bi->update($platform, $appId, $date, $channel, $showNum, $clickNum, $costMoney)) {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result' =>'ok')));
                return;
            } else {
                $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('result' =>'db')));
                return;
            }
        }

        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('result' =>'fail')));
    }

    // 以下是内部操作
    private function getAll($platform, $appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getInstallNum($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0]->install) {
            $data['install'] = $rc[0]->install;
        } else {
            $data['install'] = 0;
        }

        $rc = $this->bi->getRegNum($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->reg) {
            $data['reg'] = $rc[0]->reg;
        } else {
            $data['reg'] = 0;
        }

        $rc = $this->bi->getValidNum($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->valid) {
            $data['valid'] = $rc[0]->valid;
        } else {
            $data['valid'] = 0;
        }

        $rc = $this->bi->getCost($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->cost) {
            $data['cost'] = $rc[0]->cost;
        } else {
            $data['cost'] = 0;
        }

        $rc = $this->bi->getPayUserCount($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->paypnumber) {
            $data['paypnumber'] = $rc[0]->paypnumber;
        } else {
            $data['paypnumber'] = 0;
        }

        $rc = $this->bi->getLiveUserNum($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->live) {
            $data['live'] = $rc[0]->live;
        } else {
            $data['live'] = 0;
        }

        $rc = $this->bi->getPayNum($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->pay) {
            $data['pay'] = $rc[0]->pay;
        } else {
            $data['pay'] = 0;
        }

        $rc = $this->bi->getPayUserNum($platform, $appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->pay_user) {
            $data['payuser'] = $rc[0]->pay_user;
        } else {
            $data['payuser'] = 0;
        }

        if ($data['live'] == 0) {
            $data['allpay'] = 0;
            $data['arpu'] = 0;
        } else {
            $data['allpay'] = sprintf("%.2f", $data['payuser'] / $data['live']);
            $data['arpu'] = sprintf("%.2f", $data['pay'] / $data['live']);
        }

        if ($data['payuser'] == 0) {
            $data['arppu'] = 0;
        } else {
            $data['arppu'] = sprintf("%.2f", $data['pay'] / $data['payuser']);
        }

        $data['appid'] = $appId;

        return $data;
    }

    private function getDaily($platform, $appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getDaily($platform, $appId, $begin, $end);

        $data = array();

        foreach ($rc as $row) {
            array_push($data, $row);
        }

        return $data;
    }

    private function getChannels($platform, $appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getChannels($platform, $appId, $begin, $end);

        $data = array();

        foreach ($rc as $row) {
            array_push($data, $row);
        }

        return $data;
    }

    private function getLTV($platform, $appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getLTV($platform, $appId, $begin, $end);

        $begin_date = date_create($begin);
        $end_date = date_create($end);


        $data = array();
        /*
        while ($begin_date <= $end_date) {
        $data[date_format($begin_date, "Y-m-d")] = array();
        for ($i=1; $i < 31; $i++) {
        $data[date_format($begin_date, "Y-m-d")][$i] = "";
    }
    date_add($begin_date, date_interval_create_from_date_string("1 days"));
}*/


foreach ($rc as $row) {
    $data[$row->date][$row->ltvDays] = $row;
}

return $data;
}

private function getROI($platform, $appId, $begin, $end) {
    $this->load->model('boss/BI', 'bi');
    $rc = $this->bi->getROI($platform, $appId, $begin, $end);

    $begin_date = date_create($begin);
    $end_date = date_create($end);

    $data = array();
    /*
    while ($begin_date <= $end_date) {
    $data[date_format($begin_date, "Y-m-d")] = array();
    for ($i=1; $i < 31; $i++) {
    $data[date_format($begin_date, "Y-m-d")][$i] = array('roiValue' => '', 'grossIncome' => '', 'cost' => '');
}
date_add($begin_date, date_interval_create_from_date_string("1 days"));
}*/

foreach ($rc as $row) {
    $data[$row->date][$row->roiDays] = $row;
}

return $data;
}

private function getRemain($platform, $appId, $begin, $end) {
    $this->load->model('boss/BI', 'bi');
    $rc = $this->bi->getRemain($platform, $appId, $begin, $end);

    $begin_date = date_create($begin);
    $end_date = date_create($end);

    $data = array();
    /*
    while ($begin_date <= $end_date) {
    $data[date_format($begin_date, "Y-m-d")] = array();
    for ($i=1; $i < 31; $i++) {
    $data[date_format($begin_date, "Y-m-d")][$i] = "";
}
date_add($begin_date, date_interval_create_from_date_string("1 days"));
}*/

foreach ($rc as $row) {
    $data[$row->date][$row->remainDays] = $row;
}

return $data;
}

private function getPay($platform, $appId, $begin, $end) {
    $this->load->model('boss/BI', 'bi');
    $rc = $this->bi->getPay($platform, $appId, $begin, $end);

    $begin_date = date_create($begin);
    $end_date = date_create($end);

    $data = array();
    /*
    while ($begin_date <= $end_date) {
    $data[date_format($begin_date, "Y-m-d")] = array();
    for ($i=1; $i < 31; $i++) {
    $data[date_format($begin_date, "Y-m-d")][$i] = array('dnu' => '', 'payNum' => '', 'payTimes' => '', 'payRate' => '');
}
date_add($begin_date, date_interval_create_from_date_string("1 days"));
}*/

foreach ($rc as $row) {
    $data[$row->date][$row->payDays] = $row;
}

return $data;
}

private function getPayTop($platform, $appId) {
    $this->load->model('boss/BI', 'bi');
    $beginDate = date('Y-m-d', time());
    $weekDate = date('Y-m-d', strtotime("-7 day"));
    $monthDate = date('Y-m-d', strtotime("-30 day"));

    $rc = $this->bi->getPayTop($platform, $appId, $beginDate, $weekDate, $monthDate);
    //$data = array("uin" => '-', "channel" => '-', 'money' => '-', 'reg' => '-', 'beginpay' => '-', 'endpay' => '-', 'online' => '-');
    $data = array();
    if ($rc && count($rc) > 0) {
        foreach ($rc as $row) {
            array_push($data, $row);
        }
    }

    return $data;
}
}

?>
