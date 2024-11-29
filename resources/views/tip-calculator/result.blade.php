@extends('layouts.app')

@section('content')
    <div class="result-container">
        <h1 class="result-title">Resultado del Cálculo de la Propina</h1>

        <div class="result-details">
            <p><strong>Monto Total: </strong>${{ number_format($total, 2) }}</p>
            <p><strong>Porcentaje de Propina: </strong>{{ $percentage }}%</p>
            <p><strong>Propina Calculada: </strong>${{ number_format($tip, 2) }}</p>
            <p><strong>Total a Pagar: </strong>${{ number_format($total + $tip, 2) }}</p>
        </div>

        <a href="{{ url('/tip-calculator') }}" class="btn-return">Volver</a>
    </div>

    <style>
        /* Contenedor general */
        .result-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .result-title {
            font-size: 28px;
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .result-details {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin-bottom: 30px;
        }

        .result-details p {
            margin: 10px 0;
        }

        .result-details strong {
            color: #4CAF50;
        }

        /* Estilo del botón de volver */
        .btn-return {
            display: inline-block;
            padding: 12px 20px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-return:hover {
            background-color: #45a049;
        }
    </style>
@endsection
