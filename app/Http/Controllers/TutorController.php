<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TutorRequest;
use App\Models\Tutor;

class TutorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $tutores = Tutor::orderBy('apellido1_tutor_emp', 'ASC')->paginate();
        return view('tutores.tutores', compact('tutores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('tutores.tutor_create', ['tutor' => new Tutor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Hºttp\Response
     */
    public function store(Tutor $tutor, TutorRequest $request) {

        $tutor->insert($request->validated());

        return back()->with('status', "El tutor ha sido añadido correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor) {
        return view('tutores.tutor_edit', [
            'tutor' => $tutor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor) {
        return view('tutores.tutor_edit', [
            'tutor' => $tutor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tutor $tutor, TutorRequest $request) {
        $tutor->update($request->validated());
        $t = $tutor->nombre_tutor_emp . ' ' . $tutor->apellido1_tutor_emp;
        return redirect(route('tutores.index'))->with('status', 'El tutor ' . $t . ' ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor) {
        $t = $tutor->nombre_tutor_emp . ' ' . $tutor->apellido1_tutor_emp;
        $tutor->delete();
        return redirect()->route('tutores.index')->with('status', "El registro del tutor $t ha sido borrado correctamente");
    }

}
