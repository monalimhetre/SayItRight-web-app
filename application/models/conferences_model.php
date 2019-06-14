 <?php
class Conferences_model extends CI_Model{


 function fetch_data()  
      {  
          
           $this->db->select("*");  
           //$this->db->limit(6);
           $this->db->from("conference");  
          //$query = $this->db->get_where("buyfromus",array("id"=>2)); 
          $query = $this->db->get();  
           return $query;  
      }  

   
}
?>