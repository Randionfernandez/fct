@extends('layouts.layout')


@section('title', 'Tutores')


@section('content')

<div class="row">
    <h1>Tutores</h1>
<a class="col-auto btn btn-primary mb-1"
   href="{{ route('tutores.create') }}"
   >Crear tutor</a>
</div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>@lang('Empresa')</th>
            <th>@lang('Núm. identificación')</th>
            <th>@lang('nombre del tutor')</th>
            <th>@lang('estado')</th>
            <th>@lang('telefono')</th>
            <th>@lang('email')</th>
            <th>@lang('Operaciones')</th>


        </tr>
    </thead>
    <tbody>

        @foreach($tutores as $tutor)
        <tr>
            <td>{{ $tutor->nombre_emp }}</td>
            <td>{{ $tutor->nif_tutor_emp }}</td>
            <td>{{ $tutor->apellido1_tutor_emp }} {{ $tutor->apellido2_tutor_emp }}, {{ $tutor->nombre_tutor_emp }}</td>
            <td>{{ $tutor->status }}</td>
            <td>{{ $tutor->telefono }}</td>
            <td>{{ $tutor->email }}</td>

            <td>
                <!-- show  -->
                <a class="btn btn-small btn-success" href="{{ route('tutores.show', $tutor) }}">Mostrar</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

{{$tutores->links()}}

@endsection