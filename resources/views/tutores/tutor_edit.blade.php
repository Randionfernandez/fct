@extends('layouts.layout')

@section('title', 'Editar tutor')

@section('content')

@include('partials.validation-errors')

<!--    <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('tutores.update', $tutor) }}"> -->
<form class="form-group shadow p-3 mb-5 rounded" style="background-color: #fceeec;" 
      id="update-tutor" method="POST" action="{{ route('tutores.update', $tutor) }}">
    @method('PATCH')
    <h1 class="display-4">
        Editar tutor
    </h1>
    <hr>
    @include('tutores._form', ['btnText' => 'Actualizar','tutor'=>$tutor])
</form>

<div class="d-flex align-items-center mt-3">   
    <a class="btn btn-link" href="{{ route('tutores.index') }}">
        Regresar
    </a>
    <div class="justify-content-end">
        <!--   auth    -->
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