<?php
class updocs_model extends CI_Model {
	public function __construct()
        {
   			parent::__construct();
        }
        public function get_autocomplete($search_data)
        {
                $this->db->select('name, id');
                $this->db->like('name', $search_data);

                return $this->db->get('tags', 10)->result();
        }
}
?>