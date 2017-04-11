<?php

class Users extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->helper('date');
        $this->load->database();
    }

    public function getId($username, $password) {
        $query = $this->db->get_where('users', array('name' => $username, 'password' => $password));
        foreach ($query->result() as $row) {
            return $row->id;
        }

        return 0;
    }

    public function insert($username, $password) {
        $data = array(
            'name' => $username,
            'email' => $username,
            'password' => $password,
        );
        $this->db->insert('users', $data);
    }
}

 ?>
