<?php

class Sku extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAll($id) {
        $query = $this->db->get_where('sku', array('app_id' => $id));
        return $query->result();
    }

    public function get($appid, $sku) {
        $query = $this->db->get_where('sku', array('sku' => $sku, 'app_id' => $appid));
        return $query->result();
    }

    public function update($appid, $sku, $name, $price, $currency, $platform) {
        $this->db->set('name', $name);
        $this->db->set('price', $price);
        $this->db->set('currency', $currency);
        $this->db->set('platform', $platform);
        $this->db->where('sku', $sku);
        $this->db->where('app_id', $appid);
        return $this->db->update('sku');
    }

    public function insert($appid, $sku, $name, $price, $currency, $platform) {
        date_default_timezone_set("Asia/Shanghai");
        $data = array(
            'app_id' => $appid,
            'sku' => $sku,
            'name' => $name,
            'price' => $price,
            'currency' => $currency,
            'platform' => $platform,
            'create_time' => mdate('%Y-%m-%d %H::%i::%s', time())
        );

        $this->db->insert('sku', $data);
    }
}

 ?>
