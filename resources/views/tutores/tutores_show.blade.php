@extends('layouts.layout')

////////////////////////////////////   E L I M I N A R  /////////////////
@section('title', 'Tutor de empresa')


@section('content')

<form class="form-group shadow p-3 mb-5 rounded" style="background-color: #fceeec;" action="{{route('tutores.create')}}" method='post'>
    <h1 class="display-4">
        Tutor de empresa
    </h1>
    <hr>
    @include('tutores._form',['btnText'=>'Editar'])

</form>

<div class="d-flex align-items-center mt-3">   
    <a class="btn btn-link" href="{{ route('tutores.index') }}">
        Regresar
    </a>
    <div class="justify-content-end">
        <!--   auth    -->
        <a class="btn btn-primary"                                   
           href="{{ route('tutores.edit', ['tutor' =>  $tutor]) }}">Editar</a>
        <a class="btn btn-danger"
           href="#"
           onclick="document.getElementById('delete-tutor').submit()">Eliminar</a>
        <!--   endauth    -->
    </div>
    <form id="delete-tutor"
          class="d-none"
          method="POST" action="{{ route('tutores.destroy', $tutor) }}">
        @csrf @method('DELETE')
    </form>

</div>

@endsection

