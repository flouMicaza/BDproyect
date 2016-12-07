<!DOCTYPE html>
<html>

<head>
	<?php
		$data['mensaje'] = null;
		$this->load->view('InicioB',$data);
	?>
</head>

<body>
	
	<div style = 'border: 1pt solid #fbb; text-align: center;'>
	<?php
	if ($query != null){
		echo '<h2> Clima segun la fecha </h2>';
		echo 
		'<table border="1" cellspacing=0 cellpadding=2 align="center" >
			<tr>
			<th><strong>Clima</strong></th>
			<th><strong>Temperatura promedio en F</strong></th>
			<th><strong>Humedad promedio </strong></th>			
			<th><strong>Visibilidad en Millas</strong></th>
			<th><strong>Velocidad del viento promedio en millas por hora</strong></th>
			</tr>
		';
		foreach ($query -> result_array() as $row) {
			echo '<tr>';
			echo '<td>'; echo $row['events']; echo'</td>';
			echo '<td>'; echo $row['mean_temperature_f']; echo '</td>';
			echo '<td>'; echo $row['mean_humidity']; echo '</td>';
			echo '<td>'; echo $row['mean_visibility_miles']; echo '</td>';
			echo '<td>'; echo $row['mean_wind_speed_mph']; echo '</td>';
		 	echo'</tr>';
		}
		echo '</table>';
				
	}
	?>
	</div>

</body>

</html>