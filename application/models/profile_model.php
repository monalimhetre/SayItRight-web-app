<?php  
 class Profile_model extends CI_Model  
 {  
       
       
      function fetch_data()  
      {  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
           $this->db->select("*");  
           //$this->db->from("users");  
           $query = $this->db->get_where("users",array("last_name"=>"Mhetre"));  
           return $query;  
      }  
      
      function fetch_single_data($id)  
      {  
           $this->db->where("id", $id);  
           $query = $this->db->get("users");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
      }  
     /* function update_data($data, $id)  
      {  
           $this->db->where("id", $id);  
           $this->db->update("users", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
      }  */
 }  