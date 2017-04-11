<?php

class UserBase extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id) {
        $query = $this->db->get_where('user_base', array('id' => $id));
        return $query->result();
    }

    public function getByName($name) {
        $query = $this->db->get_where('user_base', array('name' => $name));
        return $query->result();
    }
}

 ?>
