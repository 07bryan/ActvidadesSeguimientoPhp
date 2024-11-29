@extends('layouts.app')

@section('content')
    <h1>Crear Receta</h1>

    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="ingredients">Ingredientes</label>
            <textarea id="ingredients" name="ingredients" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="instructions">Instrucciones</label>
            <textarea id="instructions" name="instructions" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar Receta</button>
    </form>
@endsection
