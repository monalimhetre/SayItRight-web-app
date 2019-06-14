<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyfromus extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){	

		$this->load->model('buyfromus_model');
		$data['fetch_data'] = $this->buyfromus_model->fetch_data();
		$data['fetch1_data'] = $this->buyfromus_model->fetch_data1();
		$data['fetch2_data'] = $this->buyfromus_model->fetch_data2();
		$data['fetch3_data'] = $this->buyfromus_model->fetch_data3();
		$data['fetch4_data'] = $this->buyfromus_model->fetch_data4();
		$data['fetch5_data'] = $this->buyfromus_model->fetch_data5();
		$this->load->view('templates/header');
		$this->load->view('templates/buyfromus1',$data);
		$this->load->view('templates/footer');

	}

}