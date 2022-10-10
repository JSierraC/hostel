<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function habitacion(){
        return $this->belongsTo('\App\Models\Habitacion','habitacion_id');
    }

    public function cliente(){
        return $this->belongsTo('\App\Models\Cliente','cliente_id');
    }

    #ENUM('POR_CONFIRMAR', 'CONFIRMADA', 'PAGADA', 'CANCELADA', 'ANULADA')
    public function getCssEstado(){
        $class = '';
        switch ($this->estado) {
            case 'POR_CONFIRMAR':
                    $class = 'warning';
                break;
            case 'CONFIRMADA':
                    $class='primary';
                break;
            case 'PAGADA':
                    $class = 'success';
                break;
            case 'CANCELADA':
                 $class='danger';    
                break;
            case 'ANULADA':
                 $class='danger'; 
                break;    
            default:
                 $class='default';
                break;
        }

        return $class;
    }
}
