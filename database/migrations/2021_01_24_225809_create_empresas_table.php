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
            $table->string('nombre_emp',35)->unique();
            $table->string('cif',10)->unique();
            $table->string('direccion_emp',40);
            $table->string('poblacion_emp',35);
            $table->char('cp_emp', 5);
            $table->string('telefono1_emp',12);
            $table->string('telefono2_emp',12)->nullable();
            $table->string('fax_emp',12)->nullable();
            $table->string('email_emp',35)->unique();
            $table->enum('sector', ['primario', 'secundario', 'terciario']);
            $table->string('actividad_principal', 35);
            $table->enum('titularidad', ['publica', 'privada']);
            $table->integer('num_trabajadores');
            $table->string('representante_nombre',35);
            $table->string('representante_nif',12);
            $table->string('nombre_coordinador_fct',35)->nullable()->comment('Puede suprimirse, asumiendo que todo coordinador figure en tabla de tutores');
            $table->string('nif_coordinador_fct',12)->nullable()->comment('Puede existir a nivel de empresa o de centro de trabajo');
            $table->string('lugar_firma',35)->comment('Es posible que se elimine, pues el lugar que interesa es el del Acuerdo');
            $table->date('fecha_firma')->comment('Es posible que se elimine, pues la fecha que interesa es el del Acuerdo');
            $table->text('comentarios')->nullable();
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
