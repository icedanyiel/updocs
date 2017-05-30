<?php
class updocs_model extends CI_Model {
	public function __construct()
        {
   			parent::__construct();
        }
        function booktable($search){

        $query = $this
                ->db
                ->select('*')
                ->from('file')
                ->like('file.title',$search)
                ->join('tags', 'file.id = tags.file_id')
                ->join('category', 'category.id = file.id')
                ->or_like('tags.name',$search)
                ->group_by("file.title")
                ->get();
     
        if($query->num_rows()>0)
        {
            return $query->result(); 
        }
        else
        {
            return null;
        }
    }

    function fetch_data()  
      {
           $this->db->select('*');
           $this->db->from('file');  
           $this->db->join('category', 'category.id = file.id');
           $query = $this->db->get();  
           return $query;  
      }
        
}