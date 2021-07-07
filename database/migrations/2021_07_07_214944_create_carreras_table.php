<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Carrera', function (Blueprint $table) {
            $table->id('pkCarrera');
            $table->string('nombre', 250)->nullable(false);
            $table->integer('usuarioCreacion');
            $table->integer('usuarioActualizacion');
            $table->boolean('borrado')->nullable(false);
            $table->timestamp('fechaBorrado');
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
        Schema::dropIfExists('Carrera');
    }
}
