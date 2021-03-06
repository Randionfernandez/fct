<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro_de_trabajo extends Model {

    use HasFactory;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $dates = ['Deleted_at'];
    protected $fillable = [
        'nombre',
        'direccion',
        'poblacion',
        'cp',
        'actividad',
        'num_trabajadores',
        'email',
        'telefono1',
        'telefono2',
        'jornada',
        'horario',
        'nombre_coordinador_fct',
        'nif_coordinador_fct',
        'comentarios',
    ];

    public function empresa() {
        return $this->belongsTo(Empresa::class);
    }

}

;
