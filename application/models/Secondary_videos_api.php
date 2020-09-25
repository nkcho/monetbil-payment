<?php

class Secondary_videos_api extends CI_Model{
    
    /**
     * FORM 1
     */
    public function all_form1_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`notes_class` = '1' ");
        return $query->result();
    }

	/**
     * Search videos
     */
    public function all_videos($tbl, $class, $DB){

		$class = "%$class%";
        
		$query = $DB->query("
			SELECT `video_id`, `video_class`, `video_topic`, `video_url`, `video_status`, `topic_name` AS topic, `video_title` AS title
			FROM $tbl, `topics_tbl`
			WHERE $tbl.`video_topic` = `topics_tbl`.`id` AND $tbl.`video_status` = 1 AND `video_class` LIKE ? ", array($class));
		/*
		SELECT $tbl.`id`, `topic_name`, `question`, `img`, `answer`, `choice1`, NULLIF(`choice2`, '') AS choice2, NULLIF(`choice3`, '') AS choice3 
			FROM $tbl, `topics_tbl` WHERE $tbl.`topic` = `topics_tbl`.`id` AND $tbl.`status` = 1 AND $tbl.`class` LIKE ? "
		*/
		//var_dump( $query->result() );
        return $query->result();
    }
}





