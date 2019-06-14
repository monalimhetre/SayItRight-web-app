<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individual_model extends CI_Model
{

  public function saveEmployee($data)
  {
    {
      $this->db->insert('users',$data);
      $emp_id=$this->db->insert_id();
    }
    return $emp_id;
  } 
}
?>