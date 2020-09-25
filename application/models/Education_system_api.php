<?php

class Education_system_api extends CI_Model{
    
    protected $edu_systems = 'education_systems';

    public function edu_system(){
        //$query = $this->db->get($this->edu_systems);
        $query = $this->db->get('education_systems');
        //return $this->db->insert_id();
        return $query->result();
    }


}