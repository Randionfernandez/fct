<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model {

    use HasFactory;

    protected $fillable = [
        'nombre_emp',
        'cif',
        'direccion_emp',
        'población_emp',
        'cp_emp',
        'telefono1_emp',
        'telefono2_emp',
        'fax_emp',
        'email_emp',
        'sector_productivo',
        'actividad_principal',
        'titularidad',
        'representante_nombre',
        'representante_nif',
        'nombre_coordinador_fct',
        'nif_coordinador_fct',
        'comentarios',
    ];

}
