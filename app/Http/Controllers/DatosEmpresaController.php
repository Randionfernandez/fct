<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatosEmpresaController extends Controller {

    public function store(Request $request) {
        // return request('email_emp');   // no necesita Request
        // return request(['email_emp','cif']);
        // return $request;//devuelve un JSON 
        // return $request->all();  // mismo que la anterior
        // return $request->get('email_emp');

        
        request()->validate([
            'nombre_emp' => "required",
            'cif' => "required"
        ]);
        
        
        
        return $request;
    }

}
