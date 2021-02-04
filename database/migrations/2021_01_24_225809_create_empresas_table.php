<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration {

    /**->id();->id();
            $table->string('nombre')->unique();
            $table-
            $table->string('nombre')->unique();
            $table-
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_emp')->unique();
            $table->string('cif')->unique();
            $table->string('direccion_emp');
            $table->string('población_emp');
            $table->char('cp_emp', 5);
            $table->string('telefono1_emp');
            $table->string('telefono2_emp')->nullable();
            $table->string('fax_emp')->nullable();
            $table->string('email_emp')->unique();
            $table->enum('sector_productivo', ['primario', 'secundario', 'terciario']);
            $table->string('actividad_principal');
            $table->enum('titularidad', ['publica', 'privada']);
            $table->string('representante_nombre');
            $table->string('representante_nif');
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
        Schema::dropIfExists('empresas');
    }

}
