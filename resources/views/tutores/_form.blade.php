@csrf 

<!-- Tutores -->
<fieldset class="border p-2">
    <legend>Tutor de empresa</legend>

    <!-- Nombre de la empresa -->
    <div class="row align-items-start">
        <div class="mb-3 col-6">
            <label for="nombre_emp" class="form-label">{{__('Denominacion')}}</label>
            <input class="form-control" name="nombre_emp" value="{{old('nombre_emp',$tutor->nombre_emp)}}" id="nombre_emp">
        </div>

        <!-- Tipo de documento identificador del tutor, obligatorio -->
        <div class="mb-3 col-2">
            <label for="documento" class="form-label">@lang('tipo_doc')</label>
            <select class="form-select" name='documento' required id="documento">
                <option value="dni" @if (old('documento',$tutor->documento) === 'dni') selected @endif>DNI</option>
                <option value="nie" @if (old('documento',$tutor->documento) === 'nie') selected @endif>NIE</option>
                <option value="pasaporte" @if (old('documento',$tutor->documento) === 'pasaporte') selected @endif>Pasaporte</option>
            </select>
        </div>


        <!-- documento identificador del tutor, obligatorio -->
        <div class="mb-3 col-2">
            <label for="nif_tutor_emp" class="form-label">Documento identidad</label>
            <input class="form-control" name="nif_tutor_emp" value="{{old('nif_tutor_emp',$tutor->nif_tutor_emp)}}" required id="nif_tutor_emp">
            <div class="error">{!! $errors->first('nif_tutor_emp','<small>:message</small>') !!}</div>  
        </div>

    </div>


    <!-- Tutor de FCT, text -->
    <div class="row align-items-start">
        <div class="mb-3 col-2">
            <label for="nombre_tutor_emp" class="form-label">Nombre del tutor</label>
            <input class="form-control" name="nombre_tutor_emp" value="{{old('nombre_tutor_emp',$tutor->nombre_tutor_emp)}}" required id="nombre_tutor_emp">
            <div id="HelTutor" class="form-text">
                Nombre del tutor de FCT.
            </div>
        </div>

        <div class="mb-3 col-2">
            <label for="apellido1_tutor_emp" class="form-label">Primer apellido</label>
            <input class="form-control" name="apellido1_tutor_emp" value="{{old('apellido1_tutor_emp',$tutor->apellido1_tutor_emp)}}" required id="apellido1_tutor_emp">
            <div>{!! $errors->first('apellido1_tutor_emp','<small>:message</small>') !!}</div>  
        </div>

        <div class="mb-3 col-2">
            <label for="apellido2_tutor_emp" class="form-label">Segundo apellido</label>
            <input class="form-control" name="apellido2_tutor_emp" value="{{old('apellido2_tutor_emp',$tutor->apellido2_tutor_emp)}}" id="apellido2_tutor_emp">
        </div>
    </div>


    <div class="row align-items-start">
        <div class="mb-3 col-2">
            <label for="status" class="form-label">Estado</label>
            <select class="form-select" name='status' required id="status">
                <option value="activo" @if (old('status',$tutor->status) === 'activo') selected @endif>Activo</option>
                <option value="inactivo" @if (old('status',$tutor->status) === 'inactivo') selected @endif>Inactivo</option>
            </select>
        </div>

        <div class="mb-3 col-2">
            <label for="Telefono" class="form-label">Teléfono</label>
            <input class="form-control" name="telefono" value="{{old('telefono',$tutor->telefono)}}" id="telefono">
        </div>

        <div class="mb-3 col-2">
            <label for="email" class="form-label">Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input class="form-control" name="email" value="{{old('email',$tutor->email)}}" id="email">
            </div>
        </div>
    </div>

</fieldset>

<button type="submit" class="btn btn-primary">{{$btnText}}</button>