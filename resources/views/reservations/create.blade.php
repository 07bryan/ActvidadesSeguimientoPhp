@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-title">Crear Nueva Reserva</h1>

        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Introduce tu nombre">
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Introduce tu correo electrónico">
            </div>

            <div class="form-group">
                <label for="date">Fecha:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="time">Hora:</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>

            <div class="form-group">
                <label for="guests">Número de Invitados:</label>
                <input type="number" class="form-control" id="guests" name="guests" required min="1" placeholder="Número de invitados">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Guardar Reserva</button>
            </div>
        </form>
    </div>

    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-title {
            font-size: 28px;
            color: #4CAF50;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .btn-primary {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .text-center {
            text-align: center;
        }
    </style>
@endsection
