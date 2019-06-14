<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	
  public function __construct()
  {
    parent::__construct();
    $this->load->model('employee_model');
    $this->load->helper(array('form','url'));
  }	

  public function index()
  {

  	$this->load->view('employee_form');
  }

  public function employee_form()
  {
  	$save=array(
        'emp_name' =>$this->input->post('emp_name'),
        'emp_gender' =>$this->input->post('emp_gender'),
        'emp_email' =>$this->input->post('emp_email'),
  	);
  	$this->employee_model->saveEmployee($save);
  	redirect('employee/index');
  }
}
?>