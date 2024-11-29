@extends('layouts.app')

@section('content')
    <h1>Calendario de Eventos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('events-calendar.create') }}" class="btn btn-primary">Crear Evento</a>

    <ul>
        @foreach ($events as $event)
            <li>
                <strong>{{ $event->title }}</strong><br>
                {{ $event->description }}<br>
                <strong>Inicio:</strong> {{ $event->start_time }}<br>
                <strong>Fin:</strong> {{ $event->end_time }}<br>
            </li>
        @endforeach
    </ul>
@endsection
