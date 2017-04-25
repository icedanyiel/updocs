 <?php  
 class register_model extends CI_Model {  
      function register($datas){
        $this->db->insert('users',$datas);  
      }  
 }  
 ?>  