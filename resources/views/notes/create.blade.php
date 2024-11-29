@extends('layouts.app')

@section('content')
    <h1>Crear Nota</h1>

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea id="content" name="content" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar Nota</button>
    </form>
@endsection
