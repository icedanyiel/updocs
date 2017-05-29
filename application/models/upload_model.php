 <?php  
 class upload_model extends CI_Model {
 	function upload($table,$data){
        $query = $this->db->insert($table, $data);
    return $this->db->insert_id();
    }
	 //Aici se insearaza tagurile
	function upload2($table,$data){
        $query = $this->db->insert_batch($table, $data);
   
    }

	function getCategoryNames(){
		$this->db->from('category');
		$this->db->order_by('name');
		$result = $this->db->get();
		$return = array();
		if($result->num_rows() > 0) {
			foreach($result->result_array() as $row) {
				$return[$row['id']] = $row['name'];
			}
		}
	    return $return;
	}
 }  
 ?>  
