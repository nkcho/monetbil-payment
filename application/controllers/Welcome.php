<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		//$this->load->model('Media_profile_model');
		
		//$row['data'] = $this->Media_profile_model->Media_houses();

		$this->load->view('home');
	}
	

}
