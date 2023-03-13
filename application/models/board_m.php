<?php if (!defined('BASEPATH')) exit('No direct script access allowd.');


class Board_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function check_id($id)
    {
        $sql = "select * from members where id='" . $id . "'";
        log_message('debug', $sql);
        $query = $this->db->query($sql);
        $result = $query->result();

        if(empty($result) == 1){
            $result = "사용 가능한 아이디입니다.";
        }
        else{
            $result = "이미 사용중인 아이디입니다.";
        }

        return $result;
    }
}
