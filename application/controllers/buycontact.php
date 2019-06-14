
<?php
error_reporting(0);
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buycontact extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index(){
		
		
		$this->load->view('templates/header');
		$this->load->view('templates/buycontact');
		$this->load->view('templates/footer');
		
	}


}