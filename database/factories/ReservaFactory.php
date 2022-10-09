<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Hotel,Habitacion,Cliente,Reserva};
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservaFactory extends Factory
{

    protected $model = Reserva::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fechaI = Carbon::today()->subDays(rand(0, 365));
        $fechaF = $fechaI->addDays(7);

        return [
            'habitacion_id'=>fake()->randomElement(Habitacion::pluck('id')->toArray()),
            'cliente_id'=>fake()->randomElement(Cliente::pluck('id')->toArray()),
            'fecha_inicio'=>$fechaI,
            'fecha_fin'=>$fechaF,
            'estado'=>fake()->randomElement(['POR_CONFIRMAR', 'CONFIRMADA', 'PAGADA', 'CANCELADA', 'ANULADA']),
            'valor'=>fake()->numberBetween(10000,1000000)
        ];
    }
}
