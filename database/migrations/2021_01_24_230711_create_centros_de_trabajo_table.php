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
            $table->timestamps();
            $table->string('nombre_ct', 35);
            $table->string('direccion_ct', 40)->nullable();
            $table->string('poblacion_ct', 40)->nullable();
            $table->char('cp_ct', 5)->nullable();
            $table->string('actividad_ct', 35)->nullable();
            $table->string('email_ct', 35);
            $table->string('telefono1_ct', 12);
            $table->string('telefono2_ct', 12)->nullable();
            $table->string('fax_ct', 12)->nullable();
            $table->enum('jornada', ['continua', 'partida']);
            $table->string('horario_ct', 15);
            
            $table->softDeletes();
            $table->timestamps();

            $table->unsignedBigInteger('id_emp');
            $table->foreign('id_emp')->references('id')->on('empresas');
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
