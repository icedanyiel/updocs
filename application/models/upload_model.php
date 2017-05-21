 <?php  
 class upload_model extends CI_Model {  
      function upload($datafile){
        $this->db->insert('file',$datafile);  
      } 
      function upload_tags($tagfile){
        $this->db->insert('tags',$tagfile);  
      }  
 }  
 ?>  
