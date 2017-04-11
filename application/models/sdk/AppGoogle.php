<?php

class AppGoogle extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id) {
        $query = $this->db->get_where('app_google', array('id' => $id));
        return $query->result();
    }

    public function update($id, $key) {
        $this->db->set('key', $key);
        $this->db->where('id', $id);
        return $this->db->update('app_google');
    }

    public function insert($id, $key) {
        $data = array(
            'id' => $id,
            'key' => $key
        );
        return $this->db->insert('app_google', $data);
    }

}

 ?>
