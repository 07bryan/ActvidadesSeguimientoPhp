@extends('layouts.app')

@section('content')
    <h1>Crear Evento</h1>

    <form action="{{ route('events-calendar.store') }}" method="POST">
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
            <label for="start_time">Hora de Inicio</label>
            <input type="datetime-local" id="start_time" name="start_time" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="end_time">Hora de Fin</label>
            <input type="datetime-local" id="end_time" name="end_time" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar Evento</button>
    </form>
@endsection
