<?php

class Auth {
    private $CI;

    public function __construct() {
        $this->CI = &get_instance();
    }

    public function auth() {
        $this->CI->load->helper('url');

        $urls = array('admin', 'admin/index', 'admin/login', 'admin/regist');

        if (!in_array(uri_string(), $urls))
        {
            $this->CI->load->library('session');
            if (!$this->CI->session->username) {
                redirect('admin');
            }
        }
    }
}

 ?>
