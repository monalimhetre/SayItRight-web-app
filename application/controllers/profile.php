<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		
	}
	
	public function index(){
		$this->load->model("profile_model");
		$data["fetch_data"] = $this->profile_model->fetch_data();  
		$this->load->view('templates/header');
		$this->load->view('templates/profile',$data);
		$this->load->view('templates/footer');
		
	}


}