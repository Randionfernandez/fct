<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model {

    use HasFactory;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $table = 'tutores';
    
    
    protected $dates = ['Deleted_at'];
    protected $fillable = [
        'nif_tutor_emp',
        'documento',
        'nombre_tutor_emp',
        'apellido1_tutor_emp',
        'apellido2_tutor_emp',
        'pais_documento',
        'provincia',
        'municipio',
        'status',
        'telefono',
        'email',
        'id_emp',
        'nombre_emp',
    ];

}
