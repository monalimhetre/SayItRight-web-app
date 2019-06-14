<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myconferences extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		
	$this->load->model('myconferences_model');
		$data['fetch_data'] = $this->myconferences_model->fetch_data();
		$this->load->view('templates/header');
		$this->load->view('templates/myconferences',$data);
		$this->load->view('templates/footer');
		
	}


}