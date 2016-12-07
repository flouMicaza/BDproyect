<?php

		$dbconn = pg_connect("user=cc3201 password=sutontogrupo321 port=5409  dbname=cc3201 host=cc3201.dcc.uchile.cl")
    or die('No se ha podido conectar: ' . pg_last_error());


		echo '<h1> Vajes que partieron en  6th St</h1>';
		echo 
		'<table border="2px">
			<tr>
			<td><strong>id del viaje</strong></td>
			<td><strong>Inicio del viaje</strong></td>
			<td><strong>Fin del viaje</strong></td>
			</tr>
		';
		$query = 'SELECT  from bici.weather where bici.weather.events="Rain";';
		//$query = "SELECT trip_id, starttime, stoptime FROM bici.trip WHERE (bici.trip.starttime ::timestamp:: time) < '12:00:00';";
		$result = pg_query($dbconn,$query);
		while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    		echo "\t<tr>\n";
    		foreach ($line as $col_value) {
        		echo "\t\t<td>$col_value</td>\n";
    		}
    		echo "\t</tr>\n";
		}
		echo '</table>';

	
		pg_close($dbconn);
		?>