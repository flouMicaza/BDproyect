<!DOCTYPE html>
<html>


<head>
	<?php
		$data['mensaje'] = null;
		$this->load->view('InicioB',$data);
	?>
	
</head>


<body>
	
	<div>
	<?php 
	echo form_open('Welcome/porNacimiento')."\n"; 
		echo form_label('Año De Nacimiento', 'usuario')."\n";
		echo form_input('año')."\n";
		
	
		echo form_submit('enviar', 'Ingresar!!!');
		echo form_close();
	?>
	</div>

</body>
