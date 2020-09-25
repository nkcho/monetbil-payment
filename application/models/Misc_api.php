<?php

class Misc_api extends CI_Model{
    
    protected $career = 'miya_career';
    protected $tips = 'miya_learning_tips';
    protected $faqs = 'miya_faqs';
    protected $dictionary = 'miya_dictionary';
    protected $profession = 'miya_profession';
    protected $slider = 'miya_slides';

    public function edu_system(){
        //$query = $this->db->get($this->edu_systems);
        $query = $this->db->get('education_systems');
        //return $this->db->insert_id();
        return $query->result();
    }

    public function career($id){
        $query = $this->db->query("SELECT `id`, `subject`, `career`, `institution`, `edu_system`, `country` 
			FROM `miya_career` 
			WHERE `edu_system` = ?", array($id) );
        return $query->result();
    }

	public function professions($id){
        $query = $this->db->query("SELECT `profession_name`, `profession_description`, `profession_subjects`, `profession_institution`, `profession_edu_system`
			FROM `miya_profession`
			WHERE `profession_edu_system` = ?", array($id) );
        return $query->result();
    }

	public function tips(){
		$query = $this->db->get($this->tips);
        return $query->result();
    }

	public function faqs(){
        $query = $this->db->get($this->faqs);
        return $query->result();
    }

	public function dictionary($class){
		$class = "%$class%";

        $query = $this->db->query("SELECT `dictionary_word`, `dictionary_meaning`, `word_subject`
            FROM `miya_dictionary` 
			WHERE `dictionary_class` LIKE ?
			ORDER BY `miya_dictionary`.`dictionary_word` ASC", array($class));
        return $query->result();
    }

	public function partners($class, $gender, $system, $school){
		
		$class = "%$class%";
		$gender = "%$gender%";
		$system = "%$system%";
		
		//var_dump($class, $gender, $system, $school);

        $query = $this->db->query("SELECT `partner_id`, `partner_name`, `partner_category`, `partner_img`, `partner_text`, `partner_class`, `partner_edu_system`, `partner_lang`, `learner_gender`, `partner_number`, `partner_website`, `partner_location`
			FROM `miya_partners`
			WHERE `partner_class` LIKE ? AND `learner_gender` LIKE ? AND `partner_edu_system` LIKE ?", array($class, $gender, $system));

        
        return $query->result();
    }

	public function appVersion(){
        $query = $this->db->query("SELECT `version` FROM `institutions` WHERE `id` = 1 ");

        return $query->result();
    }
    
    public function sliders($id){
		$id = "%$id%";
        $query = $this->db->query("SELECT `text` FROM `miya_slides` WHERE `system` LIKE ?", array($id) );
        return $query->result();
    }
    
    public function sliders_user($id){
		$id = "%$id%";
        $query = $this->db->query("SELECT `text` FROM `miya_slides` WHERE `user` LIKE ?", array($id) );
        return $query->result();
    }

    public function general_notice($class, $gender, $system){

        $class = "%$class%";
        $gender = "%$gender%";
        $system = "%$system%";
        
        $query = $this->db->query("SELECT `notice_id`, `notice_text` 
            FROM `general_notice_tbl` 
            WHERE `notice_class` LIKE ? AND `notice_gender` LIKE ? AND `notice_edu_system` LIKE ?  ", array($class, $gender, $system));

        return $query->result();
    }

    public function advert($class, $gender, $system){
        
        $class = "%$class%";
        $gender = "%$gender%";
        $system = "%$system%";

        $query = $this->db->query("SELECT * 
            FROM `advert_tbl` 
            WHERE advert_class LIKE ? AND advert_gender LIKE ? AND advert_edu_system LIKE ? AND advert_status = 1",
			array($class, $gender, $system)
		);

        return $query->result();
    }

}
