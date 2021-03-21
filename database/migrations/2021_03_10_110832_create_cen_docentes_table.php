<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenDocentesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cen_docentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->string('denominacion', 35);
            $table->string('codigo', 8)->unique();
            $table->enum('tipo_cen', ['cp', 'ies', 'cifp'])->default('cifp');
            $table->enum('titularidad_cen', ['publica', 'privada', 'concertada'])->default('publica');
            $table->string('dir_postal', 5)->nullable()->comment('Dirección postal');
            $table->string('cp', 5)->comment('Códgio postal');
            $table->string('tel', 12)->nullable();
            $table->string('fax', 12)->nullable();
            $table->string('email', 35)->nullable();
            $table->string('dir_nom', 25);
            $table->string('dir_apel1', 25)->comment('Primer apellido del director actual');
            $table->string('dir_apel2', 25)->nullable();
            $table->string('dir_ident', 10);
            $table->enum('tipo_ident', ['nif', 'nie', 'pas'])->default('nif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cen_docentes');
    }

}
