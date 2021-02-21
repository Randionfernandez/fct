@extends('layouts.layout');

@section('contenido')
    <!-- Tutores -->
    <fieldset class="border p-2">
        <legend>Tutores</legend>

        <!-- Coordinador de FCT, text, opcional -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="nombre_coordinador_fct" class="form-label">Nombre del coordinador de FCT</label>
                <input class="form-control" name="nombre_coordinador_fct" value="{{old('nombre_coordinador_fct')}}" id="nombre_coordinador_fct" aria-describedby="HelpCoordinador">
                <div id="HelpCoordinador" class="form-text">
                    Nombre y apellidos del coordinador de FCT de la empresa (si lo hubiese).
                </div>
            </div>


            <!-- nif del coordinador de FCT, obligatorio se existe coordinador -->
            <div class="mb-3 col-2">
                <label for="nif_coordinador_fct" class="form-label">NIF del coordinador FCT</label>
                <input class="form-control" name="nif_coordinador_fct" value="{{old('nif_coordinador_fct')}}" id="nif_coordinador_fct">
            </div>

        </div>


        <!-- Tutor de FCT, text -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="nombre_tutor_emp" class="form-label">Nombre del tutor</label>
                <input class="form-control" name="nombre_tutor_emp" value="{{old('nombre_tutor_emp')}}" id="nombre_tutor_emp"  aria-describedby="HelpTutor">
                <div id="HelTutor" class="form-text">
                    Nombre y apellidos del tutor de FCT.
                </div>
            </div>


            <!-- nif del tutor de FCT -->
            <div class="mb-3 col-2">
                <label for="nif_tutor_emp" class="form-label">NIF del tutor</label>
                <input class="form-control" type="text" name="nif_tutor_emp" value="{{old('nif_tutor_emp')}}" id="nif_tutor_emp">
            </div>

        </div>


        <!-- Lugar de trabajo del tutor, Supongo que se refiere al centro de trabajo
        Asumimos que pertenece al mismo centro que el descrito por el formulario más arriba.
        Según Gestib, el tutor se vincula a la empresa y no al centro de trabajo. No incluiremos este campo
        que figura en el formulario de referencia.
        -->

    </fieldset>

    
    @endsection