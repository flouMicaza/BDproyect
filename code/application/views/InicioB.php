<?php

?><!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>cicle Share Seattle </title>
</head>
	
<body>		
	<DIV ALIGN=center><h1>Cycle Share </h1></DIV>
	
	<?php
	echo '<table>
	<tr>';
	echo form_open('welcome/otraPagina');
	$CLIMA = array(
		'name' => 'boton',
		'id' => 'boton',
		'value' => 'clima',
		'type' => 'submit',
		'content' => 'Clima',
		);
	echo form_button($CLIMA);
	$ESTACION = array(
		'name' => 'boton',
		'id' => 'boton',
		'value' => 'estacion',
		'type' => 'submit',
		'content' => 'Estacion',
		);
	echo form_button($ESTACION);
	$VIAJE = array(
		'name' => 'boton',
		'id' => 'boton',
		'value' => 'viaje',
		'type' => 'submit',
		'content' => 'Viaje',
		);
	echo form_button($VIAJE);
	
	echo form_close();
	
	?>
		
	
</body>
</html>
