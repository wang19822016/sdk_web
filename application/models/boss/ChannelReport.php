<?php

class ChannelReport extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database('boss');
    }

    public function getAll() {
        $query = $this->db->get('channel_report_3');
        return $query->result();
    }

    public function exist($date, $channel) {
        $query = $this->db->query('select count(id) from channel_report_3 where date = \'' . $date . '\' and channelType = \'' . $channel . '\'' );
        return count($query->result) > 0;
    }

    public function update($date, $channel, $showNum, $clickNum, $costMoney) {
        $this->db->set('showNum', $showNum);
        $this->db->set('clickNum', $clickNum);
        $this->db->set('costMoney', $costMoney);
        $this->db->where('date', $date);
        $this->db->where('channelType', $channel);
        return $this->db->update('channel_report_3');
    }
}


 ?>
