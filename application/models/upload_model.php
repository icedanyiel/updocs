 <?php  
 class upload_model extends CI_Model {
 	function upload($datafile){
        $this->db->insert('file',$datafile);
    }
/*    function getCategoryNames(){
		$return[''] = '';
		$query  = $this->db->get('category');
		foreach($query->result_array() as $row){
		    $return[$row['id']] = $row['name'];
		}
		return $return;
	}*/

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

/*    function upload_tags($tagfile){
    	$this->db->insert('tags',$tagfile);
    }  */
 }  
 ?>  
