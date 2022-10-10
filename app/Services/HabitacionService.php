<?php

namespace App\Services;

use App\Models\Habitacion;

class HabitacionService {

	public  function getAllHabitacionesByEstado($estado){
		$habitaciones  = Habitacion::where('estado',$estado)->get();
		return $habitaciones;
	}

	public  function getHabitacionById($id){
		$habitacion  = Habitacion::find($id);
		return $habitacion;
	}

	public  function getAllHabitaciones(){
		$habitacion  = Habitacion::orderBy('estado')->get();
		return $habitacion;
	}

}

?>



