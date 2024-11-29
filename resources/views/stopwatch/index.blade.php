@extends('layouts.app')

@section('content')
    <div class="stopwatch-container">
        <h1 class="stopwatch-title">Cronómetro</h1>

        @if(session('elapsed_time'))
            <p class="elapsed-time">Tiempo transcurrido: <span>{{ session('elapsed_time') }} segundos</span></p>
        @else
            <p class="elapsed-time">¡El cronómetro aún no ha comenzado!</p>
        @endif

        <div class="buttons-container">
            <form action="{{ route('stopwatch.start') }}" method="POST">
                @csrf
                <button type="submit" class="btn-start">Iniciar Cronómetro</button>
            </form>

            @if(session('start_time'))
                <form action="{{ route('stopwatch.stop') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-stop">Detener Cronómetro</button>
                </form>
            @endif

            <form action="{{ route('stopwatch.reset') }}" method="POST">
                @csrf
                <button type="submit" class="btn-reset">Resetear Cronómetro</button>
            </form>
        </div>
    </div>

    <style>
        /* Contenedor principal */
        .stopwatch-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stopwatch-title {
            font-size: 28px;
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .elapsed-time {
            font-size: 20px;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .elapsed-time span {
            color: #4CAF50;
        }

        /* Estilos de los botones */
        .buttons-container {
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .buttons-container form {
            display: inline;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-start {
            background-color: #4CAF50;
        }

        .btn-start:hover {
            background-color: #45a049;
        }

        .btn-stop {
            background-color: #f44336;
        }

        .btn-stop:hover {
            background-color: #e53935;
        }

        .btn-reset {
            background-color: #2196F3;
        }

        .btn-reset:hover {
            background-color: #1976D2;
        }
    </style>
@endsection
