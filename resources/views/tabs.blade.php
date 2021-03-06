@extends('layouts.layout')<!-- comment -->

@section('contenido')
<!-- Tabs navs -->
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a
            class="nav-link"
            id="ex1-tab-1"
            data-bs-toggle="tab"
            href="#ex1-tabs-1"
            role="tab"
            aria-controls="ex1-tabs-1"
            aria-selected="false"
            >Datos de empresa</a>
    </li>
    <li class="nav-item active" role="presentation">
        <a
            class="nav-link"
            id="ex1-tab-2"
            data-bs-toggle="tab"
            href="#ex1-tabs-2"
            role="tab"
            aria-controls="ex1-tabs-2"
            aria-selected="true"
            >Datos del centro de trabajo</a>
    </li>
    <li class="nav-item" role="presentation">
        <a
            class="nav-link"
            id="ex1-tab-3"
            data-bs-toggle="tab"
            href="#ex1-tabs-3"
            role="tab"
            aria-controls="ex1-tabs-3"
            aria-selected="false"
            >Otros datos</a>
    </li>
</ul>
<!-- Tabs navs -->
<form method='post'>
<!-- Tabs content -->
<div class="tab-content" id="ex1-content">
    <div
        class="tab-pane fade show active"
        id="ex1-tabs-1"
        role="tabpanel"
        aria-labelledby="ex1-tab-1"
        >
        <!-- Nombre de la empresa, texto, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="nombre_emp" class="form-label">{{__('datosempresa.nombre_emp')}}</label>
                <input class="form-control" name="nombre_emp" value="{!! old('nombre_emp') !!}" id="nombre_emp">
                <div>{!! $errors->first('nombre_emp','<small>:message</small>') !!}</div>   
            </div>


            <!-- CIF de la empresa, texto, obligatorio -->
            <div class="mb-3 col-2">
                <label for="cif" class="form-label">CIF</label>
                <input class="form-control" name="cif" value="{{old('cif')}}" id="cif">
                {{$errors->first('cif')}}
            </div>

        </div>


        <!-- Dirección de la empresa , text, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="direccion_emp" class="form-label">Direccón postal</label>
                <input class="form-control" name="direccion_emp" value="{{old('direccion_emp')}}" id="direccion_emp">
            </div>


            <!-- Población, text, obligatorio -->
            <div class="mb-3 col-4">
                <label for="poblacion_emp" class="form-label">Población</label>
                <input class="form-control" name="poblacion_emp" value="{{old('poblacion_emp')}}" id="poblacion_emp">
            </div>


            <!-- Código postal, texto 5 numéricos -->
            <div class="mb-3 col-2">
                <label for="cp_emp" class="form-label">Código postal</label>
                <input class="form-control" maxlength="5" name="cp_emp" value="{{old('cp_emp')}}" id="cp_emp" placeholder="07123">
            </div>
        </div>


        <!-- Email, obligatorio -->
        <div class="row align-items-start">
            <!-- Email, email, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="email_emp" class="form-label">E-mail</label>
                <input class="form-control" type="email" name="email_emp" value="{{old('email_emp')}}" id="email_emp" placeholder="name@example.com" aria-describedby="HelpEmail_emp">
                <div id="HelpEmail_emp" class="form-text">Nunca compartiremos su email con otras personas o empresas.</div>
            </div>

            <!-- Teléfono 1, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="telefono1_emp" class="form-label">Teléfono 1</label>
                <input class="form-control" type="tel" name="telefono1_emp" list="listatelefonos" value="{{old('telefono1_emp')}}" id="telefono1_emp"  placeholder="971 123 456">
            </div>


            <!-- Teléfono 2, opcional -->
            <div class="mb-3 col-auto">
                <label for="telefono2_emp" class="form-label">Teléfono 2</label>
                <input class="form-control" type="tel" name="telefono2_emp" value="{{old('telefono2_emp')}}" id="telefono2_emp" placeholder="971 123 456">
            </div>


            <!-- Fax, opcional -->
            <div class="mb-3 col-auto">
                <label for="fax_emp" class="form-label">Fax</label>
                <input class="form-control" type="tel" name="fax_emp" value="{{old('fax_emp')}}" id="fax_emp" placeholder="971 123 456">
            </div>
        </div>


        <!-- Sector productivo, radio, obligatorio -->
        <div class="bg-ligth">
            <h3 class="inline">Sector productivo</h3>
            <div class="row ml-6">
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="sector" value="primario" {{ (old('sector') == "primario") ? "checked" : ""}} id="id_primario">
                    <label class="form-check-label" for="id_primario">
                        Primario
                    </label>
                </div>
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="sector" value="secundario" {{ (old('sector') == "secundario") ? "checked" : ""}} id="id_secundario">
                    <label class="form-check-label" for="id_secundario">
                        Secundario
                    </label>
                </div>
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="sector" value="terciario" {{ (old('sector') == "terciario") ? "checked" : ""}} id="id_terciario">
                    <label class="form-check-label" for="id_terciario">
                        Terciario
                    </label>
                </div>
            </div>
        </div>


        <!-- Actividad principal, texto -->
        <div class="mb-3">
            <label for="actividad_emp" class="form-label">Actividad principal</label>
            <input class="form-control"  name="actividad_emp" value="{{old('actividad_emp')}}" id="actividad_emp" placeholder="Actividad principal">
        </div>


        <!-- Titularidad, -->
        <div class="row align-items-start">
            <div class="form-check col-2">
                <input class="form-check-input" type="radio" name="titularidad" value="publica" {{ (old('titularidad') == "publica") ? "checked" : ""}} id="id_publica">
                <label class="form-check-label" for="id_publica">
                    Pública
                </label>
            </div>
            <div class="form-check col-2">
                <input class="form-check-input" type="radio" name="titularidad" value="privada" {{ (old('titularidad') == "privada") ? "checked" : ""}} id="id_privada">
                <label class="form-check-label" for="id_privada">
                    Privada
                </label>
            </div>
        </div>


        <h5>Representante de la empresa</h5>

        <!-- Nombre del representante de la empresa, text, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="nombre_representante_em" class="form-label">Nombre</label>
                <input class="form-control" name="nombre_representante_emp" value="{{old('nombre_representante_emp')}}" id="nombre_representante_emp" aria-describedby="HelpBlock">
                <div id="HelpBlock" class="form-text">
                    Nombre y apellidos del representante de la empresa.
                </div>
            </div>


            <!-- nif del representante de la empresa, obligatorio -->
            <div class="mb-3 col-2">
                <label for="nif_representante_emp" class="form-label">NIF</label>
                <input class="form-control" name="nif_representante_emp" value="{{old('nif_representante_emp')}}" id="nif_representante_em">
            </div>

        </div>



    </div>


    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">


        <!-- Nombre del centro de trabajo, text, obligatorio -->
        <div class="mb-3 col-6">
            <label for="nombre_ct" class="form-label">Nombre</label>
            <input class="form-control" name="nombre_ct" value="{{old('nombre_ct')}}" id="nombre_ct">
        </div>


        <!-- Dirección del centro de trabajo -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="direccion_ct" class="form-label">Direccón postal</label>
                <input class="form-control" name="direccion_ct" value="{{old('direccion_ct')}}" id="direccion_ct">
            </div>

            <!-- Población, text, obligatorio -->
            <div class="mb-3 col-4">
                <label for="poblacion_ct" class="form-label">Población</label>
                <input class="form-control" name="poblacion_ct" value="{{old('poblacion_ct')}}" id="poblacion_ct">
            </div>

            <!-- Código postal, texto 5 numéricos -->
            <div class="mb-3 col-2">
                <label for="cp_ct" class="form-label">Código postal</label>
                <input class="form-control" name="cp_ct" maxlength="5" value="{{old('cp_ct')}}" id="cp_ct" placeholder="07123">
            </div>
        </div>


        <!-- Actividad, text, opcional? -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="actividad_ct" class="form-label">Actividad principal</label>
                <input class="form-control" name="actividad_ct" value="{{old('actividad_ct')}}" id="actividad_ct">
            </div>

            <!-- Número de trabajadores -->
            <div class="mb-3 col-4">
                <label for="num_trabajadores_ct" class="form-label">Número de trabajadores</label>
                <input class="form-control" name="num_trabajadores_ct" value="{{old('num_trabajadores_ct')}}" id="num_trabajadores_ct">
            </div>
        </div>


        <!-- Email, email, obliglatorio -->
        <div class="row align-items-start">
            <!-- Email, email, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="email_ct" class="form-label">E-mail</label>
                <input class="form-control" type="email" name="email_ct" value="{{old('email_ct')}}" id="email_ct" placeholder="name@example.com">
                <div id="emailHelp" class="form-text">Nunca compartiremos su email con otras personas o empresas.</div>
            </div>

            <!-- Teléfono 1, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="telefono1_ct" class="form-label">Teléfono 1</label>
                <input class="form-control" type="tel" name="telefono1_ct" value="{{old('telefono1_ct')}}" pattern="[0-9]{9,12}" id="telefono1_ct"  placeholder="971 123 456">
            </div>


            <!-- Teléfono 2, opcional -->
            <div class="mb-3 col-auto">
                <label for="telefono2_ct" class="form-label">Teléfono 2</label>
                <input class="form-control" type="tel" name="telefono2_ct" value="{{old('telefono2_ct')}}" id="telefono2_ct" placeholder="971 123 456">
            </div>


            <!-- Fax, opcional -->
            <div class="mb-3 col-auto">
                <label for="fax_ct" class="form-label">Fax</label>
                <input class="form-control" type="tel" name="fax_ct" value="{{old('fax_ct')}}" id="fax_ct" placeholder="971 123 456">
            </div>
        </div>


        <!-- Tipo de jornada,  radio,obligatorio 
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="jornadacontinua">
                Jornada continua
            </label> 
            <input class="form-check-input" type="radio" name="jornada[]" value="continua" id="jornadacontinua">

        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="jornadapartida">
                Jornada partida
            </label>
            <input class="form-check-input" type="radio" name="jornada" value="partida" id="jornadapartida">

        </div>
        -->
        <div class="mb-3 col-4">
            <label for="jornada" class="form-label">Tipo de jornada</label>
            <select class="form-control" name='jornada' id="jornada">
                <option value="continua" @if (old('jornada') === 'continua') selected @endif>Continua</option>
                <option value="partida" @if (old('jornada') === 'partida') selected @endif>Partida</option>
            </select>
        </div>


        <!-- Horario, text, opcional -->
        <div class="mb-3 col-md-2">
            <label for="horario_ct" class="form-label">Horario</label>
            <input class="form-control" name="horario_ct" value="{{old('horario_ct')}}" id="horario_ct">
        </div>



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
                <label for="nombre_tutor_fct" class="form-label">Nombre del tutor</label>
                <input class="form-control" name="nombre_tutor_fct" value="{{old('nombre_tutor_fct')}}" id="nombre_tutor_fct"  aria-describedby="HelpTutor">
                <div id="HelTutor" class="form-text">
                    Nombre y apellidos del tutor de FCT.
                </div>
            </div>


            <!-- nif del tutor de FCT -->
            <div class="mb-3 col-2">
                <label for="nif_tutor_fct" class="form-label">NIF del tutor</label>
                <input class="form-control" type="text" name="nif_tutor_fct" value="{{old('nif_tutor_fct')}}" id="nif_tutor_fct">
            </div>

        </div>


        <!-- Lugar de trabajo del tutor, Supongo que se refiere al centro de trabajo -->



    </div>



    <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
        Tab 3 content
    </div>
</div>
<!-- Tabs content -->
</form>
@endsection