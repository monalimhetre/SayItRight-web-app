<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		
		$data['title']='SayItRight';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/aboutus1');
		$this->load->view('templates/footer');
		
	}


}