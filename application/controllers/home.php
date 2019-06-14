<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		
		$this->load->view('templates/header1');
		$this->load->view('templates/default');
		$this->load->view('templates/footer1');
		
	}


}