<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model
{

  public function saveEmployee($data)
  {
    {
      $this->db->insert('contact_us',$data);
      $emp_id=$this->db->insert_id();
    }
    return $emp_id;
  } 
}
?>