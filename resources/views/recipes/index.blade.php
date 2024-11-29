@extends('layouts.app')

@section('content')
    <h1>Plataforma de Recetas</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('recipes.create') }}" class="btn btn-primary">Crear Receta</a>

    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <strong>{{ $recipe->title }}</strong><br>
                {{ $recipe->description }}<br>
                <strong>Ingredientes:</strong> {{ $recipe->ingredients }}<br>
                <strong>Instrucciones:</strong> {{ $recipe->instructions }}<br>
            </li>
        @endforeach
    </ul>
@endsection
