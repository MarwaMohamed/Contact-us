<?php
class contact_us extends CI_Controller{
	
	
	
	function index()
	{
		$data["main_content"]='contact_us_form';
		$this->load->view("includes/template",$data);
		
	}
	
	function submit()
	{
		$name=$this->input->post('name');
		
		$is_ajax=$this->input->post('ajax');

$data["main_content"]='contanct_success';
		
		
		if($is_ajax)
		{
			$this->load->view($data["main_content"]);
			
			
		}
		else 
			{$this->load->view("includes/template",$data);}
	}
}

 ?>
