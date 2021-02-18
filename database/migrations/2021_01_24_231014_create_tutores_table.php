<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //  Falta añadir si dió el consetimiento para consultar el fichero de delitos sexuales.
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tutor_emp', 35)->comment('Puede que se cambie por nombre y apellidos.');
            $table->string('nif_tutor_emp', 12);
            $table->timestamps();

            $table->unsignedBigInteger('id_ct');
            $table->foreign('id_ct')->references('id')->on('centros_de_trabajo');
        });


        DB::statement("comment on table tutores is 'Plantear si un tutor debe vincularse a la empresa y no a un centro de trabajo'");
    }

    /**
     * Reverse the migrations.tutor_fct
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tutores');
    }

}
