<?php

class Mcq_api extends CI_Model{
    
    public function all_mcq(){
        $query = $this->db->query("SELECT * FROM `fmbs_tbl` WHERE 1 ");

        return $query->result();
    }

    public function max_mcqs(){
        $query = $this->db->query("SELECT MAX(`id`) AS max FROM `fmbs_tbl` WHERE 1 ");

        return $query->result();
    }

    public function appVersion($id){
        $query = $this->db->query("SELECT `version` FROM `institutions` WHERE`id` = ? ", array($id));

        return $query->result();
    }



}