<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TutoresRequest;
use App\Models\Tutor;

class TutoresController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tutores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $request->validate([
            'nif_tutor_emp' => 'required|min:8|max:12',
            'documento' => 'required|in:dni,nif,pasaporte',
            'nombre_tutor_emp' => 'required|string',
            'apellido1_tutor_emp' => 'required|string',
            'apellido2_tutor_emp' => 'string',
//            'pais_documento' => 'required',
//            'provincia' => 'required',
//            'municipio' => 'required',
            'status' => 'required',
            'telefono' => 'string|max:15',
            'email' => 'email',
            //'id_emp' => 'required',
        ]);


        $i = $request->all();
        // Inserción usando el modelo Tutor
        $tutor = Tutor::create([
                    'nif_tutor_emp' => $i['nif_tutor_emp'],
                    'documento' => $i['documento'],
                    'nombre_tutor_emp' => $i['nombre_tutor_emp'],
                    'apellido1_tutor_emp' => $i['apellido1_tutor_emp'],
                    'apellido2_tutor_emp' => $i['apellido2_tutor_emp'],
//            'pais_documento' => $i[''],
//            'provincia' => $i[''],
//            'municipio' => $i[''],
                    'status' => $i['status'],
                    'telefono' => $i['telefono'],
                    'email' => $i['email'],
                    'nombre_emp' => $i['nombre_emp'],
                        //        'id_emp' => $i['id_emp'],
        ]);

        $tutor->save();
        
        return "El tutor se ha añadido a nuestra base de datos";
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
