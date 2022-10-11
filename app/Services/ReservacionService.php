<?php

namespace App\Services;

use App\Models\Reserva;

class ReservacionService {
	public  function getAllReservaciones(){
		$reservaciones  = Reserva::orderBy('created_at')->paginate(10);
		return $reservaciones;
	}

	public  function getCountReservacionesByEstado($estado){
		$reservaciones  = Reserva::where('estado',$estado)->orderBy('created_at')->count();
		return $reservaciones;
	}

	public  function getSumReservacionesByEstado($estado){
		$reservaciones  = Reserva::where('estado',$estado)->orderBy('created_at')->sum('valor');
		return $reservaciones;
	}

	public  function getAllReservacionesByEstado($estado){
		$reservaciones  = Reserva::where('estado',$estado)->orderBy('created_at')->paginate(10);
		return $reservaciones;
	}

	public function getAllReservacionesByDate($fechaI, $fechaF){
		$res = Reserva::whereBetween('fecha_inicio', [$fechaI, $fechaF])->where('estado','PAGADA')->get();
		return $res;
	}
	
}

?>



