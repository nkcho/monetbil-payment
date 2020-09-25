<?php

class Secondary_notes_api extends CI_Model{
    
    /**
     * All Notes
     */
    public function all_notes($tbl, $class, $DB){
	
	    //var_dump($tbl, $class);
		$class = "%$class%";
        
		$query = $DB->query("
			SELECT $tbl.`notes_id`, `notes_class`, `notes_topic`, NULLIF(`notes_img`, ' ') AS img, `notes_content`, `notes_lang`, $tbl.`notes_status`, `topic_name`, `topic_subj` 
			FROM $tbl, `topics_tbl` WHERE $tbl.`notes_topic` = `topics_tbl`.`id` AND $tbl.`notes_status` = 1 AND $tbl.`notes_class` LIKE ? ", array($class));
		//var_dump($class);
        return $query->result();
    }
    

    
    /**
     * FORM 1
     */
    public function all_form1_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`notes_class` = '1' ");
        return $query->result();
    }

    /**
     * FORM 2
     */
    public function all_form2_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`class` = '2' ");
        return $query->result();
    }
    
    /**
     * FORM 3
     */
    public function all_form3_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`class` = '3' ");
        return $query->result();
    }
    

    /**
     * FORM 4
     */
    public function all_form4_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`class` = '4' ");
        return $query->result();
    }
    

    /**
     * FORM 5
     */
    public function all_form5_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`class` = '5' ");
        return $query->result();
    }
    

    /**
     * FORM l6
     */
    public function all_forml6_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`class` = '6' ");
        return $query->result();
    }
    

    /**
     * FORM u6
     */
    public function all_formu6_notes($tbl){
        $query = $this->db->query("SELECT * FROM $tbl WHERE $tbl.`class` = '7' ");
        return $query->result();
    }
    

    public function max_mcqs(){
        $query = $this->db->query("SELECT MAX(`id`) AS max FROM `fmbs_tbl` WHERE 1 ");

        return $query->result();
    }




}





