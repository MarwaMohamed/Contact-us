<?php 

class data_model extends CI_Model{
	
/*	function get_all()
	{
		$query=$this->db->query('select * from data');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row ) {
				$data[]=$row;
			}
			return $data;
		}
		
	}
	
	*/
	
	/*function get_all()
	{
		//selection of specific fields in the table  & using active query
		$this->db->select('title,content');
		$query=$this->db->get('data');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row ) {
				$data[]=$row;
			}
			return $data;
		}
		*/
		// if we wanna send args to our query ->query binding
	/*	function get_all()
	{
		 $q="select content,title from data where id=?   AND author =?";
		 $query=$this->db->query($q,array(1 ,'marwa'  ));
		 if($query->num_rows()>0)
		{
			foreach ($query->result() as $row ) {
				$data[]=$row;
			}
			return $data;
	     
		}	
		
	}
	*/
	//working more specifc with active query
	function get_all() {
		$this->db->select('title, content');
		$this->db->from('data');
		$this->db->where('id', 1);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
		
	}
}


?>