<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');

            $table->string('nombre');

            $table->enum('tipo_habitacion', 
                ['PRIVADA', 'COMPARTIDA']
            )->default('PRIVADA');

            $table->integer('capacidad');
            
            $table->enum('estado', 
                ['DISPONIBLE', 'MANTENIMIENTO', 'RESERVADA']
            )->default('DISPONIBLE');
            
            $table->timestamps();
            $table->foreign('hotel_id')
              ->references('id')->on('hoteles')->onDelete('cascade');


        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }

};
