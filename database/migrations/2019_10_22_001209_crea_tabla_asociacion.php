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
            $table->string('desc_asociacion');
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
