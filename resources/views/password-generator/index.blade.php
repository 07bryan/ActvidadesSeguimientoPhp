@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Generador de Contraseñas</h1>

        <form method="POST" action="{{ route('password-generator.generate') }}">
            @csrf
            <div class="form-group">
                <label for="length">Longitud de la Contraseña:</label>
                <input type="number" id="length" name="length" class="form-control" required min="6" max="20" placeholder="Ingresa la longitud de la contraseña">
            </div>

            <button type="submit" class="btn btn-primary">Generar Contraseña</button>
        </form>
    </div>
@endsection
