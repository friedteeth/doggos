<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaTablaAdopcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopcions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_perro');
            $table->foreign('id_perro')
                ->references('id')
                ->on('perros');
            $table->string('nombre_dueno');
            $table->string('apellidos_dueno');
            $table->string('motivo_adopcion');
            $table->char('telefono_dueno', 10);
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
        Schema::dropIfExists('adopcions');
    }
}
