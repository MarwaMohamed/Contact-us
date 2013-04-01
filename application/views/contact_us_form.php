<div id="contact_form">
	<h2>Contact Us!!</h2>
<?php

echo form_open("contact_us/submit");
echo form_input('name', set_value('Name', 'Name'),'id=name');
echo form_input('email','Email','id=email');
$data=array('name'=>'Message','cols'=>30,'rows'=>15);
echo form_textarea($data,'Message','id=Message');
echo form_submit('submit','submit','id=submit');
echo form_close();
?>	
	
	<script type="text/javascript">
		$('#submit').click(function(){
			
			$var name=$(#name)
			
			
			
			
			
		})
		
		
		
		
	</script>
</div>
