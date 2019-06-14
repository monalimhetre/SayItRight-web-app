<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventspage extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
        }
        
        public function index(){
            
        $this->load->model('eventspage_model');
            $data['fetch_data'] = $this->eventspage_model->fetch_data();
            $this->load->view('templates/header');

            $this->load->view('templates/eventspage',$data);
            $this->load->view('templates/footer');

       
            
        }

        public function delete_data(){
            $id = $this->uri->segment(3);  
               $this->load->model("eventspage_model");  
               $this->eventspage_model->delete_data($id);  
              redirect(eventspage);  
        }
        public function deleted(){
            $this->index();
        }


       }