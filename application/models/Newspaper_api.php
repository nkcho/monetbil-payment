<?php

class Newspaper_api extends CI_Model{
    
    
    public function Media_houses(){
        $query = $this->db->query("SELECT `id`, `name`, `location`, `logo` FROM `media_house` WHERE 1 ");

        return $query->result();
    }
    
    public function Media_house($id){
        $query = $this->db->query("SELECT `id`, `name`, `location`, `logo` FROM `media_house` WHERE `id` = ?
        ", array($id));

        return $query->result();
    }

    public function media_newspapers($id){
        $query = $this->db->query("SELECT `id`, `title`, `lang`, `category`, `img`, `details`, `author`, `number`, `date` 
            FROM `newspapers` 
            WHERE `media_id` = ?
            ORDER BY `newspapers`.`date` DESC
            LIMIT 13
        ", array($id));

        return $query->result();
    }
    
    // getting last ID
    public function get_last_id($media_id){
        $query = $this->db->query("SELECT MAX(`id`) AS id
            FROM `newspapers` 
            WHERE `media_id` = ?
        ", array($media_id));

        return $query->result();
    }
    
    public function newspaper_item($id){
        $query = $this->db->query("SELECT `id`, `title`, `img`, `details`, `author`, `number`, `date` 
            FROM `newspapers` 
            WHERE `id` = ?
            ORDER BY `newspapers`.`date` DESC
        ", array($id));

        return $query->result();
    }
    /*
    public function all_media_newspapers(){
        $query = $this->db->query("SELECT `id`, `title`, `img`, `details`, `author`, `number`, `date` 
            FROM `newspapers` 
            WHERE 1");

        return $query->result();
    }
    */
    public function media_newspaper($id){
        $query = $this->db->query("SELECT `id`, `title`, `img`, `details`, `author`, `number`, `date` 
            FROM `newspapers` 
            WHERE `id` = ?
        ", array($id));

        return $query->result();
    }
    
    public function mediaName($id){
        $query = $this->db->query("SELECT `name` 
            FROM `media_house` 
            WHERE `id` = ?
        ", array($id));

        return $query->result();
    }


}


