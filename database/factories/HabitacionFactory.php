<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Habitacion;
use App\Models\Hotel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HabitacionFactory extends Factory
{


    protected $model = Habitacion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>fake()->name(),
            'hotel_id'=>fake()->randomElement(Hotel::pluck('id')->toArray()),
            'capacidad'=>fake()->numberBetween(1,10),
            'estado'=>fake()->randomElement(['DISPONIBLE', 'MANTENIMIENTO', 'RESERVADA']),
            'tipo_habitacion'=>fake()->randomElement(['PRIVADA','COMPARTIDA']),
            'precio'=>fake()->numberBetween(10000,100000),
            'descripcion'=>fake()->paragraph(),
            'imagen'=>'https://random.imagecdn.app/500/500',
        ];
    }
}
