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
        Schema::table('habitaciones', function (Blueprint $table) {
              $table->double('precio')->nullable(false)->after('estado');
              $table->text('descripcion')->after('precio');
              $table->string('imagen')->after('descripcion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('habitaciones', function (Blueprint $table) {
            $table->dropColumn('precio');
            $table->dropColumn('descripcion');
            $table->dropColumn('imagen');
        });
    }
};
