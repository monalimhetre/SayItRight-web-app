<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('individual_model');
	}
	
	public function index(){
		
	
	
		$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');

                $this->form_validation->set_rules('frstname1', 'Firstname', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('frstname2', 'Lastname', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('frstname3', 'Workplace', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('frstname4', 'School', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('frstname5', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('frstname6', 'Password', 'trim|required|min_length[8]');

                if ($this->form_validation->run() == TRUE)
                {
                    //redirect('ContactController');
                $this->contact_form();
                }
                else
                {
                      
                  	$this->load->view('templates/header');
					$this->load->view('templates/individual');
					$this->load->view('templates/footer');
                                      
                } 
		
	}

	public function contact_form()
  {
    $save=array(
        'name' =>$this->input->post('frstname1'),
        'last_name' =>$this->input->post('frstname2'),
        'workplace' =>$this->input->post('frstname3'),
        'school' =>$this->input->post('frstname4'),
        'email' =>$this->input->post('frstname5'),
        'password' =>$this->input->post('frstname6'),
    );
    $this->individual_model->saveEmployee($save);
    redirect('individual');
    }



}