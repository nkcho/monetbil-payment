<?php

class Media_profile_model extends CI_Model{
    
    protected $user_table = 'newspapers';
    
    /**
     * Use Registration
     * @param : {array} User Data
     */

    public function add_article(array $data){
        $this->db->insert($this->user_table, $data);
        return $this->db->insert_id();
    }

/**
     * Article Updated
     * @param : {array} article Data
     */

    public function save_edited_article(array $data){
        //$data['id']
//        var_dump($data);

        
        $this->db->where('id', $data['id']);
        $this->db->update($this->user_table, $data);
        return $this->db->affected_rows();

//        var_dump($this->db->insert_id());
        
    }

/**
     * Getting media data
     * @param : 
     */

    public function get_media_data($id){ 
        $query = $this->db->query("SELECT `name`, `location`, `lang` FROM `media_house` WHERE `id` = ?
        ", array($id));

        return $query->result();
    }

    /**
     * Getting articles
     * @param : 
     */

    public function get_media_articles($id){ 
        $query = $this->db->query("SELECT * FROM `newspapers` WHERE `media_id` = ?
        ", array($id));

        return $query->result();
    }

    /**
     * login user
     * 
     */
    public function check_media( $data ){

        $this->db->where('name', $data['name']);
        $this->db->where('password', $data['password']);
        $query = $this->db->get('media_house');
        
        if($query->num_rows() > 0){
            return $query->result()[0]->id;
        }else{
            return false;
        }
        
    }
    
/**
     * Getting articles
     * @param : 
     #### should restrict by session too
     */

    public function get_media_article($id){ 
        $query = $this->db->query("SELECT * FROM `newspapers` WHERE `id` = ?
        ", array($id));

        return $query->result();
    }
    
    public function Media_houses(){
        $query = $this->db->query("SELECT `id`, `name`, `location`, `logo` FROM `media_house` WHERE 1 ");

        return $query->result();
    }
    
    public function Media_house($id){
        $query = $this->db->query("SELECT `id`, `name`, `location`, `logo` FROM `media_house` WHERE `id` = ?
        ", array($id));

        return $query->result();
    }

    public function Media_newspapers($id){
        $query = $this->db->query("SELECT `id`, `title`, `img`, `details`, `number`, `date` 
            FROM `newspapers` 
            WHERE `media_id` = ?
            ORDER BY `newspapers`.`date` DESC
        ", array($id));

        return $query->result();
    }
    
    public function Media_newspaper($id){
        $query = $this->db->query("SELECT `id`, `title`, `img`, `details`, `number`, `date` 
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


