@extends('layouts.app')

@section('content')
    <h1>Mis Notas</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('notes.create') }}" class="btn btn-primary">Crear Nota</a>

    <ul>
        @foreach ($notes as $note)
            <li>
                <strong>{{ $note->title }}</strong>
                <p>{{ $note->content }}</p>
            </li>
        @endforeach
    </ul>
@endsection
