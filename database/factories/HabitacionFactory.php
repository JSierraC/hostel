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
            'imagen'=>$this->getImagen()[fake()->numberBetween(0,26)],
        ];
    }

    public function getImagen(){

        $habitaciones =[
'https://st2.depositphotos.com/7389924/10244/i/450/depositphotos_102441812-stock-photo-interior-living-room-apartments-in.jpg',
'https://static9.depositphotos.com/1086013/1149/i/450/depositphotos_11497565-stock-photo-house-interior.jpg',
'https://st.depositphotos.com/2000799/1949/i/450/depositphotos_19492727-stock-photo-hotel-rooms.jpg',
'https://st.depositphotos.com/1000347/4597/i/450/depositphotos_45976199-stock-photo-livingroom-with-furniture.jpg',
'https://st.depositphotos.com/1009647/4951/i/450/depositphotos_49516177-stock-photo-modern-interior.jpg',
'https://static9.depositphotos.com/1007373/1116/i/450/depositphotos_11164055-stock-photo-modern-master-bedroom-interior.jpg',
'https://static9.depositphotos.com/1048902/1222/i/450/depositphotos_12225231-stock-photo-loft-bedroom.jpg',
'https://static4.depositphotos.com/1009647/346/i/450/depositphotos_3463602-stock-photo-childroom.jpg',
'https://static5.depositphotos.com/1047404/494/i/450/depositphotos_4946755-stock-photo-modern-purple-living-room.jpg',
'https://st.depositphotos.com/1987395/1941/i/450/depositphotos_19414791-stock-photo-interior-design-modern-living-room.jpg',
'https://st.depositphotos.com/1000383/1374/i/450/depositphotos_13746580-stock-photo-modern-minimalism-style-drawing-room.jpg',
'https://static7.depositphotos.com/1035257/745/i/450/depositphotos_7450281-stock-photo-modern-living-room-with-wood.jpg',
'https://static8.depositphotos.com/1542142/1034/i/450/depositphotos_10340301-stock-photo-interior-with-sofa-plant-and.jpg',
'https://static4.depositphotos.com/1005951/317/i/450/depositphotos_3171994-stock-photo-bright-living-room.jpg',
'https://st.depositphotos.com/1707991/3777/i/450/depositphotos_37777211-stock-photo-sunny-living-room.jpg',
'https://st.depositphotos.com/1010043/4478/i/450/depositphotos_44783059-stock-photo-living-room.jpg',
'https://static5.depositphotos.com/1010643/464/i/450/depositphotos_4641698-stock-photo-modern-house-interior-large-expensive.jpg',
'https://st.depositphotos.com/2249091/2496/i/450/depositphotos_24962203-stock-photo-travertine-house-modern-living-room.jpg',
'https://st2.depositphotos.com/4055463/8164/i/600/depositphotos_81645574-stock-photo-modern-living-room-3d-rendering.jpg',
'https://static8.depositphotos.com/1100172/963/i/450/depositphotos_9632439-stock-photo-living-room.jpg',
'https://static8.depositphotos.com/1392258/865/i/450/depositphotos_8658107-stock-photo-large-family-room-with-fireplace.jpg',
'https://static6.depositphotos.com/1141267/664/i/450/depositphotos_6644903-stock-photo-a-living-room.jpg',
'https://static9.depositphotos.com/1041088/1184/i/450/depositphotos_11842868-stock-photo-beautiful-peach-and-red-liiving.jpg',
'https://static8.depositphotos.com/1040728/932/i/450/depositphotos_9324715-stock-photo-modern-living-room.jpg',
'https://static7.depositphotos.com/1321174/795/i/450/depositphotos_7955113-stock-photo-modern-living-room.jpg',
'https://st.depositphotos.com/1247468/2230/i/450/depositphotos_22308753-stock-photo-stylish-living-room.jpg',
'https://static4.depositphotos.com/1009647/335/i/450/depositphotos_3353064-stock-photo-modern-interior.jpg',
];

    return $habitaciones;
    }
}
