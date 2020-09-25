<?php

class institution_api extends CI_Model{
    
    public function appVersion($id){
        $query = $this->db->query("SELECT `version` FROM `institutions` WHERE`id` = ? ", array($id));

        return $query->result();
    }


	public function general_notice($id){
        $query = $this->db->query("SELECT * FROM `general_notice_tbl` WHERE `notice_class` = ? ", array($id));

        return $query->result();
    }

	public function contacts(){
        $query = $this->db->query("SELECT * FROM `contacts_tbl` WHERE 1");

        return $query->result();
    }



}