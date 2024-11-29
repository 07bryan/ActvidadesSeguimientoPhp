@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Resultado del Cálculo de la Propina</h1>

        <p><strong>Monto Total: </strong>${{ number_format($total, 2) }}</p>
        <p><strong>Porcentaje de Propina: </strong>{{ $percentage }}%</p>
        <p><strong>Propina Calculada: </strong>${{ number_format($tip, 2) }}</p>
        <p><strong>Total a Pagar: </strong>${{ number_format($total + $tip, 2) }}</p>

        <a href="{{ url('/tip-calculator') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
