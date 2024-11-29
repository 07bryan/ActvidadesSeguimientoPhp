@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-title">Lista de Reservas</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Invitados</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}</td>
                            <td>{{ $reservation->guests }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="actions">
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">Crear Reserva</a>
        </div>
    </div>

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-title {
            font-size: 28px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .table-container {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .actions {
            margin-top: 30px;
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
@endsection
