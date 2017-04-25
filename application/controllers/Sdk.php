<?php
/*
spl_autoload_register( function ($class) {
    $file = __DIR__ . '../libraries/predis-1.1.1/' . $class . '.php';
    if (file_exists($file)) {
        require $file;
        return true;
    }
});*/

require __DIR__.'/../libraries/predis-1.1.1/autoload.php';

class Sdk extends CI_Controller {
    private $sidebar = array('app_list' => 0, 'app_add' => 1, 'user' => 2, 'pay' => 3);

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
    }

    public function index() {
        $this->load->model('sdk/App', 'app');
        $data['apps'] = $this->app->getAll();
        $this->load->view('sdk/app_list', $data);
    }

    public function app($id) {
        $this->load->model('sdk/App', 'app');
        $this->load->model('sdk/AppGoogle', 'google');
        if ($id == 0) {
            if (!$this->input->post('name')) {
                $this->load->view('sdk/app_add');
            } else {
                $name = $this->input->post('name');
                $notify_url = $this->input->post('notify_url');
                $google = $this->input->post('google');
                $pay_type = $this->input->post('pay_type');

                // 包含空格、（、）、;的都拒绝
                if (strpos($name, ' ') > 0 || strpos($name, '(') > 0 || strpos($name, ')') > 0 || strpos($name, ';') > 0 || strpos($name, ',') > 0 || strpos($name, '`') > 0) {
                    echo "'名称不能包含'空格、(、)、;'";
                    return;
                }

                if (strlen($notify_url) > 0) {
                    if (!preg_match('/http:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is', $notify_url) &&
                    !preg_match('/https:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is', $notify_url)) {
                        echo "推送地址格式错误";
                        return;
                    }
                }

                if (strlen($google) > 0) {
                    if (!preg_match('/^[A-Za-z\+0-9\/]+$/', $google)) {
                        echo "google key只能包含'A-Z a-z 0-9 /'这些字符";
                        return;
                    }
                }

                if (!is_numeric($pay_type)) {
                    echo "支付方式必须是数字";
                    return;
                }

                $id = $this->app->insert($name, $pay_type, $notify_url);
                if ($id >= 0) {
                    $this->google->insert($id, $google);
                }

                redirect('sdk');
            }
        } else {
            if ($this->input->post('pay_type') == NULL) {
                if (!is_numeric($id)) {
                    echo "id错误";
                    return;
                }

                $result = $this->app->get($id);
                $data['app'] = $result[0];
                $googleRes = $this->google->get($id);

                if (count($googleRes) > 0) {
                    $data['google'] = $googleRes[0]->key;
                } else {
                    $data['google'] = "";
                }

                $this->load->view('sdk/app_details', $data);
            } else {
                $pay_type = $this->input->post('pay_type');
                $notify_url = $this->input->post('notify_url');
                $google = $this->input->post('google');
                if (!is_numeric($pay_type)) {
                    echo "支付类型不是数字";
                    return;
                }

                if (strlen($notify_url) > 0) {
                    if (!preg_match('/http:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is', $notify_url) &&
                    !preg_match('/https:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is', $notify_url)) {
                        echo "推送地址格式不正确";
                        return;
                    }
                }

                if (strlen($google) > 0) {
                    if (!preg_match('/^[A-Za-z\+0-9\/]+$/', $google)) {
                        echo "google key只能包含'A-Z a-z 0-9 /'这些字符";
                        return;
                    }
                }

                if ($this->app->update($id, $notify_url, $pay_type)) {
                    if ($this->google->update($id, $google)) {
                        $result = $this->app->get($id);
                        $appGoogle = $this->app->get($id);
                        $redis = new Predis\Client(array(
                            'scheme' => 'tcp',
                            'host' => '127.0.0.1',
                            'port' => 6379,
                            'database' => 1
                        ));
                        $redis->setex('app_' . $id, 30 * 24 * 60 * 60, json_encode($result[0]));
                        $redis->setex('app_google_' . $id, 30 * 24 * 60 * 60, json_encode($appGoogle[0]));
                    }
                }

                redirect('sdk');
            }
        }
    }

    public function skus($id) {
        $this->load->model('sdk/App', 'app');
        $this->load->model('sdk/Sku', 'sku');

        if (!is_numeric($id)) {
            echo "id错误";
            return;
        }

        $result = $this->sku->getAll($id);
        $app = $this->app->get($id);

        $data['id'] = $id;
        $data['name'] = $app[0]->name;
        $data['skus'] = $result;

        $this->load->view('sdk/sku_list', $data);
    }

    public function sku($id, $sku) {
        $this->load->model('sdk/Sku', 'sku');
        $this->load->model('sdk/App', 'app');

        if ($sku == 'add') {
            if (!is_numeric($id)) {
                echo "appid错误";
                return;
            }

            if (!$this->input->post('name')) {
                $app = $this->app->get($id);

                $data['name'] = $app[0]->name;
                $data['id'] = $id;

                $this->load->view('sdk/sku_add', $data);
            } else {
                $name = $this->input->post('name');
                $sku = $this->input->post('sku');
                $price = $this->input->post('price');
                $currency = $this->input->post('currency');
                $platform = $this->input->post('platform');

                // 包含空格、（、）、;的都拒绝
                if (strpos($name, ' ') > 0 || strpos($name, '(') > 0 || strpos($name, ')') > 0 || strpos($name, ';') > 0 || strpos($name, ',') > 0 || strpos($name, '`') > 0) {
                    echo "name error";
                    return;
                }

                if (!preg_match('/^[A-Za-z0-9-_\.]+$/', $sku)) {
                    echo "sku error";
                    return;
                }

                if (!is_numeric($price)) {
                    echo "price error";
                    return;
                }

                if (!preg_match('/^[A-Z]{3}$/', $currency)) {
                    echo "currency error";
                    return;
                }

                if (!is_numeric($platform)) {
                    echo "platform error";
                    return;
                }

                $this->sku->insert($id, $sku, $name, $price, $currency, $platform);
                redirect('sdk/skus/' . $id, 'get');
            }
        } else {
            if (strpos($sku, ' ') > 0 || strpos($sku, '(') > 0 || strpos($sku, ')') > 0 || strpos($sku, ';') > 0 || strpos($sku, ',') > 0 || strpos($sku, '`') > 0) {
                echo "sku错误";
                return;
            }

            if (!is_numeric($id)) {
                echo "appid 错误";
                return;
            }

            if (!$this->input->post('price')) {
                $result = $this->sku->get($id, $sku);
                $app = $this->app->get($id);

                $data['id'] = $id;
                $data['name'] = $app[0]->name;
                $data['sku'] = $result[0];

                $this->load->view('sdk/sku_details', $data);
            } else {
                $name = $this->input->post('name');
                $price = $this->input->post('price');
                $currency = $this->input->post('currency');
                $platform = $this->input->post('platform');

                // 包含空格、（、）、;的都拒绝
                if (strpos($name, ' ') > 0 || strpos($name, '(') > 0 || strpos($name, ')') > 0 || strpos($name, ';') > 0 || strpos($name, ',') > 0 || strpos($name, '`') > 0) {
                    echo "name error";
                    return;
                }

                if (!is_numeric($price)) {
                    echo "price error";
                    return;
                }

                if (!preg_match('/^[A-Z]{3}$/', $currency)) {
                    echo "currency error";
                    return;
                }

                if (!is_numeric($platform)) {
                    echo "platform error";
                    return;
                }

                if ($this->sku->update($id, $sku, $name, $price, $currency, $platform)) {
                    $result = $this->sku->get($id, $sku);
                    $redis = new Predis\Client(array(
                        'scheme' => 'tcp',
                        'host' => '127.0.0.1',
                        'port' => 6379,
                        'database' => 1
                    ));
                    $redis->setex('sku_' . $id . $sku, 30 * 24 * 60 * 60, json_encode($result[0]));
                }
                redirect('sdk/skus/' . $id, 'get');
            }
        }
    }

    public function account() {
        $result = array();
        $name = "";
        $type = 0;
        if ($this->input->post('name')) {
            $type = $this->input->post('type');
            $name = $this->input->post('name');

            if (strpos($name, ' ') > 0 || strpos($name, '(') > 0 || strpos($name, ')') > 0 || strpos($name, ';') > 0 || strpos($name, ',') > 0 || strpos($name, '`') > 0) {
                echo "输入内容 error";
                return;
            }

            $this->load->model('sdk/UserBase', 'userbase');

            if ($type == 0) {
                $result = $this->userbase->get($name);
            } else {
                $result = $this->userbase->getByName($name);
            }
        }

        $data['name'] = $name;
        $data['type'] = $type;
        $data['accounts'] = $result;

        $this->load->view('sdk/account', $data);
    }

    public function purchase() {
        $result = array();
        $name = "";
        $type = 0;
        if ($this->input->post('name')) {
            $type = $this->input->post('type');
            $name = $this->input->post('name');

            if (strpos($name, ' ') > 0 || strpos($name, '(') > 0 || strpos($name, ')') > 0 || strpos($name, ';') > 0 || strpos($name, ',') > 0 || strpos($name, '`') > 0) {
                echo "输入内容 error";
                return;
            }

            $this->load->model('sdk/PayInfo', 'pay');

            if ($type == 0) {
                $result = $this->pay->get($name);
            } else if ($type == 1) {
                $result = $this->pay->getByUserId($name);
            } else if ($type == 2) {
                $this->load->model('sdk/UserBase', 'userbase');
                $result = $this->userbase->getByName($name);
                if (count($result) > 0) {
                    $result = $this->pay->getByUserId($result[0]->id);
                } else {
                    $reslt = array();
                }
            } else if ($type == 3) {
                $result = $this->pay->getByCustomerId($name);
            } else {
                $result = $this->pay->getByChannel(1, $name);
            }
        }

        $data['name'] = $name;
        $data['type'] = $type;
        $data['purchases'] = $result;

        $this->load->view('sdk/purchase', $data);
    }
}


?>
