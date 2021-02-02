<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosDeTrabajoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('centros_de_trabajo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('poblacion');
            $table->char('cp', 5);
            $table->string('actividad');
            $table->string('num_trabajadores');
            $table->string('email');
            $table->string('telefono1');
            $table->string('telefono2')->nullable();
            $table->enum('jornada', ['continua', 'partida']);
            $table->string('horario');
            $table->string('nombre_coordinador_fct')->nullable()->comment('Puede suprimirse, asumiendo que todo coordinador figure en tabla de tutores');
            $table->string('nif_coordinador_fct')->nullable()->comment('Puede existir a nivel de empresa o de centro de trabajo');
            $table->string('comentarios')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('centros_de_trabajo');
    }

}
