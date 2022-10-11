<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ReservacionService;
use Codedge\Fpdf\Fpdf\Fpdf;
use Carbon\Carbon;
use Auth;

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

    public function reporteView(Request $req){
        return view('admin.reportes');
    }

    public function report(Request $req){
        $fechaI = Carbon::create($req->from)->format('Y-m-d');
        $fechaF = Carbon::create($req->to)->format('Y-m-d');

        $reservas = $this->reservacionService->getAllReservacionesByDate($fechaI, $fechaF);

        $fpdf = new Fpdf();
        $fpdf->AddPage();
        $fpdf->Image('images/logo-lobby.png');
        $fpdf->SetFont('Arial', 'B', 15);
        
        $fpdf->setY($fpdf->getY()-20);
        $fpdf->Cell(150, 5, "Resumen de Ventas",0,1,'R');
        $fpdf->Cell(160, 5, "del $fechaI al $fechaF",0,1,'R');
        $fpdf->SetFont('Arial', 'B', 11);

        $fpdf->ln();
        $fpdf->ln();
        $fpdf->ln();
        $fpdf->Cell(5, 4, '#',1,0,'C');
        $fpdf->Cell(35, 4, 'Hotel',1,0,'C');
        $fpdf->Cell(40, 4, 'Habitacion',1,0,'C');
        $fpdf->Cell(30, 4, 'Identificacion',1,0,'C');
        $fpdf->Cell(40, 4, 'Cliente',1,0,'C');
        $fpdf->Cell(20, 4, 'valor',1,1,'C');
        $fpdf->SetFont('Arial', '', 10);
        
        $total = 0;
        foreach ($reservas as $key => $value) {
            $fpdf->Cell(5, 4, ($key+1),1,0,'L');
            $fpdf->Cell(35, 4, $value->habitacion->hotel->nombre,1,0,'L');
            $fpdf->Cell(40, 4, $value->habitacion->nombre,1,0,'L');
            $fpdf->Cell(30, 4, $value->cliente->numero_identificacion,1,0,'L');
            $fpdf->Cell(40, 4, $value->cliente->nombre,1,0,'L');
            $fpdf->Cell(20, 4, "$". number_format($value->valor),1,1,'L'); 
            $total +=$value->valor;
        }
        $fpdf->ln();        
        $fpdf->Cell(150, 4, 'TOTAL',1,0,'C');
        $fpdf->Cell(20, 4, "$". number_format($total),1,1,'L'); 

        $fpdf->ln();
        $fpdf->ln();
        $fpdf->Cell(100, 4, 'Reporte Generado: '.Auth::user()->name." a las: ".Carbon::now(),0,0,'C');

        $fpdf->Output('reporte_venta.pdf','D');
        exit;
    }

}
