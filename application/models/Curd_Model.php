<?php

class Curd_Model extends CI_Model{
	
	
	function get_all()
	{
		$records=$this->db->get("data");
		 	return $records->result();
	}
	
	
	function update_records($data)
	{
		  $this->db->where('id',1 );
		  $this->db->update("data",$data);
	}
	
	function add_record($data)
	{
		$this->db->insert('data',$data);
		return;
		
	}
	
	function delete_record()
	{
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete("data");
		
	}
	
	
}

?> 