<?php

class User_api extends CI_Model{
    
    protected $user = 'user_tbl';

    public function add_user(array $data){
        $this->db->insert($this->user, $data);
        return $this->db->insert_id();
    }

    public function get_user($id){
        $query = $this->db->query("SELECT `user_id`, `user_gender`, `user_class`, `user_school`, `user_system`
            FROM `user_tbl` WHERE `user_id` = ?", array($id));
        
        return $query->result();
    }

    public function check_user($id){
        $query = $this->db->query("SELECT `user_id` FROM `user_tbl` WHERE `user_id` = ?", array($id));
        
        if($query->result()){
            return true;
        }else{
            return false;
        }
    }

    public function user_login($email, $pass){
        $query = $this->db->query("
            SELECT `user_id`, `user_name`, `user_gender`, `user_class`,`user_school`, `user_system`
            FROM `user_tbl` WHERE `user_email` = ? AND `user_password` = ?", array($email, $pass));
        
            if($query->result()){
                return $query->result();
            }else{
                return false;
            }
        
    }

    public function check_user_info($id, $upass){
        $query = $this->db->query("SELECT `user_id`, `user_password`, `user_gender`, `user_class`,`user_school`, `user_system` FROM `user_tbl` WHERE `user_id` = ?", array($id));
        
        return $query->result();

    }

    public function complete_user_registration($id, $uname, $uemail, $upass){
        $this->db->query("UPDATE `user_tbl`
            SET `user_name` = ?, `user_email` = ?, `user_password` = ?
            WHERE `user_id` = ? ",
            array($uname, $uemail, $upass, $id));
        
        if($this->db->affected_rows() === 1 || $this->db->affected_rows() === 0){
            return true;
        }else{
            return false;
        }
    }

}