<?php

class PayInfo extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($order) {
        $query = $this->db->get_where('pay_info', array('order' => $order));
        return $query->result();
    }

    public function getByUserId($id) {
        $query = $this->db->get_where('pay_info', array('user_id' => $id));
        return $query->result();
    }

    public function getByCustomerId($id) {
        $query = $this->db->get_where('pay_info', array('customer_id' => $id));
        return $query->result();
    }

    public function getByChannel($channel, $channel_order) {
        $query = $this->db->get_where('pay_info', array('channel_type' => $channel, 'channel_order' => $channel_order));
        return $query->result();
    }
}

 ?>
