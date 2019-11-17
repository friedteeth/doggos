<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaTablaPerro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_perro');
            $table->string('descripcion_color');
            $table->string('complexion');
            $table->integer('edad');
            $table->boolean('esterilizado');
            $table->boolean('desparacitado');
            $table->boolean('vacunado');
            $table->string('genero');
            $table->string('imagen_perro');
            $table->string('otros_detalles');
            $table->string('comportamiento');
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
        Schema::dropIfExists('perros');
    }
}
