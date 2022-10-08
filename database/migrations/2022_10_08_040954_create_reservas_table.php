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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('habitacion_id');
            $table->unsignedBigInteger('cliente_id');


            $table->timestamp('fecha_inicio')->nullable(false);
            $table->timestamp('fecha_fin')->nullable(false);

            $table->enum('estado', 
                ['POR_CONFIRMAR','CONFIRMADA', 'PAGADA', 'CANCELADA', 'ANULADA']
            )->default('POR_CONFIRMAR');

            $table->double('valor')->nullable(false);

            $table->foreign('habitacion_id')
              ->references('id')->on('habitaciones')->onDelete('cascade');
            $table->foreign('cliente_id')
              ->references('id')->on('clientes')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }

};
