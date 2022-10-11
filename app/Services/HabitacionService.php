<?php

namespace App\Services;

use App\Models\Habitacion;
use Exception;
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

	public function checkDisponibilidad($habitacion){
		$habitacion = $this->getHabitacionById($habitacion);
		if($habitacion->estado!="DISPONIBLE"){
			throw new Exception("la habitacion no se encuentra disponible");
		}
	}

	public function checkCapacidad($habitacion, $adultos, $childrens){
		$habitacion = $this->getHabitacionById($habitacion);
		
		if($adultos+$childrens > $habitacion->capacidad ){
			throw new Exception("Sobrepasa la capacidad de esta habitacion la cual es de {$habitacion->capacidad}");
		}
	}

	public function changeStatusHabitacion($habitacion, $estado){
		$habitacion = $this->getHabitacionById($habitacion);
		$habitacion->estado=$estado;
		$habitacion->update();
	}

}

?>



