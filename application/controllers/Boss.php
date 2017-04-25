<?php

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

    public function views($appId, $page) {
        if ($appId && is_numeric($appId)) {
            $data['appid'] = $appId;
            $this->load->view('boss/' . $page, $data);
            return;
        } else {
            echo "应用不存在";
        }
    }

    public function all() {
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getAll($appId, $begin, $end)));
    }

    public function daily() {
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getDaily($appId, $begin, $end)));
    }

    public function channels() {
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getChannels($appId, $begin, $end)));
    }

    public function ltv() {
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getLTV($appId, $begin, $end)));
    }

    public function roi() {
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getROI($appId, $begin, $end)));
    }

    public function remain() {
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getRemain($appId, $begin, $end)));
    }

    public function pay() {
        $appId = $this->input->post('appid');
        $begin = $this->input->post('begin');
        $end = $this->input->post('end');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getPay($appId, $begin, $end)));
    }

    public function payTop() {
        $appId = $this->input->post('appid');
        if (!is_numeric($appId)) {
            echo "appid错误";
            return;
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->getPayTop($appId)));
    }

    public function getAll($appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getInstallNum($appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0]->install) {
            $data['install'] = $rc[0]->install;
        } else {
            $data['install'] = 0;
        }

        $rc = $this->bi->getRegNum($appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->reg) {
            $data['reg'] = $rc[0]->reg;
        } else {
            $data['reg'] = 0;
        }

        $rc = $this->bi->getValidNum($appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->valid) {
            $data['valid'] = $rc[0]->valid;
        } else {
            $data['valid'] = 0;
        }

        $rc = $this->bi->getLiveUserNum($appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->live) {
            $data['live'] = $rc[0]->live;
        } else {
            $data['live'] = 0;
        }

        $rc = $this->bi->getPayNum($appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->pay) {
            $data['pay'] = $rc[0]->pay;
        } else {
            $data['pay'] = 0;
        }

        $rc = $this->bi->getPayUserNum($appId, $begin, $end);
        if ($rc && count($rc) > 0 && $rc[0] && $rc[0]->pay_user) {
            $data['payuser'] = $rc[0]->pay_user;
        } else {
            $data['payuser'] = 0;
        }

        if ($data['live'] == 0) {
            $data['allpay'] = 0;
            $data['arpu'] = 0;
        } else {
            $data['allpay'] = sprintf("%.2f", $data['payuser'] / $data['live'] * 100);
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

    public function getDaily($appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getDaily($appId, $begin, $end);

        $data = array();

        foreach ($rc as $row) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getChannels($appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getChannels($appId, $begin, $end);

        $data = array();

        foreach ($rc as $row) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getLTV($appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getLTV($appId, $begin, $end);

        $begin_date = date_create($begin);
        $end_date = date_create($end);

        $data = array();
        while ($begin_date <= $end_date) {
            $data[date_format($begin_date, "Y-m-d")] = array();
            for ($i=1; $i < 31; $i++) {
                $data[date_format($begin_date, "Y-m-d")][$i] = "-";
            }
            date_add($begin_date, date_interval_create_from_date_string("1 days"));
        }

        foreach ($rc as $row) {
            $data[$row->date][$row->ltvDays] = $row->ltvValue;
        }

        return $data;
    }

    public function getROI($appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getROI($appId, $begin, $end);

        $begin_date = date_create($begin);
        $end_date = date_create($end);

        $data = array();
        while ($begin_date <= $end_date) {
            $data[date_format($begin_date, "Y-m-d")] = array();
            for ($i=1; $i < 31; $i++) {
                $data[date_format($begin_date, "Y-m-d")][$i] = array('id' => '-', 'date' => '-', 'roiDays' => '-', 'roiValue' => '-', 'grossIncome' => '-', 'cost' => '-');
            }
            date_add($begin_date, date_interval_create_from_date_string("1 days"));
        }

        foreach ($rc as $row) {
            $data[$row->date][$row->roiDays] = $row;
        }

        return $data;
    }

    public function getRemain($appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getRemain($appId, $begin, $end);

        $begin_date = date_create($begin);
        $end_date = date_create($end);

        $data = array();
        while ($begin_date <= $end_date) {
            $data[date_format($begin_date, "Y-m-d")] = array();
            for ($i=1; $i < 31; $i++) {
                $data[date_format($begin_date, "Y-m-d")][$i] = "-";
            }
            date_add($begin_date, date_interval_create_from_date_string("1 days"));
        }

        foreach ($rc as $row) {
            $data[$row->date][$row->remainDays] = $row->remainValue;
        }

        return $data;
    }

    public function getPay($appId, $begin, $end) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getPay($appId, $begin, $end);

        $begin_date = date_create($begin);
        $end_date = date_create($end);

        $data = array();
        while ($begin_date <= $end_date) {
            $data[date_format($begin_date, "Y-m-d")] = array();
            for ($i=1; $i < 31; $i++) {
                $data[date_format($begin_date, "Y-m-d")][$i] = array("payDays" => '-', 'dnu' => '-', 'payNum' => '-', 'payTimes' => '-', 'payRate' => '-');
            }
            date_add($begin_date, date_interval_create_from_date_string("1 days"));
        }

        foreach ($rc as $row) {
            $data[$row->date][$row->payDays] = $row;
        }

        return $data;
    }

    public function getPayTop($appId) {
        $this->load->model('boss/BI', 'bi');
        $rc = $this->bi->getPayTop($appId);

        //$data = array("uin" => '-', "channel" => '-', 'money' => '-', 'reg' => '-', 'beginpay' => '-', 'endpay' => '-', 'online' => '-');
        $data = array();
        if ($rc && count($rc) > 0) {
            foreach ($rc as $row) {
                array_push($data, $row);
            }
        }

        return $data;
    }

    public function bossupdate() {
        $showNum = '0';
        $clickNum = '0';
        $costMoney = '0';
        $channel = '';
        $date = mdate('%Y-%m-%d', time());
        $message = '';
        if ($this->input->post('channel')) {
            $showNum = $this->input->post('showNum');
            $clickNum = $this->input->post('clickNum');
            $costMoney = $this->input->post('costMoney');
            $date = $this->input->post('date');
            $channel = $this->input->post('channel');

            if (!is_numeric($showNum)) {
                echo "展示量不是数字";
                return;
            }

            if (!is_numeric($clickNum)) {
                echo "点击数不是数字";
                return;
            }

            if (!is_numeric($costMoney)) {
                echo "花费不是数字";
                return;
            }

            $this->load->model('boss/ChannelReport', 'channel');
            if ($this->channel->update($date, $channel, $showNum, $clickNum, $costMoney)) {
                $message = '更新成功';
            } else {
                $message = '更新成失败';
            }
        }

        $bar['bar'] = 6;
        $data['showNum'] = $showNum;
        $data['clickNum'] = $clickNum;
        $data['costMoney'] = $costMoney;
        $data['date'] = $date;
        $data['channel'] = $channel;
        $data['message'] = $message;
        $this->load->view('sdk/header');
        $this->load->view('sdk/sidebar', $bar);
        $this->load->view('sdk/bossupdate', $data);
        $this->load->view('sdk/footer');
    }
}

 ?>
