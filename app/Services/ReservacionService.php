<?php

namespace App\Services;

use App\Models\{Reserva, Cliente, Habitacion};
use Log;
use Carbon\Carbon;

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

	public function create($data){
		try {
			
			$habitacion = Habitacion::find($data['habitacion_id']);
			$fechaI = Carbon::create($data['fecha_inicio']);
			$fechaF = Carbon::create($data['fecha_fin']);
			$dias = $fechaF->diffInDays($fechaI);
			$cliente = Cliente::firstOrCreate(['nombre'=>$data['nombre'],'numero_identificacion'=>$data['numero_identificacion'],'celular'=>$data['celular'],'email'=>$data['email'],'nacionalidad'=>$data['nacionalidad'],'sexo'=>$data['sexo']]);
			$data['estado'] = 'PAGADA';
			$data['cliente_id'] = $cliente->id;
			$data['valor'] = $habitacion->precio*$dias;
			Reserva::create($data);
			$habitacion->estado="RESERVADA";
			$habitacion->update();
		} catch (\Exception $e) {
			Log::info($e->getMessage());
			return false;
		}

		return true;
	}
	
}

?>



