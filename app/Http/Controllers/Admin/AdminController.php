<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ReservacionService;

class AdminController extends Controller
{
    
    protected $reservacionService ;

    public function __construct(ReservacionService $rs)
    {   
        $this->reservacionService = $rs;
        $this->middleware('auth');
    }

    public function index(){
        $reservaciones = $this->reservacionService->getAllReservaciones();
        $reserCantPagadas = $this->reservacionService->getCountReservacionesByEstado('PAGADA');
        $reserCantConfirmada = $this->reservacionService->getCountReservacionesByEstado('CONFIRMADA');
        $reserValorPagadas = $this->reservacionService->getSumReservacionesByEstado('PAGADA');


        return view('admin.ventas', compact('reservaciones','reserCantPagadas','reserValorPagadas','reserCantConfirmada'));
    }

    public function create(Request $req){
        
    }

}
