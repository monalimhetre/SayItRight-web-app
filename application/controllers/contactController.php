<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {
	
  public function __construct()
  {
    parent::__construct();
    $this->load->model('contact_model');

  } 
	
	public function index(){

		

    $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');

                $this->form_validation->set_rules('firstname1', 'Firstname','trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('firstname2', 'Lastname', 'trim|required|min_length[3]|max_length[12]');
                $this->form_validation->set_rules('firstname3', 'Telephone', 'required|regex_match[/^[0-9]{10}$/]');
                $this->form_validation->set_rules('message-box', 'Message', 'required');

                if ($this->form_validation->run() == TRUE)
                {
                     $this->contact_form();
                    //redirect(base_url() . "contactController/contact_form"); 
                
                }
                else
                {
                      
                    $this->load->view('templates/header');
                    $this->load->view('templates/contact1');
                    $this->load->view('templates/footer');
                                      
                }
		
	}


  
public function contact_form()
  {
    $save=array(
        'first_name' =>$this->input->post('firstname1'),
        'last_name' =>$this->input->post('firstname2'),
        'telephone' =>$this->input->post('firstname3'),
        'message' =>$this->input->post('message-box'),
    );
    $this->contact_model->saveEmployee($save);
    redirect('contactController');
    }

}
?>