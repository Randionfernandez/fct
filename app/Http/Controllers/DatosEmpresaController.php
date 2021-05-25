<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use \Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\DatosEmpresaRequest;
use App\Models\Tutor;

/**
 *
 * 
 *  Creado con php artisan make:controller DatosEmpresaController --resource
 */
class DatosEmpresaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //

        return redirect('/datosempresa/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('datosempresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DatosEmpresaRequest $request) {

//        Enviar email
//        Mail::to('email_emp')-send(new DatosEmpresaController);

        DB::Transaction(function() {
            $i = request();

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
                        'num_trabajadores' => $i['num_trabajadores'],
                        'titularidad' => $i['titularidad'],
                        'representante_nombre' => $i['representante_nombre'],
                        'representante_nif' => $i['representante_nif'],
                        'nombre_coordinador_fct' => $i['nombre_coordinador_fct'],
                        'nif_coordinador_fct' => $i['nif_coordinador_fct'],
                        'lugar_firma' => $i['lugar_firma'],
                        'fecha_firma' => $i['fecha_firma'],
                        'comentarios' => $i['comentarios']]);

            // Inserción del centro de trabajo usando Query Builder
            DB::table('centros_de_trabajo')->insert([
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
                        'id_emp' => $id_emp,
            ]);

            $tutor->save();
        });

        return "La transacción se realizó con éxito";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
