<?php
class Buyfromus_model extends CI_Model{


	 function fetch_data()  
      {  
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC");  
           $this->db->select("*");  
           //$this->db->limit(6);
           //$this->db->from("buyfromus");  
          $query = $this->db->get_where("buyfromus",array("id"=>2)); 
          // $query = $this->db->get();  
           return $query;  
      }  

 function fetch_data1()  
      {  
           $this->db->select("*");    
          $query = $this->db->get_where("buyfromus",array("id"=>3)); 
           return $query;  
      } 
  function fetch_data2()  
      {  
           $this->db->select("*");    
          $query = $this->db->get_where("buyfromus",array("id"=>4)); 
           return $query;  
      } 
      function fetch_data3()  
      {  
           $this->db->select("*");    
          $query = $this->db->get_where("buyfromus",array("id"=>5)); 
           return $query;  
      } 
      function fetch_data4()  
      {  
           $this->db->select("*");    
          $query = $this->db->get_where("buyfromus",array("id"=>6)); 
           return $query;  
      } 
      function fetch_data5()  
      {  
           $this->db->select("*");    
          $query = $this->db->get_where("buyfromus",array("id"=>7)); 
           return $query;  
      } 
    
}
?>