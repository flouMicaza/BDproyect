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
		echo "Aqui se puede ver los viajes realizados segun el clima : ";

		echo "<br>";
		echo "<br>";
	
		echo form_open('welcome/verEvento');
		$options = array(
		'Nada'=>'Clima',
		'Rain' => 'Lluvioso',
		"Fog" => 'Con neblina',
		'FogRain'  => 'Lluvioso con neblina',
		'RainThunderstorm' => 'Lluvioso con rayos',
		'Snow'=> 'Nevando',
		'RainSnow' => 'Con lluvia y nieve',
		);
	echo form_dropdown('Eventos',$options);
	echo form_submit('enviar', 'Ver');
	echo form_close();
	echo "<br>";
			echo "<br>";
		echo "<br>";


	?>

	</div>
		
	<div>
		<?php 
		echo "Aqui se puede ver el clima segun la fecha :";
		echo form_open('welcome/verDia');
		
	
	$day = array(
		0=>'Día',
		1=>1,
		2=>2,
		3=>3,
		4=>4,
		5=>5,
		6=>6,
		7=>7,
		8=>8,
		9=>9,
		10=>10,
		11=>11,
		12=>12,
		13=>13,
		14=>14,
		15=>15,
		16=>16,
		17=>17,
		18=>18,
		19=>19,
		20=>20,
		21=>21,
		22=>22,
		23=>23,
		24=>24,
		25=>25,
		26=>26,
		27=>27,
		28=>28,
		29=>29,
		30=>30,
		31=>31,
		);
	echo form_dropdown('Dia',$day);
	$month = array(
		0=>'Mes',
		1=>1,
		2=>2,
		3=>3,
		4=>4,
		5=>5,
		6=>6,
		7=>7,
		8=>8,
		9=>9,
		10=>10,
		11=>11,
		12=>12,
		);
	echo form_dropdown('Mes',$month);


	$year = array(
		0=>'Año',
		2014=>2014,
		2015=>2015,
		2016=>2016,

		);
	echo form_dropdown('Año',$year);
	echo form_submit('enviar', 'Ingresar');
	echo form_close();
	?>


	</div>



</body>

</html>