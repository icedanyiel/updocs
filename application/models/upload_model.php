 <?php  
 class upload_model extends CI_Model {  
      function upload($datas){
        $this->db->insert('file',$datas);  
      } 
      function upload_tags($datas){
        $this->db->insert('file',$datas);  
      }  
 }  
 ?>  