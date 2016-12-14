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

		$qry = "SELECT starttime::timestamp::date, tripduration/60 AS duracion FROM bici.trip WHERE bici.trip.birthyear = ? ;";
		$query1 = $this-> db -> query($qry, $año);

		return $query1;
	}

	function rangoEdadfrom($año1,$año2){
		$qry = "SELECT DISTINCT bici.station.name from bici.station,bici.trip where bici.station.station_id=bici.trip.from_station_id and bici.station.station_id IN (SELECT bici.station.station_id FROM bici.station WHERE bici.trip.birthyear>? AND bici.trip.birthyear <?);";
		$query1=  $this-> db -> query($qry, array($año1,$año2));
		return $query1;

	}
}



