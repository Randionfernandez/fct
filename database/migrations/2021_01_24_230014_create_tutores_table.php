<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  Falta añadir si dió el consetimiento para consultar el fichero de delitos sexuales.
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('nif');
            $table->string('centro_de_trabajo');
            $table->enum('tipo',['empresa','profesor'])->comment('Puede que creemos una tabla para empresa y otra para tutores del centro educativo.');
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
        Schema::dropIfExists('tutores');
    }
}
