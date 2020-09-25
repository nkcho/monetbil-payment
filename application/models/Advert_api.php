<?php

class Advert_api extends CI_Model{
    
    public function advert($class, $gender, $system){
        $query = $this->db->query("SELECT * FROM `advert_tbl` WHERE advert_class = ? AND advert_gender = ? AND advert_edu_system = ? AND advert_status = 1",
			array($class, $gender, $system)
		);

        return $query->result();
    }


}