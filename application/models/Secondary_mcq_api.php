<?php

class Secondary_mcq_api extends CI_Model{
    
	/**
     * Search subjects
     */
    public function all_mcqs($tbl, $class, $DB){

		$class = "%$class%";
        
		//$query = $this->db->query("SELECT * FROM $tbl, `topics_tbl` WHERE $tbl.`topic` = `topics_tbl`.`id` AND $tbl.`status` = 1 AND $tbl.`class` LIKE ? ", array($class));
		$query = $DB->query("SELECT $tbl.`id`, `topic_name`, `question`, NULLIF(`img`, '') AS img, `answer`, `choice1`, NULLIF(`choice2`, '') AS choice2, NULLIF(`choice3`, '') AS choice3, NULLIF(`explanation`, '') AS explanation, NULLIF(`category_abr`, '') AS category
			FROM $tbl 
			LEFT JOIN `topics_tbl` 
			ON $tbl.`topic` = `topics_tbl`.`id`
			LEFT JOIN `category_tbl`
			ON $tbl.`category` = `category_tbl`.`category_id`
			WHERE  $tbl.`status` = 1 AND $tbl.`class` LIKE ? ", array($class));
		
        return $query->result();
    }

    public function max_mcqs(){
        $query = $this->db->query("SELECT MAX(`id`) AS max FROM `fmbs_tbl` WHERE 1 ");

        return $query->result();
    }

    public function appVersion($id){
        $query = $this->db->query("SELECT `version` FROM `institutions` WHERE `name`= 'fmbs' AND `id` = ? ", array($id));

        return $query->result();
    }



}





