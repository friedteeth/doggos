<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaTablaAsociacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asociacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_asociacion');
            $table->char('telefono', 10);
            $table->string('actividades');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('correo')->nullable();
            $table->string('pag_web')->nullable();
            $table->string('inf_donativos')->nullable();
            $table->string('imagen_asociacion');
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
        Schema::dropIfExists('asociacions');
    }
}
