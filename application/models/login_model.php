<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{


public function fetch_data()  
      {  
           $this->db->select("*");    
           $this->db->where("regtype","individual"); 
           $email=$_POST['Email'];
           $this->db->where("email",$email);
           $password=$_POST['Password'];
           $this->db->where("password",$password); 
           $demo=$this->db->from("users");
           $this->db->get();
           $this->db->where("regtype","business"); 
           $email=$_POST['Email'];
           $this->db->where("email",$email);
           $password=$_POST['Password'];
           $this->db->where("password",$password); 
           $demo1=$this->db->from("users");
           $this->db->get();
           $this->db->where("regtype","events"); 
           $email=$_POST['Email'];
           $this->db->where("email",$email);
           $password=$_POST['Password'];
           $this->db->where("password",$password); 
           $demo2=$this->db->from("users");
           $this->db->get();
           $this->db->where("email",$email);
           $this->db->where("password",$password); 
           $this->db->where("regtype",'individual');
           $count=$this->db->count_all_results("users");
           $this->db->where("email",$email);
           $this->db->where("password",$password); 
           $this->db->where("regtype",'business');
           $count1=$this->db->count_all_results("users");
           $this->db->where("email",$email);
           $this->db->where("password",$password); 
           $this->db->where("regtype",'events');
           $count2=$this->db->count_all_results("users");
           //return $count;
           if($count==1){
               redirect('login_user');
               }
               else if ($count1 == 1){
                   redirect('conferences');
               }
               else if ($count2 == 1){
                   redirect('eventspage');
               }
               
               
      }

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