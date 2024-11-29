@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contraseña Generada</h1>

        <p><strong>Contraseña Aleatoria: </strong>{{ $password }}</p>

        <a href="{{ url('/password-generator') }}" class="btn btn-secondary">Generar Otra Contraseña</a>
    </div>
@endsection
