<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diver_register extends CI_Controller {

	/**
    * Load registration page
    *
    * @author Nikunj Munjani
    *
    * @param $email User Email address
    *
    * @return Status
    */ 
	public function index()
	{
		$this->load->view('frontend/includes/header.php');
		$this->load->view('frontend/diver_register/index');
		$this->load->view('frontend/includes/footer.php');
	}
}
