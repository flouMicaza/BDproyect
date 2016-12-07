<?php

	
class consultas extends CI_Model{

	public function __construct(){
		parent::__construct();
	}
	

	function genteSegunEvento($evento){

		$qry = "SELECT trip_id, starttime, stoptime  FROM bici.weather, bici.trip  WHERE bici.weather.events='$evento'  AND bici.weather.date=(bici.trip.starttime::timestamp::date);";

		$query = $this -> db -> query($qry);
		return $query;
	}

	function climaSegunDia($diaExacto) {
		$qry = "SELECT events, mean_temperature_f, mean_humidity, mean_visibility_miles, mean_wind_speed_mph FROM bici.weather w WHERE w.date ='$diaExacto';";
		$query = $this -> db -> query($qry);
		return $query;
	}

	function gentePorSuAño($año){
		$qry = "SELECT starttime::timestamp::date, tripduration/60 AS duracion FROM bici.trip WHERE bici.trip.birthyear = '$año';";

		$query = $this -> db -> query($qry);
		return $query;


	}
}
