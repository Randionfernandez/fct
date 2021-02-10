<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Mail;

class DatosEmpresaController extends Controller {

    public function store(Request $request) {



        request()->validate([
            'nombre_emp' => "required|min:3|max:40",
            'cif' => "required",
            //         'email_emp' => "required|email|unique:empresas,email_emp,". $this->id,
            'cp_emp' => "digits:5",
            'sector' => "in:primario,secundario,terciario",
            'titularidad' => "in:publica,privada",
            'cp_ct' => 'digits:5',
                //     'jornada' => "in:continua,partida",
                //     'fecha_firma' => 'date|max:'.date('Y-M-D'),
                ],
                [
                    'nombre_emp.required' => 'Haz el favor de teclear de indicar el nombre de la empresa', 
        ]);


//        // Enviar email
//        Mail::to('email_emp')-send(new DatosEmpresaController);
        // return request('email_emp');   // no necesita Request
        // return request(['email_emp','cif']);
        // return $request;//devuelve un JSON 
        // return $request->all();  // mismo que la anterior
        // return $request->get('email_emp');
        return $request;
    }

}
