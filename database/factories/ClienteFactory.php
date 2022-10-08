<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{

    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>fake()->name(),
            'numero_identificacion'=>fake()->unique()->randomNumber(9),
            'celular'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'nacionalidad'=>fake()->country(),
            'sexo'=>fake()->randomElement(['M','F'])
            
        ];
    }
}
