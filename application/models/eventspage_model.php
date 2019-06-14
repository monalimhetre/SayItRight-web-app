<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventspage_model extends CI_Model{


 function fetch_data()  
      {  
          
           $this->db->select("*"); 
           $this->db->from("event");  
          $query = $this->db->get();  
           return $query;  
      }  
	  
     function delete_data($id){  
           $this->db->where("id", $id);  
           $this->db->delete("event");  
           //DELETE FROM tbl_user WHERE id = $id  
      }  

      function fetch_single_data($id)  
      {  
           $this->db->where("id", $id);  
           $query = $this->db->get("event");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
     
   

 }  


?>