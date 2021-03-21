@extends('layouts.layout')


@section('title', 'Editar tutor')

@section('content')

            @include('partials.validation-errors')

        <!--    <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('tutores.update', $tutor) }}"> -->
            <form class="form-group shadow p-3 mb-5 rounded" style="background-color: #fceeec;" method="POST" action="{{ route('tutores.update', $tutor) }}">
                @method('PATCH')
                <h1 class="display-4">
                    Editar tutor
                </h1>
                <hr>
                @include('tutores._form', ['btnText' => 'Actualizar','tutor'=>$tutor])
            </form>
@endsection