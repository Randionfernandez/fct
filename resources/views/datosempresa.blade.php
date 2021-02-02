@extends('layouts.layout')

@section('contenido')
<h1>Datos de empresa para nuevo Acuerdo</h1>

<form method="post">
    @csrf
    <h3>Empresa</h3>


    <!-- Nombre, texto, obligatorio -->
    <div class="row align-items-start">
        <div class="mb-3 col-6">
            <label for="nombre_empresa" class="form-label">Nombre</label>
            <input class="form-control" type="text" id="nombre_empresa">
        </div>


        <!-- CIF de la empresa, texto, obligatorio -->
        <div class="mb-3 col-2">
            <label for="cif" class="form-label">CIF</label>
            <input  class="form-control" type="text" id="cif" required >
        </div>

    </div>

    


    <!-- Dirección de la empresa , text, obligatorio -->
    <div class="row align-items-start">
        <div class="mb-3 col-6">
            <label for="direccion_empresa" class="form-label">Direccón postal</label>
            <input class="form-control" type="text" maxlength="5" id="direccion_empresa" required >
        </div>



        <!-- Población, text, obligatorio -->
        <div class="mb-3 col-4">
            <label for="poblacion_empresa" class="form-label">Problación</label>
            <input  class="form-control" type="text" id="poblacion_empresa" required>
        </div>



        <!-- Código postal, texto 5 numéricos -->
        <div class="mb-3 col-2">
            <label for="cp_empresa" class="form-label">Código postal</label>
            <input  class="form-control" type="text" maxlength="5" id="cp_empresa" required placeholder="07123">
        </div>
    </div>


    <!-- Teléfono 1, obligatorio -->
    <div class="row align-items-start">
        <!-- Email, email, obligatorio -->
        <div class="mb-3 col-4">
            <label for="email_empresa" class="form-label">E-mail</label>
            <input class="form-control" type="email" id="email_empresa" placeholder="name@example.com">
        </div>


        <div class="mb-3 col-2">
            <label for="telefono1" class="form-label">Teléfono 1</label>
            <input class="form-control" type="tel" id="telefono1" required placeholder="971 123 456">
        </div>


        <!-- Teléfono 2, opcional -->
        <div class="mb-3 col-2">
            <label for="telefono2" class="form-label">Teléfono 2</label>
            <input class="form-control" type="tel" id="telefono2" placeholder="971 123 456">
        </div>


        <!-- Fax, opcional -->
        <div class="mb-3 col-2">
            <label for="fax" class="form-label">Fax</label>
            <input class="form-control" type="tel" id="fax" placeholder="971 123 456">
        </div>
    </div>



    <!-- Sector productivo, radio, obligatorio -->
    <div class="row align-items-start">
        <div class="form-check col-2">
            <input class="form-check-input" type="radio" name="sector" id="id_primario">
            <label class="form-check-label" for="id_primario">
                Primario
            </label>
        </div>
        <div class="form-check col-2">
            <input class="form-check-input" type="radio" name="sector" id="id_secundario">
            <label class="form-check-label" for="id_secundario">
                Secundario
            </label>
        </div>
        <div class="form-check col-2">
            <input class="form-check-input" type="radio" name="sector" id="id_terciario">
            <label class="form-check-label" for="id_terciario">
                Terciario
            </label>
        </div>
    </div>



    <!-- Actividad principal, texto -->
    <div class="mb-3">
        <label for="id_actividad" class="form-label">Actividad principal</label>
        <input class="form-control" type="text" id="id_actividad" placeholder="Actividad principal">
    </div>



    <!-- Titularidad, -->
    <div class="row align-items-start">
        <div class="form-check col-2">
            <input class="form-check-input" type="radio" name="titularidad" id="id_publica">
            <label class="form-check-label" for="id_publica">
                Pública
            </label>
        </div>
        <div class="form-check col-2">
            <input class="form-check-input" type="radio" name="titularidad" id="id_privada">
            <label class="form-check-label" for="id_privada">
                Privada
            </label>
        </div>
    </div>



    <h3>Representante de la empresa</h3>

    <!-- Nombre del representante de la empresa, text, obligatorio -->


    <!-- nif del representante de la empresa, obligatorio -->


    <h3>Centro de trabajo</h3>

    <!-- Nombre del centro de trabajo, text, obligatorio -->


    <!-- dirección del centro de trabajo -->


    <!-- Dircción -->


    <!-- Población -->


    <!-- Código postal -->


    <!-- Actividad, text, opcional? -->


    <!-- Número de trabajadores -->


    <!-- Email, email, obliglatorio -->


    <!-- Teléfono1, obligatorio -->


    <!-- Teléfono2, opcional -->


    <!-- Tipo de jornada,  ¿radio o checkbox?,obligatorio -->


    <!-- Horario, text, opcional -->




    <!-- Tutores -->
    <h3>Tutores</h3>

    <!-- Coordinador FCT, text, opcional -->


    <!-- nif del coordinador de FCT, obligatorio se existe coordinador -->



    <!-- Nombre tutor de empresa -->


    <!-- nif del tutor de empresa -->


    <!-- Lugar de trabajo del tutor, Supongo que se refiere al centro de trabajo -->


    <!-- Población en que se firma -->


    <!-- Fecha del envio de estos datos -->



    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
