<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conferences extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){

		$this->load->model('conferences_model');
		$data['fetch_data'] = $this->conferences_model->fetch_data();
		
		$this->load->view('templates/header');
		$this->load->view('templates/conferences',$data);
		$this->load->view('templates/footer');
		
	}


}