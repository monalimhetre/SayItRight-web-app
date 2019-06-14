<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		  $this->load->model('events_model');
	}
	
	public function index(){
		
		$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');

                $this->form_validation->set_rules('frstname1', 'Firstname', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('frstname2', 'Lastname', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('frstname3', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('frstname4', 'Password', 'trim|required|min_length[8]');

                if ($this->form_validation->run() == TRUE)
                {
                    //redirect('ContactController');
                $this->contact_form();
                }
                else
                {
                      
			        $this->load->view('templates/header');
					$this->load->view('templates/events');
					$this->load->view('templates/footer');
	            } 
		
	}

	public function contact_form()
  {
    $save=array(
        'name' =>$this->input->post('frstname1'),
        'last_name' =>$this->input->post('frstname2'),
        'email' =>$this->input->post('frstname3'),
        'password' =>$this->input->post('frstname4'),
        
    );
    $this->events_model->saveEmployee($save);
    redirect('events');
    }


}