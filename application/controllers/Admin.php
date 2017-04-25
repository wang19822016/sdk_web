<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('email');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login() {
        $this->load->model('Users', 'users');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if (!valid_email($email)) {
            echo "邮箱格式不正确";
            return;
        }

        if (!ctype_alnum($password)) {
            echo "密码只能由数字和字母组成";
            return;
        }

        $id = $this->users->getId($email, $password);
        if ($id > 0) {
            $this->session->id = $id;
            $this->session->username = $email;

            redirect('admin/channels');
        } else {
            echo "帐号名不存在，或者密码错误";
        }
    }

    public function regist() {
        if ($this->input->post('email') == NULL) {
            $this->load->view('regist');
        } else {
            $this->load->model('Users', 'users');

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if (!valid_email($email)) {
                echo "邮箱格式不正确";
                return;
            }

            if (!ctype_alnum($password)) {
                echo "密码只能由数字和字母组成";
                return;
            }

            $this->users->insert($email, $password);
            $this->load->view('login');
        }
    }

    public function channels() {
        $this->load->model('sdk/App', 'app');
        $data['apps'] = $this->app->getAll();
        $this->load->view('channel', $data);
    }
}

 ?>
