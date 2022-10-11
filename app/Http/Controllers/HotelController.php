<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HabitacionService;
use App\Services\ReservacionService;
use App\Models\Habitacion;
use Illuminate\Support\Facades\Validator;


class HotelController extends Controller
{
    protected $habitacionService;
    protected $reservacionService;

    public function __construct(HabitacionService $hService, ReservacionService $rService){
        $this->habitacionService = $hService;
        $this->reservacionService = $rService;
    }

    public function index(){

        $habitaciones = $this->habitacionService->getAllHabitacionesByEstado('DISPONIBLE');
        return view('habitacion.index', compact('habitaciones'));
    }

    public function detalle($id){
        $habitacion = $this->habitacionService->getHabitacionById($id);
        return view('habitacion.detalle', compact('habitacion'));
    }

    public function reservar(Habitacion $habitacion){
        try {
            $this->habitacionService->checkDisponibilidad($habitacion->id);
        } catch (\Exception $e) {
            return redirect()->route('home');
        }
        return view('habitacion.reservar', compact('habitacion'));
    }

    public function guardar(Request $request){
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'numero_identificacion' => 'required',
            'sexo' => 'required',
            'nacionalidad' => 'required',
            'email' => 'required',
            'celular' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required',
        ]);
 
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        try {
            $this->habitacionService->checkDisponibilidad($request->habitacion_id);
            $this->habitacionService->checkCapacidad($request->habitacion_id, $request->adultos, $request->childrens);

            $habitacion = $this->reservacionService->create($request->all());
            if($habitacion){
                return back()->withSuccess(['Reserva Realizada']);
            }else{
                return back()->withErrors(['Uppss Problema al generar la reserva'])->withInput();;
            }

        } catch (\Exception $e) {
            return back()->withErrors([$e->getMessage()])->withInput();;
        }

        



        
    }
    

}
