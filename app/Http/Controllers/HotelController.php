<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HabitacionService;


class HotelController extends Controller
{
    protected $habitacionService;

    public function __construct(HabitacionService $hService){
        $this->habitacionService = $hService;
    }

    public function index(){

        $habitaciones = $this->habitacionService->getAllHabitacionesByEstado('DISPONIBLE');
        return view('habitacion.index', compact('habitaciones'));
    }

    public function detalle($id){
        $habitacion = $this->habitacionService->getHabitacionById($id);
        return view('habitacion.detalle', compact('habitacion'));
    }

}
