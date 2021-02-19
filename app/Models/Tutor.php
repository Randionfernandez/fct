<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model {

    use HasFactory;
    protected $table='tutores';

    protected $fillable = [
        'nombre_tutor_emp',
        'nif_tutor_emp',
        'centro_de_trabajo',
    ];

}