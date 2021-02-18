<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Tutor;

class DatosEmpresaController extends Controller {

    public function store(Request $request) {


// Validación de ejemplo, pero incompleta, de los datos de empresa obtenidos del formulario correspondiente
        request()->validate([
            'nombre_emp' => "required|unique:empresas|min:3|max:40",
            'cif' => "required",
            'direccion_emp' => 'required|string|max:40',
            'poblacion_emp' => 'required',
            //'email_emp' => "required|email|unique:empresas,email_emp,". $this->id,
            'email_emp' => "required|email|unique:empresas",
            'cp_emp' => "digits:5",
            'sector' => "in:primario,secundario,terciario",
            'actividad_principal' => "required",
            'titularidad' => "in:publica,privada",
            'num_trabajadores' => 'integer',
            'representante_nombre' => 'required',
            'representante_nif' => 'required',
            'nombre_ct' => 'required',
            'cp_ct' => "nullable|digits:5",
            'email_ct' => 'required',
            'telefono1_ct' => 'required',
            'jornada' => "in:continua,partida",
            'nombre_tutor_emp' => 'required',
            'nif_tutor_emp' => 'required',
            'lugar_firma' => "required'|string|max:35",
            'fecha_firma' => 'date|max:' . date('Y-M-D'),
                ],
                [
                    'nombre_emp.required' => 'Haz el favor de teclear el nombre de la empresa',
        ]);


//        Enviar email
//        Mail::to('email_emp')-send(new DatosEmpresaController);
//        Estás invitado a probar sucesivamente los siguientes return
        // return request('email_emp');   // no necesita Request
        // return request(['email_emp','cif']);
        // return $request;//devuelve un JSON 
        // return $request->all();  // mismo que la anterior
        // return $request->get('email_emp');
        // return $request;


        $i = $request->all();

        DB::Transaction(function() {
            global $i;
            // Inserción usando sql raw; dependiente del SGBD que se use
//            DB::insert('insert into empresas ( nombre_emp, cif, direccion_emp, poblacion_emp, cp_emp, telefono1_emp, telefono2_emp, fax_emp, email_emp, sector, ' .
//                    ' actividad_principal, titularidad, num_trabajadores, representante_nombre, representante_nif, nombre_coordinador_fct, nif_coordinador_fct, comentarios) ' .
//                    ' values (:nombre_emp, :cif, :direccion_emp, :poblacion_emp, :cp_emp, :telefono1_emp, :telefono2_emp, :fax_emp, :email_emp, :sector, ' .
//                    ' :actividad_principal, :titularidad, :num_trabajadores, :representante_nombre, :representante_nif, :nombre_coordinador_fct, :nif_coordinador_fct, :comentarios)',

            $id_emp = DB::table('empresas')->insertGetId(
                    ['nombre_emp' => $i['nombre_emp'],
                        'cif' => $i['cif'],
                        'direccion_emp' => $i['direccion_emp'],
                        'poblacion_emp' => $i['poblacion_emp'],
                        'cp_emp' => $i['cp_emp'],
                        'telefono1_emp' => $i['telefono1_emp'],
                        'telefono2_emp' => $i['telefono2_emp'],
                        'fax_emp' => $i['fax_emp'],
                        'email_emp' => $i['email_emp'],
                        'sector' => $i['sector'],
                        'actividad_principal' => $i['actividad_principal'],
                        'titularidad' => $i['titularidad'],
                        'num_trabajadores' => $i['num_trabajadores'],
                        'representante_nombre' => $i['representante_nombre'],
                        'representante_nif' => $i['representante_nif'],
                        'nombre_coordinador_fct' => $i['nombre_coordinador_fct'],
                        'nif_coordinador_fct' => $i['nif_coordinador_fct'],
                        'lugar_firma' => $i['lugar_firma'],
                        'fecha_firma' => $i['fecha_firma'],
                        'comentarios' => $i['comentarios']]);

            // Inserción del centro de trabajo usando Query Builder
            $id_ct = DB::table('centros_de_trabajo')->insertGetId([
                'nombre_ct' => $i['nombre_ct'],
                'direccion_ct' => $i['direccion_ct'],
                'poblacion_ct' => $i['poblacion_ct'],
                'cp_ct' => $i['cp_ct'],
                'actividad_ct' => $i['actividad_ct'],
                'email_ct' => $i['email_ct'],
                'telefono1_ct' => $i['telefono1_ct'],
                'telefono2_ct' => $i['telefono2_ct'],
                'fax_ct' => $i['fax_ct'],
                'jornada' => $i['jornada'],
                'horario_ct' => $i['horario_ct'],
                'id_emp' => $id_emp,
            ]);

            // Inserción usando el modelo Tutor
            $tutor = Tutor::create([
                        'nombre_tutor_emp' => $i['nombre_tutor_emp'],
                        'nif_tutor_emp' => $i['nif_tutor_emp'],
                        'id_ct' => $id_ct,
            ]);

            $tutor->save();
        });

        return "La transacción se realizó con éxito";
    }

}
