<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myevents extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		
	
		$this->load->view('templates/header');
		$this->load->view('templates/myevents');
		$this->load->view('templates/footer');
		
	}


}