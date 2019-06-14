<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {
	
	public function saveEmployee($data)
	{
		{
			$this->db->insert('employee',$data);
			$emp_id=$this->db->insert_id();
		}
		return $emp_id;
	}	
}
?>