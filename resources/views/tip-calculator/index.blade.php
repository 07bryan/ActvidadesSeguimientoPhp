@extends('layouts.app')

@section('content')
    <div class="tip-calculator-container">
        <h1 class="title">Calculadora de Propinas</h1>
        
        <!-- Formulario para calcular la propina -->
        <form method="POST" action="{{ route('tip-calculator.calculate') }}" class="tip-calculator-form">
            @csrf
            <div class="form-group">
                <label for="total">Monto Total:</label>
                <input type="number" id="total" name="total" class="form-control" required step="0.01" min="0" placeholder="Introduce el monto de la cuenta">
            </div>

            <div class="form-group">
                <label for="percentage">Porcentaje de Propina:</label>
                <input type="number" id="percentage" name="percentage" class="form-control" required step="1" min="0" placeholder="Introduce el porcentaje de propina">
            </div>

            <button type="submit" class="btn-submit">Calcular Propina</button>
        </form>

        <!-- Resultado de la propina calculada -->
        @isset($tip)
            <div class="result">
                <h2>Resultado</h2>
                <p><strong>Monto Total:</strong> ${{ number_format($total, 2) }}</p>
                <p><strong>Porcentaje de Propina:</strong> {{ $percentage }}%</p>
                <p><strong>Propina Calculada:</strong> ${{ number_format($tip, 2) }}</p>
            </div>
        @endisset
    </div>

    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .tip-calculator-container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            color: #4CAF50;
            font-size: 28px;
            margin-bottom: 30px;
        }

        /* Estilo del formulario */
   
