<?php

class BI extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database('boss');
    }

    public function getInstallNum($appId, $begin, $end) {
        $query = $this->db->query('select sum(installNum) as install from user_report_' .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getRegNum($appId, $begin, $end) {
        $query = $this->db->query('select sum(regNum) as reg from user_report_' .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getValidNum($appId, $begin, $end) {
        $query = $this->db->query('select sum(validNum) as valid from user_report_' .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getLiveUserNum($appId, $begin, $end) {
        $query = $this->db->query('select count(distinct userid) as live from daily_data_' .$appId. ' where loginTime between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getPayNum($appId, $begin, $end) {
        $query = $this->db->query('select sum(paymoney) as pay from user_report_' .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getPayUserNum($appId, $begin, $end) {
        $query = $this->db->query('select count(distinct userid) as pay_user from daily_data_' .$appId. ' where loginTime between \'' . $begin . '\' and \'' . $end . '\' and paymoney > 0' );
        return $query->result();
    }

    public function getDaily($appId, $begin, $end) {
        $query = $this->db->query('select * from user_report_' .$appId. ' where `date` between \'' . $begin . '\' and \'' . $end .'\' order by date desc');
        return $query->result();
    }

    public function getChannels($appId, $begin, $end) {
        $query = $this->db->query('select * from channel_report_' . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getLTV($appId, $begin, $end) {
        $query = $this->db->query('select * from ltv_' . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getROI($appId, $begin, $end) {
        $query = $this->db->query('select * from roi_' . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getRemain($appId, $begin, $end) {
        $query = $this->db->query('select * from remain_' . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getPay($appId, $begin, $end) {
        $query = $this->db->query('select * from pay_conversion_' . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getPayTop($appId) {
        $query = $this->db->query('select a.userId as uin, a.channelType as channel, sum(a.payMoney) as money, a.regTime as reg, min(b.serverDate) as beginpay,  max(b.serverDate) as endpay, max(a.onlineLastTime) as online from daily_data_' . $appId . ' a, user_pay_' . $appId . ' b where a.userId = b.userId group by a.userId order by money desc limit 100;');
        return $query->result();
    }

    public function update($appId, $date, $channel, $showNum, $clickNum, $costMoney) {
        $this->db->set('showNum', $showNum);
        $this->db->set('clickNum', $clickNum);
        $this->db->set('costMoney', $costMoney);
        $this->db->where('date', $date);
        $this->db->where('channelType', $channel);
        return $this->db->update('channel_report_' . $appId);
    }
}

 ?>
