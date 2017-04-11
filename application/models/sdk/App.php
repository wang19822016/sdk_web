<?php

class App extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAll() {
        $query = $this->db->get('app');
        return $query->result();
    }

    public function get($id) {
        $query = $this->db->get_where('app', array('id' => $id));
        return $query->result();
    }

    public function update($id, $url, $pay_type) {
        $this->db->set('pay_type', $pay_type);
        $this->db->set('notify_url', $url);
        $this->db->where('id', $id);
        return $this->db->update('app');
    }

    public function insert($name, $pay_type, $notify_url) {
        date_default_timezone_set("Asia/Shanghai");
        $this->db->select_max('id');
        $query = $this->db->get('app');
        $result = $query->result();
        $id = 0;
        foreach ($result as $row) {
            $id = $row->id;
            break;
        }
        $id += 1;

        $data = array(
            'id' => $id,
            'name' => $name,
            'key' => md5($name . rand()),
            'secret' => md5($name . rand()),
            'status' => 0,
            'pay_type' => $pay_type,
            'notify_url' => $notify_url,
            'create_time' => mdate('%Y-%m-%d %H::%i::%s', time())
        );

        if ($this->db->insert('app', $data)) {
            return $id;
        }

        return -1;
    }
}

 ?>
