<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		
	}
	
	public function index(){
		
		
		
		 $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');

                $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
                $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[8]');

                if ($this->form_validation->run() == TRUE)
                {
                	//$this->contact_form();
                    redirect('login_user');
               		
                }
                else
                {
                      
			        $this->load->view('templates/header');
					$this->load->view('templates/login');
					$this->load->view('templates/footer');
			                                      
                } 
		

		
	}


	/*public function contact_form()
  {
    $save=array(
        'email' =>$this->input->post('Email'),
        'password' =>$this->input->post('Password'),
        // 'regtype' =>$this->input->post('Individual'),
        
    );
    $this->login_model->saveEmployee($save);
    redirect('login');
    }*/


}