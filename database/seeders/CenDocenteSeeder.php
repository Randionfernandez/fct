<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cen_docente;

class CenDocenteSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Cen_Docente::truncate();
        $centrosdocentes = factory(CenDocenteSeeder::class)->times(10)->create();

//        $cendocentes->each(function($cendocente)){
//            factory(CenDocente::class)->times(5)->create();
//        };

    }

}
