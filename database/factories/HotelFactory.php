<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HotelFactory extends Factory
{
    
    protected $model = Hotel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>fake()->name(),
            'direccion'=>fake()->address(),
            'imagen'=>'https://random.imagecdn.app/1200/800',
            'celular'=>fake()->phoneNumber(),
            'email'=>fake()->email()
        ];
    }
}
