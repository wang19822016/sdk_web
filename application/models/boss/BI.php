<?php

class BI extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database('boss');
    }

    public function getInstallNum($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select sum(installNum) as install from user_report_' . $platform .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getRegNum($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select sum(regNum) as reg from user_report_' . $platform .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getValidNum($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select sum(validNum) as valid from user_report_' . $platform .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

	public function getCost($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select sum(costMoney) as cost from channel_report_' . $platform .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
    }

    public function getLiveUserNum($platform, $appId, $begin, $end) {
        if (strlen($platform) == 0) {
            $query = $this->db->query('select count(distinct userid) as live from daily_data_' .$appId. ' where loginTime between \'' . $begin . '\' and \'' . $end . '\'' );
            return $query->result();
        } else {
            $query = $this->db->query('select count(distinct userid) as live from daily_data_' .$appId. ' where loginTime between \'' . $begin . '\' and \'' . $end . '\' and platform=\'' . $platform . '\'' );
            return $query->result();
        }
    }

    public function getPayNum($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select sum(paymoney) as pay from user_report_' . $platform .$appId. ' where date between \'' . $begin . '\' and \'' . $end . '\'' );
        return $query->result();
	}

	public function getPayUserCount($platform, $appId, $begin, $end) {
        if (strlen($platform) == 0) {
            $query = $this->db->query('select count(userid) as paypnumber from user_pay_' .$appId. ' where serverDate between \'' . $begin . '\' and \'' . $end . '\'' );
            return $query->result();
        } else {
            $query = $this->db->query('select count(userid) as paypnumber from user_pay_' .$appId. ' where serverDate between \'' . $begin . '\' and \'' . $end . '\' and platform=\'' . $platform . '\'' );
            return $query->result();
        }
	}

    public function getPayUserNum($platform, $appId, $begin, $end) {
        if (strlen($platform) == 0) {
            $query = $this->db->query('select count(distinct userid) as pay_user from daily_data_' .$appId. ' where loginTime between \'' . $begin . '\' and \'' . $end . '\' and paymoney > 0' );
            return $query->result();
        } else {
            $query = $this->db->query('select count(distinct userid) as pay_user from daily_data_' .$appId. ' where loginTime between \'' . $begin . '\' and \'' . $end . '\' and paymoney > 0 and platform=\'' . $platform . '\'' );
            return $query->result();
        }
    }

    public function getDaily($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select * from user_report_' . $platform .$appId. ' where `date` between \'' . $begin . '\' and \'' . $end .'\' order by date desc');
        return $query->result();
    }

    public function getChannels($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select * from channel_report_' . $platform . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getLTV($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select * from ltv_' . $platform . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getROI($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select * from roi_' . $platform . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getRemain($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select * from remain_' . $platform . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getPay($platform, $appId, $begin, $end) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $query = $this->db->query('select * from pay_conversion_' . $platform . $appId . ' where `date` between \'' . $begin . '\' and \'' . $end . '\' order by date desc' );
        return $query->result();
    }

    public function getPayTop($platform, $appId, $beginDate, $weekDate, $monthDate) {
        if (strlen($platform) == 0) {
            $query = $this->db->query("select userId as uin, channelType as channel, sum(payMoney) as money, SUM(IF(loginTime >= '" . $weekDate . "' and loginTime <= '" . $beginDate . "', payMoney, 0)) as weekmoney, SUM(IF(loginTime >= '" . $monthDate . "' and loginTime <= '" . $beginDate . "', payMoney, 0)) as monthmoney, regTime as reg, min(loginTime) as beginpay, max(loginTime) as endpay, max(onlineLastTime) as online from daily_data_" . $appId . " where payMoney > 0 group by userId order by money desc limit 100;");
            return $query->result();
        } else {
            $query = $this->db->query("select userId as uin, channelType as channel, sum(payMoney) as money, SUM(IF(loginTime >= '" . $weekDate . "' and loginTime <= '" . $beginDate . "', payMoney, 0)) as weekmoney, SUM(IF(loginTime >= '" . $monthDate . "' and loginTime <= '" . $beginDate . "', payMoney, 0)) as monthmoney, regTime as reg, min(loginTime) as beginpay, max(loginTime) as endpay, max(onlineLastTime) as online from daily_data_" . $appId . " where platform='" . $platform . "' and payMoney > 0 group by userId order by money desc limit 100;");
    		return $query->result();
        }
    }

    public function update($platform, $appId, $date, $channel, $showNum, $clickNum, $costMoney) {
        if (strlen($platform) > 0)
            $platform = $platform . '_';
        $this->db->set('showNum', $showNum);
        $this->db->set('clickNum', $clickNum);
        $this->db->set('costMoney', $costMoney);
        $this->db->where('date', $date);
        $this->db->where('channelType', $channel);
        return $this->db->update('channel_report_' . $platform . $appId);
    }
}

 ?>
