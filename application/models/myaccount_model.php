<?php  
 class myaccount_model extends CI_Model  {  
 
		function fetch_data($id)  
      {  
		
           //$query = $this->db->get("tbl_user");  
           //select * from tbl_user  
           //$query = $this->db->query("SELECT * FROM tbl_user ORDER BY id DESC"); 
           $this->db->select('id,filename');  
		   $this->db->where('iduser',$id);
           $this->db->from('file');  
           $query = $this->db->get();  
           return $query;  
      }  
 }