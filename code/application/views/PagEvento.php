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
		echo '<h2> Viajes realizados según el clima </h2>';
		echo 
		'<table border="1" cellspacing=0 cellpadding=2 align="center" >
			<tr>
			<th><strong>TripId</strong></th>
			<th><strong>StartTime</strong></th>
			<th><strong>StopTime</strong></th>
			</tr>
		';
		foreach ($query -> result_array() as $row) {
			echo '<tr>';
			echo '<td>'; echo $row['trip_id']; echo'</td>';
			echo '<td>'; echo $row['starttime']; echo '</td>';
			echo '<td>'; echo $row['stoptime']; echo '</td>';
	
		 	echo'</tr>';
		}
		echo '</table>';
				
	}
	?>
	</div>

</body>

</html>