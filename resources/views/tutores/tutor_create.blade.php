@extends('layouts.layout');

@section('title', 'Crear tutor')

@section('content')

@include('partials.validation-errors')

<form class="form-group shadow p-3 mb-5 rounded" style="background-color: #fceeec;"
action="{{route('tutores.store')}}" method='post'>
    <h1 class="display-4">
        Añadir un tutor
    </h1>
    <hr>


    @include('tutores._form',['btnText'=>'Guardar'])



    <a class="btn btn-secondary"
       href="{{ route('tutores.index') }}"
       >Regresar</a>

</form>
@endsection