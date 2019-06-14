<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		
	
		$this->load->view('templates/header');
		$this->load->view('templates/login_user');
		$this->load->view('templates/footer');
		
	}


}