@extends('layouts.layout')

@section('contenido')
<h1>Datos iniciales para nuevo Acuerdo</h1>

<form method="post">
    @csrf
    <fieldset class="bg-info border p-2">
        <legend>Datos de empresa</legend>

        <!-- Nombre, texto, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="nombre_emp" class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre_emp" id="nombre_emp">
            </div>


            <!-- CIF de la empresa, texto, obligatorio -->
            <div class="mb-3 col-2">
                <label for="cif" class="form-label">CIF</label>
                <input class="form-control" type="text" name="cif" id="cif">
            </div>

        </div>


        <!-- Dirección de la empresa , text, obligatorio -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="direccion_emp" class="form-label">Direccón postal</label>
                <input class="form-control" type="text" name="direccion_emp" id="direccion_emp">
            </div>


            <!-- Población, text, obligatorio -->
            <div class="mb-3 col-4">
                <label for="poblacion_emp" class="form-label">Población</label>
                <input class="form-control" type="text" name="poblacion_emp" id="poblacion_emp">
            </div>


            <!-- Código postal, texto 5 numéricos -->
            <div class="mb-3 col-2">
                <label for="cp_emp" class="form-label">Código postal</label>
                <input class="form-control" type="text" maxlength="5" name="cp_emp" id="cp_emp" placeholder="07123">
            </div>
        </div>


        <!-- Email, obligatorio -->
        <div class="row align-items-start">
            <!-- Email, email, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="email_emp" class="form-label">E-mail</label>
                <input class="form-control" type="email" name="email_emp" id="email_emp" placeholder="name@example.com" aria-describedby="HelpEmail_emp">
                <div id="HelpEmail_emp" class="form-text">Nunca compartiremos su email con otras personas o empresas.</div>
            </div>

            <!-- Teléfono 1, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="telefono1_emp" class="form-label">Teléfono 1</label>
                <input class="form-control" type="tel" name="telefono1_emp" id="telefono1_emp"  placeholder="971 123 456">
            </div>


            <!-- Teléfono 2, opcional -->
            <div class="mb-3 col-auto">
                <label for="telefono2_emp" class="form-label">Teléfono 2</label>
                <input class="form-control" type="tel" name="telefono2_emp" id="telefono2_emp" placeholder="971 123 456">
            </div>


            <!-- Fax, opcional -->
            <div class="mb-3 col-auto">
                <label for="fax_emp" class="form-label">Fax</label>
                <input class="form-control" type="tel" name="fax_emp" id="fax_emp" placeholder="971 123 456">
            </div>
        </div>


        <!-- Sector productivo, radio, obligatorio -->
        <fieldset class="bg-ligth">
            <legend>Sector productivo</legend>
            <div class="row ml-2">
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="sector" value="primario" id="id_primario">
                    <label class="form-check-label" for="id_primario">
                        Primario
                    </label>
                </div>
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="sector" value="secundario" id="id_secundario">
                    <label class="form-check-label" for="id_secundario">
                        Secundario
                    </label>
                </div>
                <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="sector" value="terciario" id="id_terciario">
                    <label class="form-check-label" for="id_terciario">
                        Terciario
                    </label>
                </div>
            </div>
        </fieldset>


        <!-- Actividad principal, texto -->
        <div class="mb-3">
            <label for="actividad_emp" class="form-label">Actividad principal</label>
            <input class="form-control" type="text" name="actividad_emp" id="actividad_emp" placeholder="Actividad principal">
        </div>


        <!-- Titularidad, -->
        <div class="row align-items-start">
            <div class="form-check col-2">
                <input class="form-check-input" type="radio" name="titularidad" value="publica" id="id_publica">
                <label class="form-check-label" for="id_publica">
                    Pública
                </label>
            </div>
            <div class="form-check col-2">
                <input class="form-check-input" type="radio" name="titularidad" value="privada" id="id_privada">
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
                <input class="form-control" type="text" name="nombre_representante_emp" id="nombre_representante_emp" aria-describedby="HelpBlock">
                <div id="HelpBlock" class="form-text">
                    Nombre y apellidos del representante de la empresa.
                </div>
            </div>


            <!-- nif del representante de la empresa, obligatorio -->
            <div class="mb-3 col-2">
                <label for="nif_representante_emp" class="form-label">NIF</label>
                <input class="form-control" type="text" name="nif_representante_emp" id="nif_representante_em">
            </div>

        </div>
    </fieldset>


    <fieldset class="border p-2">
        <legend>Centro de trabajo</legend>

        <!-- Nombre del centro de trabajo, text, obligatorio -->
        <div class="mb-3 col-6">
            <label for="nombre_ct" class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre_ct" id="nombre_ct">
        </div>


        <!-- Dirección del centro de trabajo -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="direccion_ct" class="form-label">Direccón postal</label>
                <input class="form-control" type="text" name="direccion_ct" id="direccion_ct">
            </div>

            <!-- Población, text, obligatorio -->
            <div class="mb-3 col-4">
                <label for="poblacion_ct" class="form-label">Población</label>
                <input class="form-control" type="text" name="poblacion_ct" id="poblacion_ct">
            </div>

            <!-- Código postal, texto 5 numéricos -->
            <div class="mb-3 col-2">
                <label for="cp_ct" class="form-label">Código postal</label>
                <input class="form-control" type="text" name="cp_ct" maxlength="5" id="cp_ct" placeholder="07123">
            </div>
        </div>


        <!-- Actividad, text, opcional? -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="actividad_ct" class="form-label">Actividad principal</label>
                <input class="form-control" type="text" name="actividad_ct" id="actividad_ct">
            </div>

            <!-- Número de trabajadores -->
            <div class="mb-3 col-4">
                <label for="num_trabajadores_ct" class="form-label">Número de trabajadores</label>
                <input class="form-control" type="text" name="num_trabajadores_ct" id="num_trabajadores_ct">
            </div>
        </div>


        <!-- Email, email, obliglatorio -->
        <div class="row align-items-start">
            <!-- Email, email, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="email_ct" class="form-label">E-mail</label>
                <input class="form-control" type="email" name="email_ct" id="email_ct" placeholder="name@example.com">
                <div id="emailHelp" class="form-text">Nunca compartiremos su email con otras personas o empresas.</div>
            </div>

            <!-- Teléfono 1, obligatorio -->
            <div class="mb-3 col-auto">
                <label for="telefono1_ct" class="form-label">Teléfono 1</label>
                <input class="form-control" type="tel" name="telefono1_ct" id="telefono1_ct"  placeholder="971 123 456">
            </div>


            <!-- Teléfono 2, opcional -->
            <div class="mb-3 col-auto">
                <label for="telefono2_ct" class="form-label">Teléfono 2</label>
                <input class="form-control" type="tel" name="telefono2_ct" id="telefono2_ct" placeholder="971 123 456">
            </div>


            <!-- Fax, opcional -->
            <div class="mb-3 col-auto">
                <label for="fax_ct" class="form-label">Fax</label>
                <input class="form-control" type="tel" name="fax_ct" id="fax_ct" placeholder="971 123 456">
            </div>
        </div>


        <!-- Tipo de jornada,  radio,obligatorio -->
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jornada" value="continua" id="jornadacontinua">
            <label class="form-check-label" for="jornadacontinua">
                Jornada continua
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jornada" value="partida" id="jornadapartida">
            <label class="form-check-label" for="jornadapartida">
                Jornada partida
            </label>
        </div>


        <!-- Horario, text, opcional -->
        <div class="mb-3 col-2">
            <label for="horario" class="form-label">Horario</label>
            <input class="form-control" type="text" name="horario" id="horario">
        </div>

    </fieldset>


    <!-- Tutores -->
    <fieldset class="border p-2">
        <legend>Tutores</legend>

        <!-- Coordinador de FCT, text, opcional -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="nombre_coordinador_fct" class="form-label">Nombre del coordinador de FCT</label>
                <input class="form-control" type="text" name="nombre_coordinador_fct" id="nombre_coordinador_fct" aria-describedby="HelpCoordinador">
                <div id="HelpCoordinador" class="form-text">
                    Nombre y apellidos del coordinador de FCT de la empresa (si lo hubiese).
                </div>
            </div>


            <!-- nif del coordinador de FCT, obligatorio se existe coordinador -->
            <div class="mb-3 col-2">
                <label for="nif_coordinador_fct" class="form-label">NIF del coordinador FCT</label>
                <input class="form-control" type="text" name="nif_coordinador_fct" id="nif_coordinador_fct">
            </div>

        </div>


        <!-- Tutor de FCT, text -->
        <div class="row align-items-start">
            <div class="mb-3 col-6">
                <label for="nombre_tutor_fct" class="form-label">Nombre del tutor</label>
                <input class="form-control" type="text" name="nombre_tutor_fct" id="nombre_tutor_fct"  aria-describedby="HelpTutor">
                <div id="HelTutor" class="form-text">
                    Nombre y apellidos del tutor de FCT.
                </div>
            </div>


            <!-- nif del tutor de FCT -->
            <div class="mb-3 col-2">
                <label for="nif_tutor_fct" class="form-label">NIF del tutor</label>
                <input class="form-control" type="text" name="nif_tutor_fct"  id="nif_tutor_fct">
            </div>

        </div>


        <!-- Lugar de trabajo del tutor, Supongo que se refiere al centro de trabajo -->

    </fieldset>


    <div class="row">
        <!-- Población en que se firma -->
        <div class="form-floating mb-3">
            <label for="lugar_firma" class="form-label">Firmado en: </label>
            <input class="form-control" type="text" name="lugar_firma" id="lugar_firma">
        </div>

        <!-- Fecha del envío de estos datos -->
        <div class="form-floating mb-3">
            <label for="fecha_firma" class="form-label">, el </label>
            <input class="form-control" type="date" name="fecha_firma" id="fecha_firma">
        </div>
    </div>


    <!-- Comentarios sobre las prácticas -->
    <div class="mb-3">
        <label for="comentarios" class="form-label">Comentarios</label>
        <textarea class="form-control" name="comentarios" id="comentarios" rows="3"></textarea>
    </div>



    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
